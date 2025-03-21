<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function update(Request $request)
    {
        $user = Auth::user();
        $role = $request->input('role');

        if (!in_array($role, ['admin', 'publisher', 'advertiser'])) {
            return back()->with('error', 'Invalid role selected');
        }

        $user->update(['role' => $role]);

        if ($role === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif ($role === 'publisher') {
            return redirect()->route('publisher.dashboard');
        } else {
            return redirect()->route('advertiser.dashboard');
        }
    }
}