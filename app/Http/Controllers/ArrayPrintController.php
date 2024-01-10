<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayPrintController extends Controller
{
    public function index()
    {
        $hasil = [];

        for ($i = 100; $i >= 1; $i--) {
            if ($this->angkaPrima($i)) {
                continue;
            }

            if ($i % 3 === 0 && $i % 5 === 0) {
                $hasil[] = "FooBar";
            } elseif ($i % 3 === 0) {
                $hasil[] = "Foo";
            } elseif ($i % 5 === 0) {
                $hasil[] = "Bar";
            } else {
                $hasil[] = $i;
            }
        }

        return view('angka', compact('hasil'));
    }

    private function angkaPrima($angka)
    {
        if ($angka < 2) {
            return false;
        }

        for ($i = 2; $i <= sqrt($angka); $i++) {
            if ($angka % $i === 0) {
                return false;
            }
        }

        return true;
    }
}
