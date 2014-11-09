<?php

    class InvoicesTableSeeder extends DatabaseSeeder {

        public function run(){
            $invoice = new Invoice;
            $invoice->advertiserid = 1;
            $invoice->total = 50000;
            $invoice->status = "unpaid";
            $invoice->save();

            $invoice = new Invoice;
            $invoice->advertiserid = 1;
            $invoice->total = 10000;
            $invoice->status = "paid";
            $invoice->save();

            $invoice = new Invoice;
            $invoice->advertiserid = 2;
            $invoice->total = 50000;
            $invoice->status = "paid";
            $invoice->save();

            $invoice = new Invoice;
            $invoice->advertiserid = 2;
            $invoice->total = 50000;
            $invoice->status = "paid";
            $invoice->save();

            $invoice = new Invoice;
            $invoice->advertiserid = 2;
            $invoice->total = 50000;
            $invoice->status = "paid";
            $invoice->save();

            $invoice = new Invoice;
            $invoice->advertiserid = 2;
            $invoice->total = 1000;
            $invoice->status = "unpaid";
            $invoice->save();

        }
    }

?>