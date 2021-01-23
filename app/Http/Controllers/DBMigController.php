<?php

namespace App\Http\Controllers;

use DB;

class DBMigController extends Controller
{
	public function doimport()
	{
		$wp_users = DB::table('wp_users')->orderBy('user_login', 'asc')->get();

		foreach($wp_users as $wpu)
		{
			$wp_usermeta_en = DB::table('wp_usermeta')->where('user_id', $wpu->ID)->where('meta_key', 'emergancy_full_name')->first();
			$wp_usermeta_ep = DB::table('wp_usermeta')->where('user_id', $wpu->ID)->where('meta_key', 'emergancy_phone_number')->first();

			if($wp_usermeta_en){ $ec_full_name = $wp_usermeta_en->meta_value; } else { $ec_full_name = ''; }
			if($wp_usermeta_ep){ $ec_phone = $wp_usermeta_ep->meta_value; } else { $ec_phone = ''; }

			DB::table('users')->insert([
				'id' => $wpu->user_login,
				'name' => $wpu->ApplicantFirstName.' '.$wpu->ApplicantLastName,
				'email' => $wpu->user_email,
				'password' => $wpu->user_pass,
				'active' => 1,
				'created_at' => $wpu->user_registered,
				'updated_at' => $wpu->user_registered
			]);

			DB::table('user_infos')->insert([
				'user_id' => $wpu->user_login,
				'first_name' => $wpu->ApplicantFirstName,
				'last_name' => $wpu->ApplicantLastName,
				'cell_phone' => $wpu->CellNumber,
				'home_phone' => $wpu->HomeNumber,
				'street' => $wpu->StreetName,
				'apartment' => $wpu->Apt,
				'city' => $wpu->City,
				'state' => $wpu->Province,
				'zip_code' => $wpu->PostalCode,
				'ec_full_name' => $ec_full_name,
				'ec_phone' => $ec_phone,
				'status' => 1,
				'created_at' => $wpu->user_registered,
				'updated_at' => $wpu->user_registered
			]);

			DB::table('user_spouses')->insert([
				'user_id' => $wpu->user_login,
				'first_name' => $wpu->SpouseFirstName,
				'middle_name' => '',
				'last_name' => $wpu->SpouseLastName,
				'status' => 1,
				'created_at' => $wpu->user_registered,
				'updated_at' => $wpu->user_registered
			]);

			$wp_user_child = DB::table('wp_user_child')->where('user_id', $wpu->ID)->orderBy('id', 'asc')->get();

			foreach($wp_user_child as $wpuc)
			{
				DB::table('user_childrens')->insert([
					'user_id' => $wpu->user_login,
					'first_name' => $wpuc->child_name,
					'middle_name' => $wpuc->child_middle_name,
					'last_name' => $wpuc->child_last_name,
					'status' => 1,
					'created_at' => $wpu->user_registered,
					'updated_at' => $wpu->user_registered
				]);
			}

			$wp_user_trans = DB::table('wp_user_trans')->where('user_id', $wpu->ID)->orderBy('id', 'asc')->get();

			foreach($wp_user_trans as $wput)
			{
				DB::table('user_payments')->insert([
					'user_id' => $wpu->user_login,
					'amount' => substr($wput->amount, 0, -2),
					'notes' => $wput->transid,
					'balance_transaction' => $wput->balance_transaction,
					'receipt_url' => $wput->receipt_url,
					'status' => 1,
					'created_at' => $wput->creation_date.' 00:00:00',
					'updated_at' => $wput->creation_date.' 00:00:00'
				]);
			}
		}
	}
}
