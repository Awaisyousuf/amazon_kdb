<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SampleMail;
use App\Mail\Thankyou;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function billing(Request $request)
    {
        $category = $request->category;
        $package_name = $request->package_name;
        $price = $request->price;
        return view(
            'website.billing',
            compact('category', 'package_name', 'price')
        );
    }
    public function billing_process(Request $request)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/charges');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            'amount=' .
                $request->price * 100 .
                '&currency=usd&description=' .
                $request->package_name .
                '&source=' .
                $request->stripeToken
        );
        curl_setopt(
            $ch,
            CURLOPT_USERPWD,
            'sk_test_51Moo8UBI1BaprlTcaiwZ5uk86uTiGogc94tBeR2EdNfVrrNyODwqNeqkeqa5pLn02z2VrzFWpbMLdrnElAnCwj4y007EOdCgKq' .
                ':' .
                ''
        );
        $headers = [];
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
            exit();
        }
        curl_close($ch);

        return redirect()
            ->route('index')
            ->with('order_success', 'success');
    }

    public function sendEmail(Request $request)
    {
        $details = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required|string',
        ]);

        try {
            Mail::to('qwertykhan8845@gmail.com')->send(
                new SampleMail($details)
            );
            Mail::to($request->email)->send(new Thankyou($details));
            return redirect()
                ->route('index')
                ->with('success', 'Message sent successfully!');
        } catch (\Exception $e) {
            return redirect()
                ->route('index')
                ->with('error', '' . ':' . $e);
        }
        // return redirect()
        //     ->route('index')
        //     ->with('success', 'Message sent successfully!');
    }
}
