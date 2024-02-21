<?php
namespace Coongchjen\ThiThu\Controllers;
use Coongchjen\ThiThu\Commons\Controller;
use Coongchjen\ThiThu\Models\GiangVien;

class GiangVienController extends Controller {

    private GiangVien $giangVien;

    public function __construct() {
        $this->giangVien = new GiangVien();

    }

    public function index() {
        $data[ 'giangViens' ] = $this->giangVien->getList();
        return $this->renderView( 'giangvien.index', $data );

    }

    public function add() {

        if ( !empty( $_POST ) ) {

            $_SESSION[ 'errors' ] = [];
            if ( empty( $_POST[ 'name' ] ) ) {
                $_SESSION[ 'errors' ][] = 'tên không được để trống';
            }
            if ( empty( $_POST[ 'email' ] ) ) {
                $_SESSION[ 'errors' ][] = 'email không được để trống';
            }
            if ( !filter_var( $_POST[ 'email' ], FILTER_VALIDATE_EMAIL ) ) {
                $_SESSION[ 'errors' ][] = 'email không đúng định dạng';
            }
            if ( empty( $_POST[ 'phone' ] ) ) {
                $_SESSION[ 'errors' ][] = 'phone không được để trống';
            }

            if ( empty( $_SESSION[ 'errors' ] ) ) {
                $this->giangVien->insert(
                    $_POST[ 'name' ]
                    , $_POST[ 'email' ]
                    , $_POST[ 'phone' ]
                );

                header( 'Location:/giangvien/' );
                exit();
            }

            header( 'Location:/giangvien/add' );
        }

        return $this->renderView( 'giangvien.add' );

    }

    public function update( $id ) {
        $giangVien = $this-> giangVien ->getByID( $id );

        if ( empty( $giangVien ) ) {
            echo '404 - Not Found';
            die;
        }
        if ( !empty( $_POST ) ) {
            $this->giangVien->updateByID( $id, $_POST[ 'name' ], $_POST[ 'email' ], $_POST[ 'phone' ] );

            header( "Location:/giangvien/$id/update" );
            exit;
        }

        return $this->renderView( 'giangvien.update', [ 'giangVien'=>$giangVien ] );
    }

    public function delete( $id ) {

        $giangVien = $this-> giangVien ->getByID( $id );

        if ( empty( $giangVien ) ) {
            echo '404 - Not Found';
            die;
        }

        $this->giangVien->deleteByID( $id );

        header( 'Location:/giangvien/' );
        exit;
    }

}