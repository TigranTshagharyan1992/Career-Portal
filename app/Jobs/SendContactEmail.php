<?php

namespace App\Jobs;

use App\Mail\ContactMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendContactEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(protected $data){}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to('tigran.tshagharyan@am.gt.com')->send(new ContactMessage($this->data));

    }

    public function failed(\Exception $exception)
    {
        Log::error('Email job failed: '.$exception->getMessage());
    }
}
