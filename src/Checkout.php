<?php
namespace Skygdi\Checkout;

use Illuminate\Session\Store;
use Skygdi\Checkout\SkygdiCheckout;

class Checkout
{
    public static function createInvoiceID($id){
        self::clearUnPaid();
        return SkygdiCheckout::firstOrCreate(["invoice_id"=>$id]);
    }

    public static function checkInvoiceExist($id){
        $c = SkygdiCheckout::where("invoice_id",$id)->first();
        if( $c ) return $c;
        else return false;
    }

    public static function markAsPaid($id){
        $c = SkygdiCheckout::where("invoice_id",$id)->first();
        if( $c ){
            $c->update(["paid"=>1]);
            return true;
        }
        else return false;
    }

    protected static function clearUnPaid(){
        //Remove those unpaid data which 1 week ago
        $dt = date("Y-m-d",time()-60*60*24*7);
        SkygdiCheckout::where("paid",0)
            ->whereDate('updated_at', '<', $dt)
            ->forcedelete();

        //Remove all the data which is 2 months ago
        $dt = date("Y-m-d",time()-60*60*24*60);
        SkygdiCheckout::where("paid",1)
            ->whereDate('updated_at', '<', $dt)
            ->forcedelete();
    }
    
}