<?php

namespace App\Http\Controllers\Client;

use App\Client;
use App\Transaction;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use SanderVanHooft\Invoicable\Invoice;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.Main');
//        if (Gate::allows('admin-only', auth()->user())) {
//            return view('client.Main');
//        }
//        return 'askdkajsdkjasd';
    }

    public function showAbout()
    {
        return view('client.about');
    }

    public function showLocation()
    {
        return view('client.location');
    }
    public function account()
    {
        $clients = Client::all();
        return view('client.clientaccount', compact('clients'));
    }
    public function clientRequest()
    {
        return view('client.clientRequest');
    }
    public function clientStatus()
    {
        return view('client.clientStatus');
    }
    public function showImport()
    {
        return view('client.import');
    }
    public function showExport()
    {
        return view('client.export');
    }
    public function showDomestic()
    {
        return view('client.domestic');
    }
    public function calculator()
    {
        return view('client.calculator');
    }

    /**
     * @param Transaction $transaction
     * @param Client $client
     * @param Invoice $invoice
     * @return string
     * @throws AuthorizationException
     */
    public function confirm($transaction,$invoice, Client $client )
    {

//        if (Gate::allows('admin-only', [auth()->user(),'client','transaction', 'invoice'])) {
//            $quote = Transaction::with('destination','origin','quotation','goods')->where('transact', $transact)->get();
//
//            echo json_encode($quote);
//
//        }
        try {
            $this->authorizeForUser(Auth::user(), 'confirm', [$client]);
        } catch (AuthorizationException $e) {

        }
        $quote = Transaction::with('destination','origin','quotation','goods')->where('transact', $transaction)->first();
        $rate = Invoice::with('lines')->where('reference', $invoice)->get();

        return $quote->origin->city;

    }



}




