<?php
use App\Models\User;
use Illuminate\Support\Facades\Hash;


User::create([
    'name' => 'SuperAdmin',
    'email' => 'superadmin@gmail.com',
    'password'=> Hash::make('SuperAdmin'),
    'role' => 'superadmin',
]);

User::create([
    'name' => 'Admin',
    'email' => 'admin@gmail.com',
    'password'=> Hash::make('Admin'),
    'role' => 'admin',
]);
 
User::create([
    'name' => 'TalentAcquisitionAdmin',
    'email' => 'talentacquisitionadmin@gmail.com',
    'password'=> Hash::make('TalentAcquisitionAdmin'),
    'role' => 'TAA',
]);

User::create([
    'name' => 'TalentAcquisition',
    'email' => 'talentacquisition@gmail.com',
    'password'=> Hash::make('TalentAcquisition'),
    'role' => 'TA',
]);