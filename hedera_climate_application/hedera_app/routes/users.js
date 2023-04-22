var express = require('express');
var router = express.Router();
var db=require('../db_connect');




var cors = require('cors');
var app = express();
 
app.use(cors());
//app.use(cors({origin: '*'}));





router.get('/form', function(req, res, next) { 
res.render('users'); 
});




// Fetch Hedera Account ID via ajax call from index.php files to be used for Admin Signup

router.post('/admin_hedera_accountId', cors(), function(req, res, next) {

var today = new Date();
var token_id = req.body.token_id;
const { 
 Client, 
 PrivateKey, 
 AccountCreateTransaction, 
 AccountBalanceQuery, 
 Hbar, 
 TransferTransaction
} = require("@hashgraph/sdk");
require("dotenv").config();

//Grab your Hedera testnet account ID and private key from your .env file
const myAccountId = process.env.MY_ACCOUNT_ID;
const myPrivateKey = process.env.MY_PRIVATE_KEY;

// If we weren't able to grab it, we should throw a new error
if (myAccountId == null || myPrivateKey == null ) {
    throw new Error("Environment variables myAccountId and myPrivateKey must be present");
}


res.json({
            status:true,
            accountid:myAccountId,
            result:'success'
});
console.log("Admin Account ID is: " +myAccountId);

   


}); 









// Check your Hedera Account Balance for Admin via ajax call from dashboard.php files


router.post('/balance', cors(), function(req, res, next) {

var today = new Date();
var token_id = req.body.token_id;
const { 
 Client, 
 PrivateKey, 
 AccountCreateTransaction, 
 AccountBalanceQuery, 
 Hbar, 
 TransferTransaction
} = require("@hashgraph/sdk");
require("dotenv").config();

//Grab your Hedera testnet account ID and private key from your .env file
const myAccountId = process.env.MY_ACCOUNT_ID;
const myPrivateKey = process.env.MY_PRIVATE_KEY;

// If we weren't able to grab it, we should throw a new error
if (myAccountId == null || myPrivateKey == null ) {
    throw new Error("Environment variables myAccountId and myPrivateKey must be present");
}

// Create our connection to the Hedera network
// The Hedera JS SDK makes this really easy!
const client = Client.forTestnet();

client.setOperator(myAccountId, myPrivateKey);

//Create new keys
const newAccountPrivateKey = PrivateKey.generateED25519(); 
const newAccountPublicKey = newAccountPrivateKey.publicKey;


(async () => {

console.log("Your Account ID is: " +myAccountId);

//Verify the account balance
const accountBalance = await new AccountBalanceQuery()
    .setAccountId(myAccountId)
    .execute(client);

console.log("The new account balance is: " +accountBalance.hbars.toTinybars() +" tinybars.");


//Request the cost of the query
const queryCost = await new AccountBalanceQuery()
 .setAccountId(myAccountId)
 .getCost(client);

console.log("The cost of query is: " +queryCost);


res.json({
            status:true,
            accountid:"Your Account ID is: " +myAccountId,
            message:"The new account balance is: " +accountBalance.hbars.toTinybars() +" tinybars.",
            cost: "The cost of query is: " +queryCost,
            tokenid:token_id,
            result:'success'

        });



})();
   


}); 










// Check your Hedera Account Balance for users(Waste Recyclers and Composters) via ajax call from dashboard_user.php files


router.post('/balance2', cors(), function(req, res, next) {

var today = new Date();
var token_id = req.body.token_id;
var private_key = req.body.private_key;
const { 
 Client, 
 PrivateKey, 
 AccountCreateTransaction, 
 AccountBalanceQuery, 
 Hbar, 
 TransferTransaction
} = require("@hashgraph/sdk");
require("dotenv").config();

//Grab your Hedera testnet account ID and private key from your .env file
//const myAccountId = process.env.MY_ACCOUNT_ID;
//const myPrivateKey = process.env.MY_PRIVATE_KEY;

const myAccountId = token_id;
const myPrivateKey = private_key;


// If we weren't able to grab it, we should throw a new error
if (myAccountId == null || myPrivateKey == null ) {
    throw new Error("Environment variables myAccountId and myPrivateKey must be present");
}

// Create our connection to the Hedera network
// The Hedera JS SDK makes this really easy!
const client = Client.forTestnet();

client.setOperator(myAccountId, myPrivateKey);

//Create new keys
const newAccountPrivateKey = PrivateKey.generateED25519(); 
const newAccountPublicKey = newAccountPrivateKey.publicKey;


(async () => {

console.log("Your Account ID is: " +myAccountId);

//Verify the account balance
const accountBalance = await new AccountBalanceQuery()
    .setAccountId(myAccountId)
    .execute(client);

console.log("The new account balance is: " +accountBalance.hbars.toTinybars() +" tinybars.");


//Request the cost of the query
const queryCost = await new AccountBalanceQuery()
 .setAccountId(myAccountId)
 .getCost(client);

console.log("The cost of query is: " +queryCost);


res.json({
            status:true,
            accountid:"Your Account ID is: " +myAccountId,
            message:"The new account balance is: " +accountBalance.hbars.toTinybars() +" tinybars.",
            cost: "The cost of query is: " +queryCost,
            tokenid:token_id,
            result:'success'

        });



})();
   


}); 
















