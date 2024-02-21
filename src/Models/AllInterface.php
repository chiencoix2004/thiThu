<?php
namespace Coongchjen\ThiThu\Models;

interface AllInterface {
    public function getList();

    public function getByID( $id );

    public function deleteByID( $id );
}