<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $imageUrl = 'assets/img/logos.png';
        $favicon = 'favicon.png';
        $input = [
            ['key' => 'application_name', 'value' => 'GrounLink'],
            ['key' => 'logo', 'value' => $imageUrl],
            ['key' => 'favicon', 'value' => $favicon],
            ['key' => 'company_description', 'value' => 'At Ground-Link Advertising, we create stunning websites and use data-driven advertising to boost your online presence. Let's craft success together.'],
            ['key' => 'address', 'value' => '14F IBM PLAZA Building  Eastwood Avenue Quezon Citya'],
            ['key' => 'phone', 'value' => '+639271534048'],
            ['key' => 'email', 'value' => 'info@groundlinkadvertising.com'],
            ['key' => 'facebook_url', 'value' => 'https://www.facebook.com/GroundLinkAdvertisingServices/'],
            ['key' => 'twitter_url', 'value' => 'https://twitter.com/infyom?lang=en'],
            ['key' => 'google_plus_url', 'value' => 'https://infyom.com/'],
            ['key' => 'linkedIn_url',
                'value' => 'https://www.linkedin.com/organization-guest/company/infyom-technologies?challengeId=AQFgQaMxwSxCdAAAAXOA_wosiB2vYdQEoITs6w676AzV8cu8OzhnWEBNUQ7LCG4vds5-A12UIQk1M4aWfKmn6iM58OFJbpoRiA&submissionId=0088318b-13b3-2416-9933-b463017e531e',
            ],
            ['key' => 'about_us', 'value' => 'Over past 10+ years of experience and skills in various technologies, we built great scalable products.
Whatever technology we worked with, we just not build products for our clients but we also try to make it generate and available to other lots of developers worldwide. And that\'s the reason we are the only leading company in India who created tools and available it to millions of developers worldwide. Feel free to checkout our Github account. Because we believe that open-source is the future !! We have an open-source lab to which we call InfyOm Lab .'],
        ];

        foreach ($input as $data) {
            $key = Setting::where('key', $data['key'])->first();
            if (isset($key)) {
                $key->update($data);
            } else {
                Setting::create($data);
            }
        }
    }
}