// Rewards Waste Recyclers with Hedera Crypto Payments via ajax call from
//dashboard_recycling.php files

router.post('/payments', cors(), function(req, res, next) {

var today = new Date();
//var token_id = req.body.token_id;
var userid = req.body.userid;
var id =  req.body.id;
var reciever_account =  req.body.reciever_account;
var reciever_amount =  req.body.reciever_amount;

 var sql = 'select * from users_recycling WHERE userid = ?';
  db.query(sql, [userid],function (err, result) { 
      if (err) throw err;
         console.log("User dat is updated successfully "); 
 //console.log(result);
console.log(result[0].points);

var points_count = result[0].points;
var award_points = 10;
//var final_count  = parseInt(award_points) + parseInt(points_count);
var final_count  = parseFloat(award_points) + parseFloat(points_count);


console.log(final_count);


 var sql2 = 'UPDATE users_recycling SET points = ? WHERE userid = ?';
  db.query(sql2, [final_count, userid],function (err, result) { 
      if (err) throw err;
         console.log("Rewards updated successfully "); 
 console.log(result.affectedRows + " record(s) updated");
  });




 var sql3 = 'UPDATE recycling SET status = ? WHERE id = ?';
  db.query(sql3, ['collected', id],function (err, result) { 
      if (err) throw err;
         console.log(" updated successfully "); 
 console.log(result.affectedRows + " record(s) updated");
  });



  });



// start Hedera payments or Transfers


const { 
 Client, 
 PrivateKey, 
 AccountCreateTransaction, 
 AccountBalanceQuery, 
 Hbar, 
 TransferTransaction
} = require("@hashgraph/sdk");
require("dotenv").config();

//Grab your Hedera testnet account ID and private key from your .env file
const myAccountId = process.env.MY_ACCOUNT_ID;
const myPrivateKey = process.env.MY_PRIVATE_KEY;

// If we weren't able to grab it, we should throw a new error
if (myAccountId == null || myPrivateKey == null ) {
    throw new Error("Environment variables myAccountId and myPrivateKey must be present");
}

// Create our connection to the Hedera network
// The Hedera JS SDK makes this really easy!
const client = Client.forTestnet();

client.setOperator(myAccountId, myPrivateKey);

//Create new keys
const newAccountPrivateKey = PrivateKey.generateED25519(); 
const newAccountPublicKey = newAccountPrivateKey.publicKey;

(async () => {

const recieverAccountId = reciever_account;

var amount_pay  = parseFloat(reciever_amount);

//Verify the account balance
const accountBalance = await new AccountBalanceQuery()
    .setAccountId(recieverAccountId)
    .execute(client);

console.log("The Reciever account balance  before transaction is: " +accountBalance.hbars.toTinybars() +" tinybars.");

//Create the transfer transaction

const sendHbar = await new TransferTransaction()
    .addHbarTransfer(myAccountId, Hbar.fromTinybars(-amount_pay))
    .addHbarTransfer(recieverAccountId, Hbar.fromTinybars(amount_pay))
    .execute(client);


//Verify the transaction reached consensus
const transactionReceipt = await sendHbar.getReceipt(client);
console.log("The transfer transaction from Sender Account(Admin) to the Reciever Account(Waste Recycler) was: " + transactionReceipt.status.toString());

//Request the cost of the query
const queryCost = await new AccountBalanceQuery()
 .setAccountId(recieverAccountId)
 .getCost(client);

console.log("The cost of query is: " +queryCost);

//Check the new account's balance
const getNewBalance = await new AccountBalanceQuery()
    .setAccountId(recieverAccountId)
    .execute(client);

console.log("The Reciever account balance after the transfer is: " +getNewBalance.hbars.toTinybars() +" tinybars.");



res.json({
            status:true,
            message:"Transaction Successful",
            cost: "The cost of query is: " +queryCost,
            result:'success'

        });


})();



// end hedera payments


}); 














