<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function store(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'client_comment' => 'required|string',
            'client_name' => 'required|string|max:255',
            'client_address' => 'required|string',
            'client_image' => 'nullable|string',
        ]);
    
        // Kiểm tra nếu người dùng không chọn ảnh
        if (empty($validatedData['client_image'])) {
            $validatedData['client_image'] = 'noAvatar.jpg';
        }
    
        // Create a new client instance
        $client = new Client;
        $client->client_comment = $validatedData['client_comment'];
        $client->client_name = $validatedData['client_name'];
        $client->client_address = $validatedData['client_address'];
        $client->client_image = $validatedData['client_image'];
    
        // Lưu bình luận vào cơ sở dữ liệu
        $client->save();
    
        // Redirect back or to a success page
        return redirect()->back()->with('success', 'Bình luận đã được gửi thành công!');
    }
}
