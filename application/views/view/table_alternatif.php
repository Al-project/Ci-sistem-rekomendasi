<?php
if ($alternatif->num_rows() > 0):
    $settings = array(
        'table_open' => '<table id="listAlternatif" class="table table-striped table-bordered">',
    );
    $cell = array(
        'data'=>'Kode Uji',
        'style'=>'width:10px'
    );
    $cell2 = array(
        'data'=>'Edit',
        'style'=>'width:10px'
    );
    $cell3 = array(
        'data'=>'Hapus',
        'style'=>'width:10px'
    );
    $this->table->set_heading($cell,'Nama Pengguna','Hobi','Status',$cell2,$cell3);
    $this->table->set_template($settings);
    foreach($alternatif->result() as $row){
        $this->table->add_row(array(
            $row->kode_uji,
            $row->nama_lengkap,
            $row->jenis_hobi,
            $row->status_kegiatan,
            "<a class='editAlternatif btn btn-success btn-block' data-kode_uji='$row->kode_uji' data-nama_lengkap='$row->nama_lengkap' data-jenis_hobi='$row->jenis_hobi' data-status_kegiatan='$row->status_kegiatan'>Edit &nbsp; <i class='glyphicon glyphicon-repeat'></i></a>",
            "<a class='hapusAlternatif btn btn-danger btn-block' data-kode_uji='$row->kode_uji'>Hapus &nbsp; <i class='glyphicon glyphicon-trash'></i></a>"
        ));
    }
    echo $this->table->generate();
else:
    $this->table->add_row('Tidak Ada Data');
    $this->table->generate();
endif;