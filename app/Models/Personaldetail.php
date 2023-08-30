<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personaldetail extends Model
{
    use HasFactory;
    protected $table = 'personal_detail';
    protected $guarded = [];

    public static function generateInvoiceNumber()
    {
        $lastOrder = Personaldetail::orderBy('id', 'desc')->first();
        $currentYear = date('Y');
        $lastInvoiceNumber = $lastOrder ? $lastOrder->no_pendaftaran : null;

        if ($lastInvoiceNumber && strpos($lastInvoiceNumber, $currentYear) !== false) {
            // Jika nomor invoice tahun ini sudah ada, tambahkan 1 ke nomor berurut
            $lastInvoiceNumber = intval(substr($lastInvoiceNumber, -3));
            $newInvoiceNumber = sprintf('%s-%03d', $currentYear, $lastInvoiceNumber + 1);
        } else {
            // Jika nomor invoice tahun ini belum ada, mulai dari 001
            $newInvoiceNumber = sprintf('%s-%03d', $currentYear, 1);
        }

        return $newInvoiceNumber;
    }

    public function email()
    {
        return $this->belongsTo(User::class, 'email_id');
    }

    public function nama_lengkap()
    {
        return $this->belongsTo(User::class, 'nama_lengkap_id');
    }

    public function kompetensi()
    {
        return $this->belongsTo(Kompetensi::class, 'kompetensi_id');
    }
}