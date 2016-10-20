Project SecureMt

Product Requirements Document (PRD) (Software requirements specification (SRS))

1. Users can log in and check their account details and balance in dashboard.
2. Users can make secure transactions to other registered users.
3. Integration with payment gateway
4. Alert / notify users with SMSs/Calls/Emails.



List of features :
a. Money Transfer
b. Balance Check


API's exposed : 
1. /getBalance
2. /moneyTransfer
3. /getAccountDetails
4. /getTransactionDetails


APIs

 /getbalance

Request Format : 

   POST Request to : 
   http://<username>:<auth-token>@vimmey.com/securemt/getbalance


      #<post-params>

         {
         "userid":"2211"
         }


Response Format : 

         {
         "userid":"2211",
         "balance":"25000.00”
         }

      OR If invalid userId is passed, then the response is : 
         {
         "userid":"2211",
         "balance":"25000.00”
         }
         Invalid UserId


 /transact

Request Format : 

   POST Request to : 
   http://<username>:<auth-token>@vimmey.com/securemt/transact


      #<post-params>

         {
         "FromUserId":"2211",
         "ToUserId":"2505",
         "Amount":"2000.00"
         }

Response Format : 

         {
         "tid":"412",
         "status":"accepted",
         "date_created":"2016-09-12 16:32:32",
         "date_completed":null,
         "details":{
         "from_user":"2505",
         "to_user":"2505",
         "amount":"61544.57"
         }
         




 /gettransactiondetails

Request Format : 

   POST Request to : 
   http://<username>:<auth-token>@vimmey.com/securemt/gettransactiondetails


      #<post-params>

         {
         "TransactionId":"2211"
         }


Response Format : 

         {
         "tid":"412",
         "status":"accepted",
         "date_created":"2016-09-12 16:32:32",
         "date_completed":null,
         "details":{
         "from_user":"2505",
         "to_user":"2505",
         "amount":"61544.57"
         }
      

 /getaccountdetails

Request Format : 

   POST Request to : 
   http://<username>:<auth-token>@vimmey.com/securemt/getaccountdetails


      #<post-params>

         {
         "userid":"2211"
         }

   OR

         {
         "userName":"rajchopra"
         }

Response Format : 

         {
         "user_id":"2505",
         "username":"vmychopra",
         "date_created":"2016-09-09 21:33:10",
         "expiry_date":null,
         "email_id":"vmy.chopra@gmail.com",
         "mbl_no":"9999988888",
         "account_status":"active"


