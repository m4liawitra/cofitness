<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SendContactEmailRequest;
use App\Http\Requests\SubscribeEmailRequest;
use App\Notifications\ContactEmailNotification;
use App\Notifications\SubscribeEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    public function index(Request $request)
	{
		return view('frontend.contact');
	}

    public function send(SendContactEmailRequest $request)
    {
        // Validate data
        $validated = $request->validated();

        // Send email
        try {
            Notification::route('mail', env('MAIL_TO_ADDRESS'))->notify(new ContactEmailNotification($validated));
        } catch (\Swift_TransportException $e) {
            Log::error($e->getMessage());

            return redirect()
                ->route('contact')
                ->withFragment('section-contact')
                ->with('notify_title', __('labels.contact.error.send_message.title'))
                ->with('notify_message_error', __('labels.contact.error.send_message.message'));
        } catch (\Swift_RfcComplianceException $e) {
            Log::error($e->getMessage());

            return redirect()
                ->route('contact')
                ->withFragment('section-contact')
                ->with('notify_title', __('labels.contact.error.send_message.title'))
                ->with('notify_message_error', __('labels.contact.error.send_message.message'));
        }
        
        // Redirect
        return redirect()
            ->route('contact')
            ->withFragment('section-contact')
            ->with('notify_title', __('labels.contact.success.send_message.title'))
            ->with('notify_message_success', __('labels.contact.success.send_message.message'));
    }

    public function subscribe(SubscribeEmailRequest $request)
    {
        // Validate data
        $validated = $request->validated();

        // Send email
        try {
            Notification::route('mail', env('MAIL_TO_ADDRESS'))->notify(new SubscribeEmailNotification($validated));
        } catch (\Swift_TransportException $e) {
            Log::error($e->getMessage());

            return redirect()
                ->route('contact')
                ->withFragment('section-subscribe')
                ->with('notify_title', __('labels.contact.error.subscribe.title'))
                ->with('notify_message_error', __('labels.contact.error.subscribe.message'));
        } catch (\Swift_RfcComplianceException $e) {
            Log::error($e->getMessage());

            return redirect()
                ->route('contact')
                ->withFragment('section-subscribe')
                ->with('notify_title', __('labels.contact.error.subscribe.title'))
                ->with('notify_message_error', __('labels.contact.error.subscribe.message'));
        }
        
        // Redirect
        return redirect()
            ->route('contact')
            ->withFragment('section-subscribe')
            ->with('notify_title', __('labels.contact.success.subscribe.title'))
            ->with('notify_message_success', __('labels.contact.success.subscribe.message'));
    }
}