// Rewards Waste Composters with Hedera Crypto Payments via ajax call from
//dashboard_composting.php files

router.post('/payments2', cors(), function(req, res, next) {

var today = new Date();
//var token_id = req.body.token_id;
var userid = req.body.userid;
var id =  req.body.id;
var reciever_account =  req.body.reciever_account;
var reciever_amount =  req.body.reciever_amount;

 var sql = 'select * from users_recycling WHERE userid = ?';
  db.query(sql, [userid],function (err, result) { 
      if (err) throw err;
         console.log("User dat is updated successfully "); 
 //console.log(result);
console.log(result[0].points);

var points_count = result[0].points;
var award_points = 10;
//var final_count  = parseInt(award_points) + parseInt(points_count);
var final_count  = parseFloat(award_points) + parseFloat(points_count);


console.log(final_count);


 var sql2 = 'UPDATE users_recycling SET points = ? WHERE userid = ?';
  db.query(sql2, [final_count, userid],function (err, result) { 
      if (err) throw err;
         console.log("Rewards updated successfully "); 
 console.log(result.affectedRows + " record(s) updated");
  });




 var sql3 = 'UPDATE composting SET status = ? WHERE id = ?';
  db.query(sql3, ['collected', id],function (err, result) { 
      if (err) throw err;
         console.log(" updated successfully "); 
 console.log(result.affectedRows + " record(s) updated");
  });



  });



// start Hedera payments or Transfers


const { 
 Client, 
 PrivateKey, 
 AccountCreateTransaction, 
 AccountBalanceQuery, 
 Hbar, 
 TransferTransaction
} = require("@hashgraph/sdk");
require("dotenv").config();

//Grab your Hedera testnet account ID and private key from your .env file
const myAccountId = process.env.MY_ACCOUNT_ID;
const myPrivateKey = process.env.MY_PRIVATE_KEY;

// If we weren't able to grab it, we should throw a new error
if (myAccountId == null || myPrivateKey == null ) {
    throw new Error("Environment variables myAccountId and myPrivateKey must be present");
}

// Create our connection to the Hedera network
// The Hedera JS SDK makes this really easy!
const client = Client.forTestnet();

client.setOperator(myAccountId, myPrivateKey);

//Create new keys
const newAccountPrivateKey = PrivateKey.generateED25519(); 
const newAccountPublicKey = newAccountPrivateKey.publicKey;

(async () => {

const recieverAccountId = reciever_account;

//var mm = '50';
//var amount_pay  = parseFloat(mm);
var amount_pay  = parseFloat(reciever_amount);

//Verify the account balance
const accountBalance = await new AccountBalanceQuery()
    .setAccountId(recieverAccountId)
    .execute(client);

console.log("The Reciever account balance  before transaction is: " +accountBalance.hbars.toTinybars() +" tinybars.");

//Create the transfer transaction

const sendHbar = await new TransferTransaction()
    .addHbarTransfer(myAccountId, Hbar.fromTinybars(-amount_pay))
    .addHbarTransfer(recieverAccountId, Hbar.fromTinybars(amount_pay))
    .execute(client);


//Verify the transaction reached consensus
const transactionReceipt = await sendHbar.getReceipt(client);
console.log("The transfer transaction from Sender Account(Admin) to the Reciever Account(Waste Recycler) was: " + transactionReceipt.status.toString());

//Request the cost of the query
const queryCost = await new AccountBalanceQuery()
 .setAccountId(recieverAccountId)
 .getCost(client);

console.log("The cost of query is: " +queryCost);

//Check the new account's balance
const getNewBalance = await new AccountBalanceQuery()
    .setAccountId(recieverAccountId)
    .execute(client);

console.log("The Reciever account balance after the transfer is: " +getNewBalance.hbars.toTinybars() +" tinybars.");



res.json({
            status:true,
            message:"Transaction Successful",
            cost: "The cost of query is: " +queryCost,
            result:'success'

        });


})();



// end hedera payments


}); 



module.exports = router;