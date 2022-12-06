<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProfileTest extends TestCase
{
    public function test_upload_profile_photo()
    {
        Storage::fake('local');

        $response = $this->post('profile', [
            'photo' => $photo = UploadedFile::fake()->image('photo.png')
        ]);

        $this->assertTrue(Storage::disk('local')->exists('profiles/' . $photo->hashName()));

        $response->assertRedirect('profile');
    }

    public function test_upload_photo_profile_validation()
    {
        $response = $this->post('profile', [
            'photo' => ''
        ]);

        $response->assertSessionHasErrors('photo');
    }
}
