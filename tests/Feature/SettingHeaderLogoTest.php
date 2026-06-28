<?php

namespace Tests\Feature;

use App\Http\Controllers\Admin\SettingController;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class SettingHeaderLogoTest extends TestCase
{
    public function test_settings_index_does_not_show_login_button_color_option(): void
    {
        $controller = new SettingController();
        $response = $controller->index();
        $html = $response->render();

        $this->assertStringNotContainsString('Warna Tombol Login', $html);
        $this->assertStringNotContainsString('login_button_color', $html);
    }

    public function test_header_logo_can_be_uploaded_and_saved(): void
    {
        Setting::where('key', 'header_logo')->delete();

        $file = UploadedFile::fake()->image('header-logo.png', 200, 200);
        $request = new Request();
        $request->files->add(['header_logo' => $file]);

        $controller = new SettingController();
        $response = $controller->update($request);

        $this->assertTrue($response->isRedirect('/admin/settings'));

        $setting = Setting::where('key', 'header_logo')->first();
        $this->assertNotNull($setting);
        $this->assertStringStartsWith('/images/', $setting->value);
        $this->assertFileExists(public_path(ltrim($setting->value, '/')));
    }
}
