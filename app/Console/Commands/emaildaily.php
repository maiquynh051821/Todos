<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Sendmail;
use Illuminate\Support\Facades\Mail;
use App\Mail\SampleEmail;
class Emaildaily extends Command
{
    protected $signature = 'email:daily';
    protected $description = 'Send daily emails';

    public function handle()
    {
        //Lấy danh sách email cần gửi hàng ngày
        $emails = Sendmail::where('checkbox', true)->get();

        // Gửi email cho mỗi email trong danh sách
        foreach ($emails as $email) {
            Mail::to($email->email)->send(new SampleEmail($email));
        }
        $this->info('Daily emails sent successfully.');  
    }
}
