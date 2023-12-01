<?php

class Inventory extends CI_Model{


public function __construct()
    {
        parent::__construct();
        //echo 'constructor';
    }
function getHistory(){
        $this->db->select('*');
                $this->db->from('history');
                $query = $this->db->get();
                if( $query->num_rows()>0){
                    return  $query->result_array();
                }
                else{
                    return false;
                }
        }

function getCategoryReport() {
    $this->db->select('ProductID,
                        ProductName,
                        Qty');
    $this->db->from('product_info');
    $query = $this->db->get();
    if($query->num_rows()>0){
        return $query->result_array();
    }else{
        return false;
    }
}

function getIndividualReports(){
    // $this->db->select
}

function getInfoID(){
        $this->db->select('productID');
        $this->db->from('product_info');

        $query = $this->db->get();
        if( $query->num_rows()>0){
            return  $query->result_array();
        }
        else{
            return false;
        }
    }

function getInventory(){
    $this->db->select('product_info.ProductID as id,
                        product_info.ProductName as name,
                        SKU as sku,
                        product_info.Category as category,
                        Supplier as supplier,
                        SupplierID as sID,
                        PurchasePrice as pPrice,
                        SalesPrice_kg as sPrice,
                        Qty as stock,
                        ReorderPoint as rPoint,
                        inventory_record.Location as location,
                        LastUpdated as date
                        ');
            $this->db->from('inventory_record');
            $this->db->join('product_info', 'product_info.ProductName = Inventory_record.ProductName');
            $this->db->join('supplier_info', 'supplier_info.SupplierName = Inventory_record.Supplier');
            $query = $this->db->get();
            if( $query->num_rows()>0){
                return  $query->result_array();
            }
            else{
                return false;
            }
    }
    function getInventoryInfo($id){
        $this->db->select('product_info.ProductID as id,
                            product_info.ProductName as name,
                            SKU as sku,
                            product_info.Category as category,
                            Supplier as supplier,
                            SupplierID as sID,
                            PurchasePrice as pPrice,
                            SalesPrice_kg as sPrice,
                            Qty as stock,
                            ReorderPoint as rPoint,
                            inventory_record.Location as location,
                            LastUpdated as date
                            ');
                $this->db->from('inventory_record');
                $this->db->join('product_info', 'product_info.ProductName = Inventory_record.ProductName');
                $this->db->join('supplier_info', 'supplier_info.SupplierName = Inventory_record.Supplier');
                $this->db->where('product_info.ProductID', $id);
                $query = $this->db->get();
                if( $query->num_rows()>0){
                    return  $query->result_array();
                }
                else{
                    return false;
                }
        }

    /*function getInfo($id){
        $this->db->select('ProductID as id,
                        ProductName as product,
                        Category as category,
                        SKU as sku,
                        ReorderPoint as rPoint,
                        Qty as quantity,
                        LastUpdated as lastupdated,
                        Location as location,
                        PurchasePrice_kg as purchasePrice,
                        SalesPrice_kg as salePrice
                            ');
                $this->db->from('product_info');
                $this->db->where('ProductID', $id);
                $query = $this->db->get();
                if( $query->num_rows()>0){
                    return  $query->result_array();
                }
                else{
                    return false;
                }
        }*/

    //     function getInventory(){
    // $this->db->select('ProductID as id,
    //                     ProductName as name,
    //                     SKU as sku,
    //                     Category as category,
    //                     Supplier as supplier,
    //                     SupplierID as sID,
    //                     PurchasePrice as pPrice,
    //                     SalePrice as sPrice,
    //                     stock,
    //                     ReorderPoint as rPoint,
    //                     Location as location,
    //                     ImageDirectory as imgDir,
    //                     LastUpdated as date,
    //                     desription as description
    //                     ');
    //         $this->db->from('inventoryinfo');
    //         $query = $this->db->get();
    //         if( $query->num_rows()>0){
    //             return  $query->result_array();
    //         }
    //         else{
    //             return false;
    //         }
    // }

    // function getInfo($id){
    //     $this->db->select('ProductID as id,
    //                         ProductName as name,
    //                         SKU as sku,
    //                         Category as category,
    //                         Supplier as supplier,
    //                         SupplierID as sID,
    //                         PurchasePrice as pPrice,
    //                         SalePrice as sPrice,
    //                         stock,
    //                         ReorderPoint as rPoint,
    //                         Location as location,
    //                         ImageDirectory as imgDir,
    //                         LastUpdated as date,
    //                         desription as description
    //                         ');
    //             $this->db->from('inventoryinfo');
    //             $this->db->where('ProductID', $id);
    //             $query = $this->db->get();
    //             if( $query->num_rows()>0){
    //                 return  $query->result_array();
    //             }
    //             else{
    //                 return false;
    //             }
    //     }

function insertNewProduct($data){
    $value = array(
            'ProductID' => trim($data['id']),
            'ProductName' => trim($data['pName']),
            'Category' => trim($data['category']),
            'SKU' => trim($data['sku']),
            'ReorderPoint' => trim($data['rPoint']),
            'Qty' => trim($data['quantity']),
            'LastUpdated' => trim($data['lastupdated']),
            'Location' => trim($data['location']),
            'PurchasePrice_kg' => trim($data['purchasePrice']),
            'SalePrice_kg' => trim($data['salePrice'])
            );
            $this->db->insert('product_info', $value);
    }
    function updatedata($data){
        $value = array(
            'ProductID' => trim($data['id']),
            'ProductName' => trim($data['pName']),
            'Category' => trim($data['category']),
            'SKU' => trim($data['sku']),
            'ReorderPoint' => trim($data['rPoint']),
            'Qty' => trim($data['quantity']),
            'LastUpdated' => trim($data['lastupdated']),
            'Location' => trim($data['location']),
            'PurchasePrice_kg' => trim($data['purchasePrice']),
            'SalePrice_kg' => trim($data['salePrice'])
            );
                $this->db->where('ProductID', $data['pID']);
                $this->db->update('product_info', $value);
        }
function getOrder(){
    $this->db->select('Date as odate,
                        CustomerName as cname,
                        ProductName as product,
                        Quantity as oquantity,
                        InvoiceNumber as invoiceno
                        ');
            $this->db->from('order_info');
            $query = $this->db->get();
            if( $query->num_rows()>0){
                return  $query->result_array();
            }
            else{
                return false;
            }
    }

function insertNewOrder($data){
    $value = array(
            'Date' => trim($data['odate']),
            'CustomerName' => trim($data['cname']),
            'ProductName' => trim($data['pCategory']),
            'Quantity' => trim($data['oquantity']),
            'InvoiceNumber' => trim($data['invoiceno'])
            );
            $this->db->insert('order_info', $value);
    }

/*
function getLatestInfo(){
    $this->db->select('report_id as newsID,
                       disaster_type as warningType,
                       location as affectedArea,
                       description as messageRespond,
                       startDate as date
                       ');
            $this->db->from('d_report');
            $query = $this->db->get();
            if( $query->num_rows()>0){
                return  $query->result_array();
            }
            else{
                return false;
            }
    }

function checkCountKKF(){
        $this->db->select('COUNT(aArea) as maxarea');
        $this->db->from('d_notice');
        $this->db->where('aArea="Kota Kinabalu"');  
        $this->db->where('type="Floods"');       
        $data = $this->db->get();
        
        $result= array();
        
        foreach($data->result_array() as $row){
            array_push($result, array($row['maxarea']));
        }
        return $result;
    }
    function checkCountPTT(){
        $this->db->select('COUNT(aArea) as maxarea');
        $this->db->from('d_notice');
        $this->db->where('aArea="Putatan"');        
        $data = $this->db->get();
        
        $result= array();
        
        foreach($data->result_array() as $row){
            array_push($result, array($row['maxarea']));
        }

        return $result;
    }
    function checkCountTR(){
        $this->db->select('COUNT(aArea) as maxarea');
        $this->db->from('d_notice');
        $this->db->where('aArea="Tuaran"');        
        $data = $this->db->get();
        
        $result= array();
        
        foreach($data->result_array() as $row){
            array_push($result, array($row['maxarea']));
        }

        return $result;
    }
    function checkCountPP(){
        $this->db->select('COUNT(aArea) as maxarea');
        $this->db->from('d_notice');
        $this->db->where('aArea="Papar"');        
        $data = $this->db->get();
        
        $result= array();
        
        foreach($data->result_array() as $row){
            array_push($result, array($row['maxarea']));
        }

        return $result;
    }
    function checkCountTPR(){
        $this->db->select('COUNT(aArea) as maxarea');
        $this->db->from('d_notice');
        $this->db->where('aArea="Tampaluri"');        
        $data = $this->db->get();
        
        $result= array();
        
        foreach($data->result_array() as $row){
            array_push($result, array($row['maxarea']));
        }

        return $result;
    }
    function checkCountRN(){
        $this->db->select('COUNT(aArea) as maxarea');
        $this->db->from('d_notice');
        $this->db->where('aArea="Ranau"');        
        $data = $this->db->get();
        
        $result= array();
        
        foreach($data->result_array() as $row){
            array_push($result, array($row['maxarea']));
        }

        return $result;
    }

function getDisasterInfo(){
    $this->db->select('info_name, info_desc, info_pic');
    $this->db->from('d_info');
    
    $data = $this->db->get();

    $result = array();
            
    foreach($data->result_array() as $row){
                array_push($result, array('infoName'=>$row['info_name'], 'infoDesc' => $row['info_desc'], 'infoPic' => $row['info_pic']
            ));
    }           
    return $result;
}

function insertNewVolunteer($data){

        if ($data) {
                $this->db->trans_begin(true);

                $value = array(
                    'volunteer_name' => trim($data['vName']),
                    'volunteer_age' => trim($data['vAge']),
                    'volunteer_gender' => trim($data['vGender']),
                    'volunteer_email' => trim($data['vEmail']),
                    'volunteer_phone' => trim($data['vPhone']),
                    'volunteer_img' => trim($data['vImg'])
                    );

                $this->db->insert('d_volunteer', $value);


            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                return false;
            }else{
                $this->db->trans_commit();
                return true;
            }
        }else{
            return false;
        }
    }*/

}
?>