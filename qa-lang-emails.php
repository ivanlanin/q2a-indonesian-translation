<?php
	
/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-include/qa-lang-emails.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Language phrases for email notifications

	Indonesian translation: Ivan Lanin <ivan at bahtera dot org>


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
		'a_commented_body' => "Jawaban Anda pada ^site_title mendapat komentar baru dari ^c_handle:\n\n^open^c_content^close\n\nJawaban Anda adalah:\n\n^open^c_context^close\n\nAnda dapat menanggapinya dengan menambahkan komentar sendiri:\n\n^url\n\nTerima kasih,\n\n^site_title",
		'a_commented_subject' => '^site_title - Jawaban Anda mendapat komentar baru',

		'a_followed_body' => "Jawaban Anda pada ^site_title mendapat pertanyaan terkait baru dari ^q_handle:\n\n^open^q_title^close\n\nJawaban Anda adalah:\n\n^open^a_content^close\n\nKlik tautan berikut untuk menjawab pertanyaan baru itu:\n\n^url\n\nTerima kasih,\n\n^site_title",
		'a_followed_subject' => '^site_title - Jawaban Anda mendapat pertanyaan terkait',

		'a_selected_body' => "Selamat! Jawaban Anda pada ^site_title telah dipilih sebagai yang terbaik oleh ^s_handle:\n\n^open^a_content^close\n\nPertanyaannya adalah:\n\n^open^q_title^close\n\nKlik tautan berikut untuk melihat jawaban Anda:\n\n^url\n\nTerima kasih,\n\n^site_title",
		'a_selected_subject' => '^site_title - Jawaban Anda dipilih sebagai jawaban terbaik!',

		'c_commented_body' => "Komentar baru dari ^c_handle telah ditambahkan setelah komentar Anda pada ^site_title:\n\n^open^c_content^close\n\nDiskusinya adalah sbb.:\n\n^open^c_context^close\n\nAnda dapat menanggapinya dengan menambahkan komentar baru:\n\n^url\n\nTerima kasih,\n\n^site_title",
		'c_commented_subject' => '^site_title - Komentar Anda ditanggapi',

		'confirm_body' => "Harap klik tautan berikut untuk mengonfirmasi alamat surel Anda pada ^site_title.\n\n^url\n\nTerima kasih,\n^site_title",
		'confirm_subject' => '^site_title - Konfirmasi Alamat Surel',

		'feedback_body' => "Komentar:\n^message\n\nNama:\n^name\n\nSurel:\n^email\n\nLaman sebelumnya:\n^previous\n\nPengguna:\n^url\n\nAlamat IP:\n^ip\n\nPeramban:\n^browser",
		'feedback_subject' => '^ - Masukan',

		'flagged_body' => "Kiriman dari ^p_handle telah menerima ^flags:\n\n^open^p_context^close\n\nKlik tautan berikut untuk melihat kiriman tersebut:\n\n^url\n\nTerima kasih,\n\n^site_title",
		'flagged_subject' => '^site_title - Kiriman Bertanda',

		'moderate_body' => "Kiriman dari ^p_handle memerlukan persetujuan Anda:\n\n^open^p_context^close\n\nKlik tautan berikut untuk menyetujui atau menolak kiriman:\n\n^url\n\nTerima kasih,\n\n^site_title",
		'moderate_subject' => '^site_title - Moderasi',

		'new_password_body' => "Sandi baru Anda pada ^site_title tertera di bawah ini.\n\nSandi: ^password\n\nDianjurkan untuk mengubah sandi ini segera setelah masuk.\n\nTerima kasih,\n^site_title\n^url",
		'new_password_subject' => '^site_title - Sandi Baru Anda',

		'private_message_body' => "Anda telah mendapat pesan pribadi dari ^f_handle pada ^site_title:\n\n^open^message^close\n\n^moreTerima kasih,\n\n^site_title\n\n\nUntuk mencekal pesan pribadi, kunjungi laman akun Anda:\n^a_url",
		'private_message_info' => "Informasi selengkapnya tentang ^f_handle:\n\n^url\n\n",
		'private_message_reply' => "Klik tautan berikut untuk membalas pesan pribadi dari ^f_handle:\n\n^url\n\n",
		'private_message_subject' => '^site_title - Pesan Pribadi dari ^f_handle',

		'q_answered_body' => "Pertanyaan Anda pada ^site_title telah dijawab oleh ^a_handle:\n\n^open^a_content^close\n\nPertanyaan Anda adalah:\n\n^open^q_title^close\n\nJika Anda menyukai jawaban ini, Anda dapat memilihnya sebagai jawaban terbaik:\n\n^url\n\nTerima kasih,\n\n^site_title",
		'q_answered_subject' => '^site_title - Pertanyaan Anda telah dijawab',

		'q_commented_body' => "Pertanyaan Anda pada ^site_title mendapat komentar baru dari ^c_handle:\n\n^open^c_content^close\n\nPertanyaan Anda adalah:\n\n^open^c_context^close\n\nAnda dapat menanggapinya dengan memberikan komentar Anda sendiri:\n\n^url\n\nTerima kasih,\n\n^site_title",
		'q_commented_subject' => '^site_title - Pertanyaan Anda mendapat komentar baru',

		'q_posted_body' => "Pertanyaan baru telah diajukan oleh ^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nKlik tautan berikut untuk melihat pertanyaan tersebut:\n\n^url\n\nTerima kasih,\n\n^site_title",
		'q_posted_subject' => '^site_title - Pertanyaan baru',

		'reset_body' => "Klik tautan berikut untuk mereset sandi Anda pada ^site_title.\n\n^url\n\nAnda juga dapat memasukkan kode berikut pada isian yang tersedia.\n\nKode: ^code\n\nJika Anda tidak mengajukan permintaan mereset sandi, harap abaikan pesan ini.\n\nTerima kasih,\n^site_title",
		'reset_subject' => '^site_title - Reset Sandi',

		'to_handle_prefix' => "^,\n\n",

		'welcome_body' => "Terima kasih telah mendaftar pada ^site_title.\n\n^custom^confirmDetail info masuk Anda adalah sbb.:\n\nSurel: ^email\nSandi: ^password\n\nHarap simpan informasi ini sebagai rujukan.\n\nTerima kasih,\n\n^site_title\n^url",
		'welcome_confirm' => "Harap klik tautan berikut untuk mengonfirmasi alamat surel Anda.\n\n^url\n\n",
		'welcome_subject' => '^site_title - Selamat Bergabung!',
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/