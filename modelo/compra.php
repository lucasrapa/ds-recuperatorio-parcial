<?php

class Compra {
    public $id;
    public $Fecha;
    public $MontoTotal;
    public $TipoCompra;
    public $ListLineasCompra = array();

    public function MostrarDatos (){
        echo 'Compra: '.' <br>';
        echo 'id:' .$this->id. '<br>';
        echo 'Fecha:' .$this->Fecha. '<br>';
        echo 'MontoTotal:' .$this->MontoTotal. '<br>';
        
       
        if($this->TipoCompra=='online') 
        {
            echo 'La compra fue realizada on-line' . '<br>';
        } else{
            if($this->TipoCompra=='fisica'){
                echo 'La compra fue realizada en una tienda fisica <br>';
            } else {
                echo 'el tipo de compra ingresado no es correcto <br>';
            }
        }
        
        foreach ($this->ListLineasCompra as $lnc)
        {
            echo 'id:' .$lnc->id. '<br>';
            echo 'cantidad:' . $lnc->Cantidad. '<br>';
            echo 'subtotal:' . $lnc->Subtotal. '<br>';
            echo 'id:' . $lnc->Producto->id . '<br>';
            echo 'descripcion'.$lnc->Producto->Descripcion. '<br>';
            echo 'precio:' .$lnc->Producto->Precio. '<br>';
        }
    }
}