<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DepostitController extends Controller
{
    public function index()
    {
        // $user_id = DB::table('users')->where('name', 'admin')->first();
        // dd($user_id);
       return view('deposit');
    }
    public function update_transaction_id (Request $request)
    {
        $user = auth()->user();
        $user->transaction_id = $request->transaction_id; 
       $user->save();
       return back()->with('success','The deposit has been saved. It will become active when the administrator checks statistics.
       ');


    }
    public function ajax(Request $request)
    {
         $user_id = DB::table('users')->where('name', 'admin')->first();
        //  ($user_id['btcwallet'])

       if($request->wallet =="btc"){
      
        

        switch ($request->plan) {
            case "1":
                $string='
                <div class="dashboard-content">
                
                        <div class="container">
                            <div class="dashboard-title" style="padding-left: 40px;">
                                <svg viewBox="0 0 15.72 13.07" style="width: 21px;">
                                    <g id="invest-icon" viewBox="0 0 15.72 13.07">
                                        <rect x="0.5" y="4.66" width="14.72" height="7.91" rx="1.27" ry="1.27" fill="none" stroke-miterlimit="10"></rect>
                                        <path d="M13.28,6,4.81,2a1.24,1.24,0,0,0-1.6.67L1.89,5.74" transform="translate(0.12 -1.36)" fill="none" stroke-miterlimit="10"></path>
                                        <circle cx="7.86" cy="8.62" r="1.99" fill="none" stroke-miterlimit="10"></circle>
                                    </g>
                                </svg>
                                <h4> Deposit Confirmation </h4>
                            </div>
                        </div>
                
                      
                
                        <div class="container">
                
                
                Please send your payments to this bitcoin wallet address: <b> '.$user_id->btcwallet.' </b><br><br>
                
                <table class="table">
                <tbody><tr>
                 <th>Plan:</th>
                 <td>5% after 24 hours</td>
                </tr>
                <tr>
                 <th>Profit:</th>
                 <td>5.00% after 24 hours</td>
                </tr>
                <tr>
                 <th>Principal Return:</th>
                 <td>Yes</td>
                </tr>
                <tr>
                 <th>Principal Withdraw:</th>
                 <td>
                Not available </td>
                </tr>
                 
                <tr>
                 <th>Credit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th>Deposit Fee:</th>
                 <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
                </tr>
                <tr>
                 <th>Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th> Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                </tbody></table>
                <br><br>
                <form id="transction_id_form" action="/update-transaction-id" name="spend" method="get"><input type="hidden" name="form_id" value="16600203847644" wfd-invisible="true">
                
                <input type="hidden" name="form_token" value="f50ae4298601945065abe6e2df2bf605" wfd-invisible="true">
                <input type="hidden" name="a" value="deposit" wfd-invisible="true">
                <input type="hidden" name="action" value="confirm" wfd-invisible="true">
                <input type="hidden" name="type" value="process_1000" wfd-invisible="true">
                <input type="hidden" name="h_id" value="1" wfd-invisible="true">
                <input type="hidden" name="compound" value="" wfd-invisible="true">
                <input type="hidden" name="amount" value="15000.00" wfd-invisible="true">
                <table cellspacing="0" cellpadding="2" border="0">
                <tbody><tr>
                 <td colspan="2"><b>Required Information:</b></td>
                </tr>
                <tr>
                 <td>Transaction ID</td>
                 <td><input id="transaction_id" type="text" name="transaction_id" value="" class="inpts"></td>
                </tr>
                </tbody></table>
                
                <br><input type="submit" value="Save" class="sbmt"> &nbsp;
                <input id="candcel_deposit" type="button" class="sbmt" value="Cancel" onclick="document.location="></form>
                
                
                </div></div>';
              return response()->json($string);
              break;
            case "2":
                $string='
                <div class="dashboard-content">
                
                        <div class="container">
                            <div class="dashboard-title" style="padding-left: 40px;">
                                <svg viewBox="0 0 15.72 13.07" style="width: 21px;">
                                    <g id="invest-icon" viewBox="0 0 15.72 13.07">
                                        <rect x="0.5" y="4.66" width="14.72" height="7.91" rx="1.27" ry="1.27" fill="none" stroke-miterlimit="10"></rect>
                                        <path d="M13.28,6,4.81,2a1.24,1.24,0,0,0-1.6.67L1.89,5.74" transform="translate(0.12 -1.36)" fill="none" stroke-miterlimit="10"></path>
                                        <circle cx="7.86" cy="8.62" r="1.99" fill="none" stroke-miterlimit="10"></circle>
                                    </g>
                                </svg>
                                <h4> Deposit Confirmation </h4>
                            </div>
                        </div>
                
                      
                
                        <div class="container">
                
                
                Please send your payments to this bitcoin wallet address: <b> '.$user_id->btcwallet.' </b><br><br>
                
                <table class="table">
                <tbody><tr>
                 <th>Plan:</th>
                 <td>50% after 4days</td>
                </tr>
                <tr>
                 <th>Profit:</th>
                 <td>50.00% after 4 days</td>
                </tr>
                <tr>
                 <th>Principal Return:</th>
                 <td>Yes</td>
                </tr>
                <tr>
                 <th>Principal Withdraw:</th>
                 <td>
                Not available </td>
                </tr>
                 
                <tr>
                 <th>Credit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th>Deposit Fee:</th>
                 <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
                </tr>
                <tr>
                 <th>Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th> Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                </tbody></table>
                <br><br>
                <form id="transction_id_form" action="/update-transaction-id" name="spend" method="get"><input type="hidden" name="form_id" value="16600203847644" wfd-invisible="true">
                
                <input type="hidden" name="form_token" value="f50ae4298601945065abe6e2df2bf605" wfd-invisible="true">
                <input type="hidden" name="a" value="deposit" wfd-invisible="true">
                <input type="hidden" name="action" value="confirm" wfd-invisible="true">
                <input type="hidden" name="type" value="process_1000" wfd-invisible="true">
                <input type="hidden" name="h_id" value="1" wfd-invisible="true">
                <input type="hidden" name="compound" value="" wfd-invisible="true">
                <input type="hidden" name="amount" value="15000.00" wfd-invisible="true">
                <table cellspacing="0" cellpadding="2" border="0">
                <tbody><tr>
                 <td colspan="2"><b>Required Information:</b></td>
                </tr>
                <tr>
                 <td>Transaction ID</td>
                 <td><input id="transaction_id" type="text" name="transaction_id" value="" class="inpts"></td>
                </tr>
                </tbody></table>
                
                <br><input type="submit" value="Save" class="sbmt"> &nbsp;
                <input id="candcel_deposit" type="button" class="sbmt" value="Cancel" onclick="document.location="></form>
                
                
                </div></div>';
              return response()->json($string);

              break;
            case "3":
                $string='
                <div class="dashboard-content">
                
                        <div class="container">
                            <div class="dashboard-title" style="padding-left: 40px;">
                                <svg viewBox="0 0 15.72 13.07" style="width: 21px;">
                                    <g id="invest-icon" viewBox="0 0 15.72 13.07">
                                        <rect x="0.5" y="4.66" width="14.72" height="7.91" rx="1.27" ry="1.27" fill="none" stroke-miterlimit="10"></rect>
                                        <path d="M13.28,6,4.81,2a1.24,1.24,0,0,0-1.6.67L1.89,5.74" transform="translate(0.12 -1.36)" fill="none" stroke-miterlimit="10"></path>
                                        <circle cx="7.86" cy="8.62" r="1.99" fill="none" stroke-miterlimit="10"></circle>
                                    </g>
                                </svg>
                                <h4> Deposit Confirmation </h4>
                            </div>
                        </div>
                
                      
                
                        <div class="container">
                
                
                Please send your payments to this bitcoin wallet address: <b> '.$user_id->btcwallet.' </b><br><br>
                
                <table class="table">
                <tbody><tr>
                 <th>Plan:</th>
                 <td>100% after 7days</td>
                </tr>
                <tr>
                 <th>Profit:</th>
                 <td>100% after 7days</td>
                </tr>
                <tr>
                 <th>Principal Return:</th>
                 <td>Yes</td>
                </tr>
                <tr>
                 <th>Principal Withdraw:</th>
                 <td>
                Not available </td>
                </tr>
                 
                <tr>
                 <th>Credit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th>Deposit Fee:</th>
                 <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
                </tr>
                <tr>
                 <th>Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th> Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                </tbody></table>
                <br><br>
                <form id="transction_id_form" action="/update-transaction-id" name="spend" method="get"><input type="hidden" name="form_id" value="16600203847644" wfd-invisible="true">
                
                <input type="hidden" name="form_token" value="f50ae4298601945065abe6e2df2bf605" wfd-invisible="true">
                <input type="hidden" name="a" value="deposit" wfd-invisible="true">
                <input type="hidden" name="action" value="confirm" wfd-invisible="true">
                <input type="hidden" name="type" value="process_1000" wfd-invisible="true">
                <input type="hidden" name="h_id" value="1" wfd-invisible="true">
                <input type="hidden" name="compound" value="" wfd-invisible="true">
                <input type="hidden" name="amount" value="15000.00" wfd-invisible="true">
                <table cellspacing="0" cellpadding="2" border="0">
                <tbody><tr>
                 <td colspan="2"><b>Required Information:</b></td>
                </tr>
                <tr>
                 <td>Transaction ID</td>
                 <td><input id="transaction_id" type="text" name="transaction_id" value="" class="inpts"></td>
                </tr>
                </tbody></table>
                
                <br><input type="submit" value="Save" class="sbmt"> &nbsp;
                <input id="candcel_deposit" type="button" class="sbmt" value="Cancel" onclick="document.location="></form>
                
                
                </div></div>';
                return response()->json($string);
              break;
            
          }

       
    }

    // ETH
    if($request->wallet =="eth"){
      
        

        switch ($request->plan) {
            case "1":
                $string='
                <div class="dashboard-content">
                
                        <div class="container">
                            <div class="dashboard-title" style="padding-left: 40px;">
                                <svg viewBox="0 0 15.72 13.07" style="width: 21px;">
                                    <g id="invest-icon" viewBox="0 0 15.72 13.07">
                                        <rect x="0.5" y="4.66" width="14.72" height="7.91" rx="1.27" ry="1.27" fill="none" stroke-miterlimit="10"></rect>
                                        <path d="M13.28,6,4.81,2a1.24,1.24,0,0,0-1.6.67L1.89,5.74" transform="translate(0.12 -1.36)" fill="none" stroke-miterlimit="10"></path>
                                        <circle cx="7.86" cy="8.62" r="1.99" fill="none" stroke-miterlimit="10"></circle>
                                    </g>
                                </svg>
                                <h4> Deposit Confirmation </h4>
                            </div>
                        </div>
                
                      
                
                        <div class="container">
                
                
                Please send your payments to this ETH wallet address: <b> '.$user_id->ethwallet.' </b><br><br>
                
                <table class="table">
                <tbody><tr>
                 <th>Plan:</th>
                 <td>5% after 24 hours</td>
                </tr>
                <tr>
                 <th>Profit:</th>
                 <td>5.00% after 24 hours</td>
                </tr>
                <tr>
                 <th>Principal Return:</th>
                 <td>Yes</td>
                </tr>
                <tr>
                 <th>Principal Withdraw:</th>
                 <td>
                Not available </td>
                </tr>
                 
                <tr>
                 <th>Credit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th>Deposit Fee:</th>
                 <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
                </tr>
                <tr>
                 <th>Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th> Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                </tbody></table>
                <br><br>
                <form id="transction_id_form" action="/update-transaction-id" name="spend" method="get"><input type="hidden" name="form_id" value="16600203847644" wfd-invisible="true">
                
                <input type="hidden" name="form_token" value="f50ae4298601945065abe6e2df2bf605" wfd-invisible="true">
                <input type="hidden" name="a" value="deposit" wfd-invisible="true">
                <input type="hidden" name="action" value="confirm" wfd-invisible="true">
                <input type="hidden" name="type" value="process_1000" wfd-invisible="true">
                <input type="hidden" name="h_id" value="1" wfd-invisible="true">
                <input type="hidden" name="compound" value="" wfd-invisible="true">
                <input type="hidden" name="amount" value="15000.00" wfd-invisible="true">
                <table cellspacing="0" cellpadding="2" border="0">
                <tbody><tr>
                 <td colspan="2"><b>Required Information:</b></td>
                </tr>
                <tr>
                 <td>Transaction ID</td>
                 <td><input id="transaction_id" type="text" name="transaction_id" value="" class="inpts"></td>
                </tr>
                </tbody></table>
                
                <br><input type="submit" value="Save" class="sbmt"> &nbsp;
                <input id="candcel_deposit" type="button" class="sbmt" value="Cancel" onclick="document.location="></form>
                
                
                </div></div>';
              return response()->json($string);
              break;
            case "2":
                $string='
                <div class="dashboard-content">
                
                        <div class="container">
                            <div class="dashboard-title" style="padding-left: 40px;">
                                <svg viewBox="0 0 15.72 13.07" style="width: 21px;">
                                    <g id="invest-icon" viewBox="0 0 15.72 13.07">
                                        <rect x="0.5" y="4.66" width="14.72" height="7.91" rx="1.27" ry="1.27" fill="none" stroke-miterlimit="10"></rect>
                                        <path d="M13.28,6,4.81,2a1.24,1.24,0,0,0-1.6.67L1.89,5.74" transform="translate(0.12 -1.36)" fill="none" stroke-miterlimit="10"></path>
                                        <circle cx="7.86" cy="8.62" r="1.99" fill="none" stroke-miterlimit="10"></circle>
                                    </g>
                                </svg>
                                <h4> Deposit Confirmation </h4>
                            </div>
                        </div>
                
                      
                
                        <div class="container">
                
                
                Please send your payments to this ETH wallet address: <b> '.$user_id->btcwallet.' </b><br><br>
                
                <table class="table">
                <tbody><tr>
                 <th>Plan:</th>
                 <td>50% after 4days</td>
                </tr>
                <tr>
                 <th>Profit:</th>
                 <td>50.00% after 4 days</td>
                </tr>
                <tr>
                 <th>Principal Return:</th>
                 <td>Yes</td>
                </tr>
                <tr>
                 <th>Principal Withdraw:</th>
                 <td>
                Not available </td>
                </tr>
                 
                <tr>
                 <th>Credit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th>Deposit Fee:</th>
                 <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
                </tr>
                <tr>
                 <th>Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th> Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                </tbody></table>
                <br><br>
                <form id="transction_id_form" action="/update-transaction-id" name="spend" method="get"><input type="hidden" name="form_id" value="16600203847644" wfd-invisible="true">
                
                <input type="hidden" name="form_token" value="f50ae4298601945065abe6e2df2bf605" wfd-invisible="true">
                <input type="hidden" name="a" value="deposit" wfd-invisible="true">
                <input type="hidden" name="action" value="confirm" wfd-invisible="true">
                <input type="hidden" name="type" value="process_1000" wfd-invisible="true">
                <input type="hidden" name="h_id" value="1" wfd-invisible="true">
                <input type="hidden" name="compound" value="" wfd-invisible="true">
                <input type="hidden" name="amount" value="15000.00" wfd-invisible="true">
                <table cellspacing="0" cellpadding="2" border="0">
                <tbody><tr>
                 <td colspan="2"><b>Required Information:</b></td>
                </tr>
                <tr>
                 <td>Transaction ID</td>
                 <td><input id="transaction_id" type="text" name="transaction_id" value="" class="inpts"></td>
                </tr>
                </tbody></table>
                
                <br><input type="submit" value="Save" class="sbmt"> &nbsp;
                <input id="candcel_deposit" type="button" class="sbmt" value="Cancel" onclick="document.location="></form>
                
                
                </div></div>';
              return response()->json($string);

              break;
            case "3":
                $string='
                <div class="dashboard-content">
                
                        <div class="container">
                            <div class="dashboard-title" style="padding-left: 40px;">
                                <svg viewBox="0 0 15.72 13.07" style="width: 21px;">
                                    <g id="invest-icon" viewBox="0 0 15.72 13.07">
                                        <rect x="0.5" y="4.66" width="14.72" height="7.91" rx="1.27" ry="1.27" fill="none" stroke-miterlimit="10"></rect>
                                        <path d="M13.28,6,4.81,2a1.24,1.24,0,0,0-1.6.67L1.89,5.74" transform="translate(0.12 -1.36)" fill="none" stroke-miterlimit="10"></path>
                                        <circle cx="7.86" cy="8.62" r="1.99" fill="none" stroke-miterlimit="10"></circle>
                                    </g>
                                </svg>
                                <h4> Deposit Confirmation </h4>
                            </div>
                        </div>
                
                      
                
                        <div class="container">
                
                
                Please send your payments to this ETH wallet address: <b> '.$user_id->btcwallet.' </b><br><br>
                
                <table class="table">
                <tbody><tr>
                 <th>Plan:</th>
                 <td>100% after 7days</td>
                </tr>
                <tr>
                 <th>Profit:</th>
                 <td>100% after 7days</td>
                </tr>
                <tr>
                 <th>Principal Return:</th>
                 <td>Yes</td>
                </tr>
                <tr>
                 <th>Principal Withdraw:</th>
                 <td>
                Not available </td>
                </tr>
                 
                <tr>
                 <th>Credit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th>Deposit Fee:</th>
                 <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
                </tr>
                <tr>
                 <th>Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th> Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                </tbody></table>
                <br><br>
                <form id="transction_id_form" action="/update-transaction-id" name="spend" method="get"><input type="hidden" name="form_id" value="16600203847644" wfd-invisible="true">
                
                <input type="hidden" name="form_token" value="f50ae4298601945065abe6e2df2bf605" wfd-invisible="true">
                <input type="hidden" name="a" value="deposit" wfd-invisible="true">
                <input type="hidden" name="action" value="confirm" wfd-invisible="true">
                <input type="hidden" name="type" value="process_1000" wfd-invisible="true">
                <input type="hidden" name="h_id" value="1" wfd-invisible="true">
                <input type="hidden" name="compound" value="" wfd-invisible="true">
                <input type="hidden" name="amount" value="15000.00" wfd-invisible="true">
                <table cellspacing="0" cellpadding="2" border="0">
                <tbody><tr>
                 <td colspan="2"><b>Required Information:</b></td>
                </tr>
                <tr>
                 <td>Transaction ID</td>
                 <td><input id="transaction_id" type="text" name="transaction_id" value="" class="inpts"></td>
                </tr>
                </tbody></table>
                
                <br><input type="submit" value="Save" class="sbmt"> &nbsp;
                <input id="candcel_deposit" type="button" class="sbmt" value="Cancel" onclick="document.location="></form>
                
                
                </div></div>';
                return response()->json($string);
              break;
            
          }

       
    }

      //xrp
        
      if($request->wallet =="xrp"){
      
        

        switch ($request->plan) {
            case "1":
                $string='
                <div class="dashboard-content">
                
                        <div class="container">
                            <div class="dashboard-title" style="padding-left: 40px;">
                                <svg viewBox="0 0 15.72 13.07" style="width: 21px;">
                                    <g id="invest-icon" viewBox="0 0 15.72 13.07">
                                        <rect x="0.5" y="4.66" width="14.72" height="7.91" rx="1.27" ry="1.27" fill="none" stroke-miterlimit="10"></rect>
                                        <path d="M13.28,6,4.81,2a1.24,1.24,0,0,0-1.6.67L1.89,5.74" transform="translate(0.12 -1.36)" fill="none" stroke-miterlimit="10"></path>
                                        <circle cx="7.86" cy="8.62" r="1.99" fill="none" stroke-miterlimit="10"></circle>
                                    </g>
                                </svg>
                                <h4> Deposit Confirmation </h4>
                            </div>
                        </div>
                
                      
                
                        <div class="container">
                
                
                Please send your payments to this XRP wallet address: <b> '.$user_id->xrpwallet.' </b><br><br>
                
                <table class="table">
                <tbody><tr>
                 <th>Plan:</th>
                 <td>5% after 24 hours</td>
                </tr>
                <tr>
                 <th>Profit:</th>
                 <td>5.00% after 24 hours</td>
                </tr>
                <tr>
                 <th>Principal Return:</th>
                 <td>Yes</td>
                </tr>
                <tr>
                 <th>Principal Withdraw:</th>
                 <td>
                Not available </td>
                </tr>
                 
                <tr>
                 <th>Credit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th>Deposit Fee:</th>
                 <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
                </tr>
                <tr>
                 <th>Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th> Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                </tbody></table>
                <br><br>
                <form id="transction_id_form" action="/update-transaction-id" name="spend" method="get"><input type="hidden" name="form_id" value="16600203847644" wfd-invisible="true">
                
                <input type="hidden" name="form_token" value="f50ae4298601945065abe6e2df2bf605" wfd-invisible="true">
                <input type="hidden" name="a" value="deposit" wfd-invisible="true">
                <input type="hidden" name="action" value="confirm" wfd-invisible="true">
                <input type="hidden" name="type" value="process_1000" wfd-invisible="true">
                <input type="hidden" name="h_id" value="1" wfd-invisible="true">
                <input type="hidden" name="compound" value="" wfd-invisible="true">
                <input type="hidden" name="amount" value="15000.00" wfd-invisible="true">
                <table cellspacing="0" cellpadding="2" border="0">
                <tbody><tr>
                 <td colspan="2"><b>Required Information:</b></td>
                </tr>
                <tr>
                 <td>Transaction ID</td>
                 <td><input id="transaction_id" type="text" name="transaction_id" value="" class="inpts"></td>
                </tr>
                </tbody></table>
                
                <br><input type="submit" value="Save" class="sbmt"> &nbsp;
                <input id="candcel_deposit" type="button" class="sbmt" value="Cancel" onclick="document.location="></form>
                
                
                </div></div>';
              return response()->json($string);
              break;
            case "2":
                $string='
                <div class="dashboard-content">
                
                        <div class="container">
                            <div class="dashboard-title" style="padding-left: 40px;">
                                <svg viewBox="0 0 15.72 13.07" style="width: 21px;">
                                    <g id="invest-icon" viewBox="0 0 15.72 13.07">
                                        <rect x="0.5" y="4.66" width="14.72" height="7.91" rx="1.27" ry="1.27" fill="none" stroke-miterlimit="10"></rect>
                                        <path d="M13.28,6,4.81,2a1.24,1.24,0,0,0-1.6.67L1.89,5.74" transform="translate(0.12 -1.36)" fill="none" stroke-miterlimit="10"></path>
                                        <circle cx="7.86" cy="8.62" r="1.99" fill="none" stroke-miterlimit="10"></circle>
                                    </g>
                                </svg>
                                <h4> Deposit Confirmation </h4>
                            </div>
                        </div>
                
                      
                
                        <div class="container">
                
                
                Please send your payments to this XRP wallet address: <b> '.$user_id->btcwallet.' </b><br><br>
                
                <table class="table">
                <tbody><tr>
                 <th>Plan:</th>
                 <td>50% after 4days</td>
                </tr>
                <tr>
                 <th>Profit:</th>
                 <td>50.00% after 4 days</td>
                </tr>
                <tr>
                 <th>Principal Return:</th>
                 <td>Yes</td>
                </tr>
                <tr>
                 <th>Principal Withdraw:</th>
                 <td>
                Not available </td>
                </tr>
                 
                <tr>
                 <th>Credit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th>Deposit Fee:</th>
                 <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
                </tr>
                <tr>
                 <th>Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th> Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                </tbody></table>
                <br><br>
                <form id="transction_id_form" action="/update-transaction-id" name="spend" method="get"><input type="hidden" name="form_id" value="16600203847644" wfd-invisible="true">
                
                <input type="hidden" name="form_token" value="f50ae4298601945065abe6e2df2bf605" wfd-invisible="true">
                <input type="hidden" name="a" value="deposit" wfd-invisible="true">
                <input type="hidden" name="action" value="confirm" wfd-invisible="true">
                <input type="hidden" name="type" value="process_1000" wfd-invisible="true">
                <input type="hidden" name="h_id" value="1" wfd-invisible="true">
                <input type="hidden" name="compound" value="" wfd-invisible="true">
                <input type="hidden" name="amount" value="15000.00" wfd-invisible="true">
                <table cellspacing="0" cellpadding="2" border="0">
                <tbody><tr>
                 <td colspan="2"><b>Required Information:</b></td>
                </tr>
                <tr>
                 <td>Transaction ID</td>
                 <td><input id="transaction_id" type="text" name="transaction_id" value="" class="inpts"></td>
                </tr>
                </tbody></table>
                
                <br><input type="submit" value="Save" class="sbmt"> &nbsp;
                <input id="candcel_deposit" type="button" class="sbmt" value="Cancel" onclick="document.location="></form>
                
                
                </div></div>';
              return response()->json($string);

              break;
            case "3":
                $string='
                <div class="dashboard-content">
                
                        <div class="container">
                            <div class="dashboard-title" style="padding-left: 40px;">
                                <svg viewBox="0 0 15.72 13.07" style="width: 21px;">
                                    <g id="invest-icon" viewBox="0 0 15.72 13.07">
                                        <rect x="0.5" y="4.66" width="14.72" height="7.91" rx="1.27" ry="1.27" fill="none" stroke-miterlimit="10"></rect>
                                        <path d="M13.28,6,4.81,2a1.24,1.24,0,0,0-1.6.67L1.89,5.74" transform="translate(0.12 -1.36)" fill="none" stroke-miterlimit="10"></path>
                                        <circle cx="7.86" cy="8.62" r="1.99" fill="none" stroke-miterlimit="10"></circle>
                                    </g>
                                </svg>
                                <h4> Deposit Confirmation </h4>
                            </div>
                        </div>
                
                      
                
                        <div class="container">
                
                
                Please send your payments to this XRP wallet address: <b> '.$user_id->btcwallet.' </b><br><br>
                
                <table class="table">
                <tbody><tr>
                 <th>Plan:</th>
                 <td>100% after 7days</td>
                </tr>
                <tr>
                 <th>Profit:</th>
                 <td>100% after 7days</td>
                </tr>
                <tr>
                 <th>Principal Return:</th>
                 <td>Yes</td>
                </tr>
                <tr>
                 <th>Principal Withdraw:</th>
                 <td>
                Not available </td>
                </tr>
                 
                <tr>
                 <th>Credit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th>Deposit Fee:</th>
                 <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
                </tr>
                <tr>
                 <th>Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th> Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                </tbody></table>
                <br><br>
                <form id="transction_id_form" action="/update-transaction-id" name="spend" method="get"><input type="hidden" name="form_id" value="16600203847644" wfd-invisible="true">
                
                <input type="hidden" name="form_token" value="f50ae4298601945065abe6e2df2bf605" wfd-invisible="true">
                <input type="hidden" name="a" value="deposit" wfd-invisible="true">
                <input type="hidden" name="action" value="confirm" wfd-invisible="true">
                <input type="hidden" name="type" value="process_1000" wfd-invisible="true">
                <input type="hidden" name="h_id" value="1" wfd-invisible="true">
                <input type="hidden" name="compound" value="" wfd-invisible="true">
                <input type="hidden" name="amount" value="15000.00" wfd-invisible="true">
                <table cellspacing="0" cellpadding="2" border="0">
                <tbody><tr>
                 <td colspan="2"><b>Required Information:</b></td>
                </tr>
                <tr>
                 <td>Transaction ID</td>
                 <td><input id="transaction_id" type="text" name="transaction_id" value="" class="inpts"></td>
                </tr>
                </tbody></table>
                
                <br><input type="submit" value="Save" class="sbmt"> &nbsp;
                <input id="candcel_deposit" type="button" class="sbmt" value="Cancel" onclick="document.location="></form>
                
                
                </div></div>';
                return response()->json($string);
              break;
            
          }

       
    }
    //usdt USDT

    if($request->wallet =="usdt"){
      
        

        switch ($request->plan) {
            case "1":
                $string='
                <div class="dashboard-content">
                
                        <div class="container">
                            <div class="dashboard-title" style="padding-left: 40px;">
                                <svg viewBox="0 0 15.72 13.07" style="width: 21px;">
                                    <g id="invest-icon" viewBox="0 0 15.72 13.07">
                                        <rect x="0.5" y="4.66" width="14.72" height="7.91" rx="1.27" ry="1.27" fill="none" stroke-miterlimit="10"></rect>
                                        <path d="M13.28,6,4.81,2a1.24,1.24,0,0,0-1.6.67L1.89,5.74" transform="translate(0.12 -1.36)" fill="none" stroke-miterlimit="10"></path>
                                        <circle cx="7.86" cy="8.62" r="1.99" fill="none" stroke-miterlimit="10"></circle>
                                    </g>
                                </svg>
                                <h4> Deposit Confirmation </h4>
                            </div>
                        </div>
                
                      
                
                        <div class="container">
                
                
                Please send your payments to this USDT wallet address: <b> '.$user_id->usdtwallet.' </b><br><br>
                
                <table class="table">
                <tbody><tr>
                 <th>Plan:</th>
                 <td>5% after 24 hours</td>
                </tr>
                <tr>
                 <th>Profit:</th>
                 <td>5.00% after 24 hours</td>
                </tr>
                <tr>
                 <th>Principal Return:</th>
                 <td>Yes</td>
                </tr>
                <tr>
                 <th>Principal Withdraw:</th>
                 <td>
                Not available </td>
                </tr>
                 
                <tr>
                 <th>Credit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th>Deposit Fee:</th>
                 <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
                </tr>
                <tr>
                 <th>Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th> Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                </tbody></table>
                <br><br>
                <form id="transction_id_form" action="/update-transaction-id" name="spend" method="get"><input type="hidden" name="form_id" value="16600203847644" wfd-invisible="true">
                
                <input type="hidden" name="form_token" value="f50ae4298601945065abe6e2df2bf605" wfd-invisible="true">
                <input type="hidden" name="a" value="deposit" wfd-invisible="true">
                <input type="hidden" name="action" value="confirm" wfd-invisible="true">
                <input type="hidden" name="type" value="process_1000" wfd-invisible="true">
                <input type="hidden" name="h_id" value="1" wfd-invisible="true">
                <input type="hidden" name="compound" value="" wfd-invisible="true">
                <input type="hidden" name="amount" value="15000.00" wfd-invisible="true">
                <table cellspacing="0" cellpadding="2" border="0">
                <tbody><tr>
                 <td colspan="2"><b>Required Information:</b></td>
                </tr>
                <tr>
                 <td>Transaction ID</td>
                 <td><input id="transaction_id" type="text" name="transaction_id" value="" class="inpts"></td>
                </tr>
                </tbody></table>
                
                <br><input type="submit" value="Save" class="sbmt"> &nbsp;
                <input id="candcel_deposit" type="button" class="sbmt" value="Cancel" onclick="document.location="></form>
                
                
                </div></div>';
              return response()->json($string);
              break;
            case "2":
                $string='
                <div class="dashboard-content">
                
                        <div class="container">
                            <div class="dashboard-title" style="padding-left: 40px;">
                                <svg viewBox="0 0 15.72 13.07" style="width: 21px;">
                                    <g id="invest-icon" viewBox="0 0 15.72 13.07">
                                        <rect x="0.5" y="4.66" width="14.72" height="7.91" rx="1.27" ry="1.27" fill="none" stroke-miterlimit="10"></rect>
                                        <path d="M13.28,6,4.81,2a1.24,1.24,0,0,0-1.6.67L1.89,5.74" transform="translate(0.12 -1.36)" fill="none" stroke-miterlimit="10"></path>
                                        <circle cx="7.86" cy="8.62" r="1.99" fill="none" stroke-miterlimit="10"></circle>
                                    </g>
                                </svg>
                                <h4> Deposit Confirmation </h4>
                            </div>
                        </div>
                
                      
                
                        <div class="container">
                
                
                Please send your payments to this USDT wallet address: <b> '.$user_id->btcwallet.' </b><br><br>
                
                <table class="table">
                <tbody><tr>
                 <th>Plan:</th>
                 <td>50% after 4days</td>
                </tr>
                <tr>
                 <th>Profit:</th>
                 <td>50.00% after 4 days</td>
                </tr>
                <tr>
                 <th>Principal Return:</th>
                 <td>Yes</td>
                </tr>
                <tr>
                 <th>Principal Withdraw:</th>
                 <td>
                Not available </td>
                </tr>
                 
                <tr>
                 <th>Credit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th>Deposit Fee:</th>
                 <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
                </tr>
                <tr>
                 <th>Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th> Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                </tbody></table>
                <br><br>
                <form id="transction_id_form" action="/update-transaction-id" name="spend" method="get"><input type="hidden" name="form_id" value="16600203847644" wfd-invisible="true">
                
                <input type="hidden" name="form_token" value="f50ae4298601945065abe6e2df2bf605" wfd-invisible="true">
                <input type="hidden" name="a" value="deposit" wfd-invisible="true">
                <input type="hidden" name="action" value="confirm" wfd-invisible="true">
                <input type="hidden" name="type" value="process_1000" wfd-invisible="true">
                <input type="hidden" name="h_id" value="1" wfd-invisible="true">
                <input type="hidden" name="compound" value="" wfd-invisible="true">
                <input type="hidden" name="amount" value="15000.00" wfd-invisible="true">
                <table cellspacing="0" cellpadding="2" border="0">
                <tbody><tr>
                 <td colspan="2"><b>Required Information:</b></td>
                </tr>
                <tr>
                 <td>Transaction ID</td>
                 <td><input id="transaction_id" type="text" name="transaction_id" value="" class="inpts"></td>
                </tr>
                </tbody></table>
                
                <br><input type="submit" value="Save" class="sbmt"> &nbsp;
                <input id="candcel_deposit" type="button" class="sbmt" value="Cancel" onclick="document.location="></form>
                
                
                </div></div>';
              return response()->json($string);

              break;
            case "3":
                $string='
                <div class="dashboard-content">
                
                        <div class="container">
                            <div class="dashboard-title" style="padding-left: 40px;">
                                <svg viewBox="0 0 15.72 13.07" style="width: 21px;">
                                    <g id="invest-icon" viewBox="0 0 15.72 13.07">
                                        <rect x="0.5" y="4.66" width="14.72" height="7.91" rx="1.27" ry="1.27" fill="none" stroke-miterlimit="10"></rect>
                                        <path d="M13.28,6,4.81,2a1.24,1.24,0,0,0-1.6.67L1.89,5.74" transform="translate(0.12 -1.36)" fill="none" stroke-miterlimit="10"></path>
                                        <circle cx="7.86" cy="8.62" r="1.99" fill="none" stroke-miterlimit="10"></circle>
                                    </g>
                                </svg>
                                <h4> Deposit Confirmation </h4>
                            </div>
                        </div>
                
                      
                
                        <div class="container">
                
                
                Please send your payments to this USDT wallet address: <b> '.$user_id->btcwallet.' </b><br><br>
                
                <table class="table">
                <tbody><tr>
                 <th>Plan:</th>
                 <td>100% after 7days</td>
                </tr>
                <tr>
                 <th>Profit:</th>
                 <td>100% after 7days</td>
                </tr>
                <tr>
                 <th>Principal Return:</th>
                 <td>Yes</td>
                </tr>
                <tr>
                 <th>Principal Withdraw:</th>
                 <td>
                Not available </td>
                </tr>
                 
                <tr>
                 <th>Credit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th>Deposit Fee:</th>
                 <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
                </tr>
                <tr>
                 <th>Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th> Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                </tbody></table>
                <br><br>
                <form id="transction_id_form" action="/update-transaction-id" name="spend" method="get"><input type="hidden" name="form_id" value="16600203847644" wfd-invisible="true">
                
                <input type="hidden" name="form_token" value="f50ae4298601945065abe6e2df2bf605" wfd-invisible="true">
                <input type="hidden" name="a" value="deposit" wfd-invisible="true">
                <input type="hidden" name="action" value="confirm" wfd-invisible="true">
                <input type="hidden" name="type" value="process_1000" wfd-invisible="true">
                <input type="hidden" name="h_id" value="1" wfd-invisible="true">
                <input type="hidden" name="compound" value="" wfd-invisible="true">
                <input type="hidden" name="amount" value="15000.00" wfd-invisible="true">
                <table cellspacing="0" cellpadding="2" border="0">
                <tbody><tr>
                 <td colspan="2"><b>Required Information:</b></td>
                </tr>
                <tr>
                 <td>Transaction ID</td>
                 <td><input id="transaction_id" type="text" name="transaction_id" value="" class="inpts"></td>
                </tr>
                </tbody></table>
                
                <br><input type="submit" value="Save" class="sbmt"> &nbsp;
                <input id="candcel_deposit" type="button" class="sbmt" value="Cancel" onclick="document.location="></form>
                
                
                </div></div>';
                return response()->json($string);
              break;
            
          }

       
    }
       
    //sol SOL
    if($request->wallet =="sol"){
      
        

        switch ($request->plan) {
            case "1":
                $string='
                <div class="dashboard-content">
                
                        <div class="container">
                            <div class="dashboard-title" style="padding-left: 40px;">
                                <svg viewBox="0 0 15.72 13.07" style="width: 21px;">
                                    <g id="invest-icon" viewBox="0 0 15.72 13.07">
                                        <rect x="0.5" y="4.66" width="14.72" height="7.91" rx="1.27" ry="1.27" fill="none" stroke-miterlimit="10"></rect>
                                        <path d="M13.28,6,4.81,2a1.24,1.24,0,0,0-1.6.67L1.89,5.74" transform="translate(0.12 -1.36)" fill="none" stroke-miterlimit="10"></path>
                                        <circle cx="7.86" cy="8.62" r="1.99" fill="none" stroke-miterlimit="10"></circle>
                                    </g>
                                </svg>
                                <h4> Deposit Confirmation </h4>
                            </div>
                        </div>
                
                      
                
                        <div class="container">
                
                
                Please send your payments to this SOL wallet address: <b> '.$user_id->solwallet.' </b><br><br>
                
                <table class="table">
                <tbody><tr>
                 <th>Plan:</th>
                 <td>5% after 24 hours</td>
                </tr>
                <tr>
                 <th>Profit:</th>
                 <td>5.00% after 24 hours</td>
                </tr>
                <tr>
                 <th>Principal Return:</th>
                 <td>Yes</td>
                </tr>
                <tr>
                 <th>Principal Withdraw:</th>
                 <td>
                Not available </td>
                </tr>
                 
                <tr>
                 <th>Credit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th>Deposit Fee:</th>
                 <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
                </tr>
                <tr>
                 <th>Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th> Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                </tbody></table>
                <br><br>
                <form id="transction_id_form" action="/update-transaction-id" name="spend" method="get"><input type="hidden" name="form_id" value="16600203847644" wfd-invisible="true">
                
                <input type="hidden" name="form_token" value="f50ae4298601945065abe6e2df2bf605" wfd-invisible="true">
                <input type="hidden" name="a" value="deposit" wfd-invisible="true">
                <input type="hidden" name="action" value="confirm" wfd-invisible="true">
                <input type="hidden" name="type" value="process_1000" wfd-invisible="true">
                <input type="hidden" name="h_id" value="1" wfd-invisible="true">
                <input type="hidden" name="compound" value="" wfd-invisible="true">
                <input type="hidden" name="amount" value="15000.00" wfd-invisible="true">
                <table cellspacing="0" cellpadding="2" border="0">
                <tbody><tr>
                 <td colspan="2"><b>Required Information:</b></td>
                </tr>
                <tr>
                 <td>Transaction ID</td>
                 <td><input id="transaction_id" type="text" name="transaction_id" value="" class="inpts"></td>
                </tr>
                </tbody></table>
                
                <br><input type="submit" value="Save" class="sbmt"> &nbsp;
                <input id="candcel_deposit" type="button" class="sbmt" value="Cancel" onclick="document.location="></form>
                
                
                </div></div>';
              return response()->json($string);
              break;
            case "2":
                $string='
                <div class="dashboard-content">
                
                        <div class="container">
                            <div class="dashboard-title" style="padding-left: 40px;">
                                <svg viewBox="0 0 15.72 13.07" style="width: 21px;">
                                    <g id="invest-icon" viewBox="0 0 15.72 13.07">
                                        <rect x="0.5" y="4.66" width="14.72" height="7.91" rx="1.27" ry="1.27" fill="none" stroke-miterlimit="10"></rect>
                                        <path d="M13.28,6,4.81,2a1.24,1.24,0,0,0-1.6.67L1.89,5.74" transform="translate(0.12 -1.36)" fill="none" stroke-miterlimit="10"></path>
                                        <circle cx="7.86" cy="8.62" r="1.99" fill="none" stroke-miterlimit="10"></circle>
                                    </g>
                                </svg>
                                <h4> Deposit Confirmation </h4>
                            </div>
                        </div>
                
                      
                
                        <div class="container">
                
                
                Please send your payments to this SOL wallet address: <b> '.$user_id->btcwallet.' </b><br><br>
                
                <table class="table">
                <tbody><tr>
                 <th>Plan:</th>
                 <td>50% after 4days</td>
                </tr>
                <tr>
                 <th>Profit:</th>
                 <td>50.00% after 4 days</td>
                </tr>
                <tr>
                 <th>Principal Return:</th>
                 <td>Yes</td>
                </tr>
                <tr>
                 <th>Principal Withdraw:</th>
                 <td>
                Not available </td>
                </tr>
                 
                <tr>
                 <th>Credit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th>Deposit Fee:</th>
                 <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
                </tr>
                <tr>
                 <th>Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th> Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                </tbody></table>
                <br><br>
                <form id="transction_id_form" action="/update-transaction-id" name="spend" method="get"><input type="hidden" name="form_id" value="16600203847644" wfd-invisible="true">
                
                <input type="hidden" name="form_token" value="f50ae4298601945065abe6e2df2bf605" wfd-invisible="true">
                <input type="hidden" name="a" value="deposit" wfd-invisible="true">
                <input type="hidden" name="action" value="confirm" wfd-invisible="true">
                <input type="hidden" name="type" value="process_1000" wfd-invisible="true">
                <input type="hidden" name="h_id" value="1" wfd-invisible="true">
                <input type="hidden" name="compound" value="" wfd-invisible="true">
                <input type="hidden" name="amount" value="15000.00" wfd-invisible="true">
                <table cellspacing="0" cellpadding="2" border="0">
                <tbody><tr>
                 <td colspan="2"><b>Required Information:</b></td>
                </tr>
                <tr>
                 <td>Transaction ID</td>
                 <td><input id="transaction_id" type="text" name="transaction_id" value="" class="inpts"></td>
                </tr>
                </tbody></table>
                
                <br><input type="submit" value="Save" class="sbmt"> &nbsp;
                <input id="candcel_deposit" type="button" class="sbmt" value="Cancel" onclick="document.location="></form>
                
                
                </div></div>';
              return response()->json($string);

              break;
            case "3":
                $string='
                <div class="dashboard-content">
                
                        <div class="container">
                            <div class="dashboard-title" style="padding-left: 40px;">
                                <svg viewBox="0 0 15.72 13.07" style="width: 21px;">
                                    <g id="invest-icon" viewBox="0 0 15.72 13.07">
                                        <rect x="0.5" y="4.66" width="14.72" height="7.91" rx="1.27" ry="1.27" fill="none" stroke-miterlimit="10"></rect>
                                        <path d="M13.28,6,4.81,2a1.24,1.24,0,0,0-1.6.67L1.89,5.74" transform="translate(0.12 -1.36)" fill="none" stroke-miterlimit="10"></path>
                                        <circle cx="7.86" cy="8.62" r="1.99" fill="none" stroke-miterlimit="10"></circle>
                                    </g>
                                </svg>
                                <h4> Deposit Confirmation </h4>
                            </div>
                        </div>
                
                      
                
                        <div class="container">
                
                
                Please send your payments to this SOL wallet address: <b> '.$user_id->btcwallet.' </b><br><br>
                
                <table class="table">
                <tbody><tr>
                 <th>Plan:</th>
                 <td>100% after 7days</td>
                </tr>
                <tr>
                 <th>Profit:</th>
                 <td>100% after 7days</td>
                </tr>
                <tr>
                 <th>Principal Return:</th>
                 <td>Yes</td>
                </tr>
                <tr>
                 <th>Principal Withdraw:</th>
                 <td>
                Not available </td>
                </tr>
                 
                <tr>
                 <th>Credit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th>Deposit Fee:</th>
                 <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
                </tr>
                <tr>
                 <th>Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th> Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                </tbody></table>
                <br><br>
                <form id="transction_id_form" action="/update-transaction-id" name="spend" method="get"><input type="hidden" name="form_id" value="16600203847644" wfd-invisible="true">
                
                <input type="hidden" name="form_token" value="f50ae4298601945065abe6e2df2bf605" wfd-invisible="true">
                <input type="hidden" name="a" value="deposit" wfd-invisible="true">
                <input type="hidden" name="action" value="confirm" wfd-invisible="true">
                <input type="hidden" name="type" value="process_1000" wfd-invisible="true">
                <input type="hidden" name="h_id" value="1" wfd-invisible="true">
                <input type="hidden" name="compound" value="" wfd-invisible="true">
                <input type="hidden" name="amount" value="15000.00" wfd-invisible="true">
                <table cellspacing="0" cellpadding="2" border="0">
                <tbody><tr>
                 <td colspan="2"><b>Required Information:</b></td>
                </tr>
                <tr>
                 <td>Transaction ID</td>
                 <td><input id="transaction_id" type="text" name="transaction_id" value="" class="inpts"></td>
                </tr>
                </tbody></table>
                
                <br><input type="submit" value="Save" class="sbmt"> &nbsp;
                <input id="candcel_deposit" type="button" class="sbmt" value="Cancel" onclick="document.location="></form>
                
                
                </div></div>';
                return response()->json($string);
              break;
            
          }

       
    }
    //dot DOT

    if($request->wallet =="dot"){
      
        

        switch ($request->plan) {
            case "1":
                $string='
                <div class="dashboard-content">
                
                        <div class="container">
                            <div class="dashboard-title" style="padding-left: 40px;">
                                <svg viewBox="0 0 15.72 13.07" style="width: 21px;">
                                    <g id="invest-icon" viewBox="0 0 15.72 13.07">
                                        <rect x="0.5" y="4.66" width="14.72" height="7.91" rx="1.27" ry="1.27" fill="none" stroke-miterlimit="10"></rect>
                                        <path d="M13.28,6,4.81,2a1.24,1.24,0,0,0-1.6.67L1.89,5.74" transform="translate(0.12 -1.36)" fill="none" stroke-miterlimit="10"></path>
                                        <circle cx="7.86" cy="8.62" r="1.99" fill="none" stroke-miterlimit="10"></circle>
                                    </g>
                                </svg>
                                <h4> Deposit Confirmation </h4>
                            </div>
                        </div>
                
                      
                
                        <div class="container">
                
                
                Please send your payments to this DOT wallet address: <b> '.$user_id->dotwallet.' </b><br><br>
                
                <table class="table">
                <tbody><tr>
                 <th>Plan:</th>
                 <td>5% after 24 hours</td>
                </tr>
                <tr>
                 <th>Profit:</th>
                 <td>5.00% after 24 hours</td>
                </tr>
                <tr>
                 <th>Principal Return:</th>
                 <td>Yes</td>
                </tr>
                <tr>
                 <th>Principal Withdraw:</th>
                 <td>
                Not available </td>
                </tr>
                 
                <tr>
                 <th>Credit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th>Deposit Fee:</th>
                 <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
                </tr>
                <tr>
                 <th>Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th> Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                </tbody></table>
                <br><br>
                <form id="transction_id_form" action="/update-transaction-id" name="spend" method="get"><input type="hidden" name="form_id" value="16600203847644" wfd-invisible="true">
                
                <input type="hidden" name="form_token" value="f50ae4298601945065abe6e2df2bf605" wfd-invisible="true">
                <input type="hidden" name="a" value="deposit" wfd-invisible="true">
                <input type="hidden" name="action" value="confirm" wfd-invisible="true">
                <input type="hidden" name="type" value="process_1000" wfd-invisible="true">
                <input type="hidden" name="h_id" value="1" wfd-invisible="true">
                <input type="hidden" name="compound" value="" wfd-invisible="true">
                <input type="hidden" name="amount" value="15000.00" wfd-invisible="true">
                <table cellspacing="0" cellpadding="2" border="0">
                <tbody><tr>
                 <td colspan="2"><b>Required Information:</b></td>
                </tr>
                <tr>
                 <td>Transaction ID</td>
                 <td><input id="transaction_id" type="text" name="transaction_id" value="" class="inpts"></td>
                </tr>
                </tbody></table>
                
                <br><input type="submit" value="Save" class="sbmt"> &nbsp;
                <input id="candcel_deposit" type="button" class="sbmt" value="Cancel" onclick="document.location="></form>
                
                
                </div></div>';
              return response()->json($string);
              break;
            case "2":
                $string='
                <div class="dashboard-content">
                
                        <div class="container">
                            <div class="dashboard-title" style="padding-left: 40px;">
                                <svg viewBox="0 0 15.72 13.07" style="width: 21px;">
                                    <g id="invest-icon" viewBox="0 0 15.72 13.07">
                                        <rect x="0.5" y="4.66" width="14.72" height="7.91" rx="1.27" ry="1.27" fill="none" stroke-miterlimit="10"></rect>
                                        <path d="M13.28,6,4.81,2a1.24,1.24,0,0,0-1.6.67L1.89,5.74" transform="translate(0.12 -1.36)" fill="none" stroke-miterlimit="10"></path>
                                        <circle cx="7.86" cy="8.62" r="1.99" fill="none" stroke-miterlimit="10"></circle>
                                    </g>
                                </svg>
                                <h4> Deposit Confirmation </h4>
                            </div>
                        </div>
                
                      
                
                        <div class="container">
                
                
                Please send your payments to this DOT wallet address: <b> '.$user_id->btcwallet.' </b><br><br>
                
                <table class="table">
                <tbody><tr>
                 <th>Plan:</th>
                 <td>50% after 4days</td>
                </tr>
                <tr>
                 <th>Profit:</th>
                 <td>50.00% after 4 days</td>
                </tr>
                <tr>
                 <th>Principal Return:</th>
                 <td>Yes</td>
                </tr>
                <tr>
                 <th>Principal Withdraw:</th>
                 <td>
                Not available </td>
                </tr>
                 
                <tr>
                 <th>Credit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th>Deposit Fee:</th>
                 <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
                </tr>
                <tr>
                 <th>Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th> Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                </tbody></table>
                <br><br>
                <form id="transction_id_form" action="/update-transaction-id" name="spend" method="get"><input type="hidden" name="form_id" value="16600203847644" wfd-invisible="true">
                
                <input type="hidden" name="form_token" value="f50ae4298601945065abe6e2df2bf605" wfd-invisible="true">
                <input type="hidden" name="a" value="deposit" wfd-invisible="true">
                <input type="hidden" name="action" value="confirm" wfd-invisible="true">
                <input type="hidden" name="type" value="process_1000" wfd-invisible="true">
                <input type="hidden" name="h_id" value="1" wfd-invisible="true">
                <input type="hidden" name="compound" value="" wfd-invisible="true">
                <input type="hidden" name="amount" value="15000.00" wfd-invisible="true">
                <table cellspacing="0" cellpadding="2" border="0">
                <tbody><tr>
                 <td colspan="2"><b>Required Information:</b></td>
                </tr>
                <tr>
                 <td>Transaction ID</td>
                 <td><input id="transaction_id" type="text" name="transaction_id" value="" class="inpts"></td>
                </tr>
                </tbody></table>
                
                <br><input type="submit" value="Save" class="sbmt"> &nbsp;
                <input id="candcel_deposit" type="button" class="sbmt" value="Cancel" onclick="document.location="></form>
                
                
                </div></div>';
              return response()->json($string);

              break;
            case "3":
                $string='
                <div class="dashboard-content">
                
                        <div class="container">
                            <div class="dashboard-title" style="padding-left: 40px;">
                                <svg viewBox="0 0 15.72 13.07" style="width: 21px;">
                                    <g id="invest-icon" viewBox="0 0 15.72 13.07">
                                        <rect x="0.5" y="4.66" width="14.72" height="7.91" rx="1.27" ry="1.27" fill="none" stroke-miterlimit="10"></rect>
                                        <path d="M13.28,6,4.81,2a1.24,1.24,0,0,0-1.6.67L1.89,5.74" transform="translate(0.12 -1.36)" fill="none" stroke-miterlimit="10"></path>
                                        <circle cx="7.86" cy="8.62" r="1.99" fill="none" stroke-miterlimit="10"></circle>
                                    </g>
                                </svg>
                                <h4> Deposit Confirmation </h4>
                            </div>
                        </div>
                
                      
                
                        <div class="container">
                
                
                Please send your payments to this DOT wallet address: <b> '.$user_id->btcwallet.' </b><br><br>
                
                <table class="table">
                <tbody><tr>
                 <th>Plan:</th>
                 <td>100% after 7days</td>
                </tr>
                <tr>
                 <th>Profit:</th>
                 <td>100% after 7days</td>
                </tr>
                <tr>
                 <th>Principal Return:</th>
                 <td>Yes</td>
                </tr>
                <tr>
                 <th>Principal Withdraw:</th>
                 <td>
                Not available </td>
                </tr>
                 
                <tr>
                 <th>Credit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th>Deposit Fee:</th>
                 <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
                </tr>
                <tr>
                 <th>Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                <tr>
                 <th> Debit Amount:</th>
                 <td>$'.$request->amount_depost.'.00</td>
                </tr>
                </tbody></table>
                <br><br>
                <form id="transction_id_form" action="/update-transaction-id" name="spend" method="get"><input type="hidden" name="form_id" value="16600203847644" wfd-invisible="true">
                
                <input type="hidden" name="form_token" value="f50ae4298601945065abe6e2df2bf605" wfd-invisible="true">
                <input type="hidden" name="a" value="deposit" wfd-invisible="true">
                <input type="hidden" name="action" value="confirm" wfd-invisible="true">
                <input type="hidden" name="type" value="process_1000" wfd-invisible="true">
                <input type="hidden" name="h_id" value="1" wfd-invisible="true">
                <input type="hidden" name="compound" value="" wfd-invisible="true">
                <input type="hidden" name="amount" value="15000.00" wfd-invisible="true">
                <table cellspacing="0" cellpadding="2" border="0">
                <tbody><tr>
                 <td colspan="2"><b>Required Information:</b></td>
                </tr>
                <tr>
                 <td>Transaction ID</td>
                 <td><input id="transaction_id" type="text" name="transaction_id" value="" class="inpts"></td>
                </tr>
                </tbody></table>
                
                <br><input type="submit" value="Save" class="sbmt"> &nbsp;
                <input id="candcel_deposit" type="button" class="sbmt" value="Cancel" onclick="document.location="></form>
                
                
                </div></div>';
                return response()->json($string);
              break;
            
          }

       
    }


    }
}
