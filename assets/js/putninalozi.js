$(document).ready(function() {
    $(function() {
        $("#datepicker-1").datepicker({
            dateFormat: "dd-mm-yy"
        });
        $("#datepicker-2").datepicker({
            dateFormat: "dd-mm-yy"
        });
        $("#datepicker-3").datepicker({
            dateFormat: "dd-mm-yy"
        });

    });
});

function dodajTrosak() {
    var nalog_id = $("#nalog_id").val();
    var opis = $("#trosak_opis").val();
    var iznos = $("#trosak_iznos").val();
    var trosak_id;
    $.ajax({url: "<?php echo base_url(); ?>" + "putninalozi/dodajTrosak",
        type: "POST",
        dataType: 'json',
        data: {
            nalog_id: nalog_id,
            trosak_opis: opis,
            trosak_iznos: iznos
        },
        success: function(id) {
            //alert(id);
            trosak_id = id;
            $('#troskovi_table tr:last').before("<tr style=\"text-align: center;\"><td><input type=\"button\" onclick=\"izbrisiTrosak(" + trosak_id + ");\" value=\"Obriši\" class=\"btn btn-danger form-control\"></td><td>" + opis + "</td><td>" + iznos + "</td></tr>");
            $("#nalog_id").val("");
            $("#trosak_opis").val("");
            $("#trosak_iznos").val("");
        }
    });



}

function dodajRelaciju() {
    var nalog_id = $("#nalog_id").val();
    var _od = $("#od").val();
    var _do = $("#do").val();
    var km = $("#km").val();
    var vrsta_auta = $("#vrsta_auta").val();
    var iznos = $("#iznos").val();
    var rel_id;

    $.ajax({url: "<?php echo base_url(); ?>" + "putninalozi/dodajRelaciju",
        type: "POST",
        dataType: 'json',
        data: {
            nalog_id: nalog_id,
            od: _od,
            do: _do,
            km: km,
            vrsta_auta: vrsta_auta,
            iznos: iznos
        },
        success: function(id) {
            //alert(id);
            rel_id = id;
            alert(rel_id);
            $('#relacije_table tr:last').before("<tr style=\"text-align: center;\"><td><input type=\"button\" onclick=\"izbrisiRelaciju(" + rel_id + ");\" value=\"Obriši\" class=\"btn btn-danger form-control\"></td><td>" + _od + "</td><td>" + _do + "</td><td>" + km + "</td><td>" + vrsta_auta + "</td><td>" + iznos + "</td></tr>");
        }
    });

    $("#od").val("")
    $("#od").val("");
    $("#do").val("");
    $("#km").val("");
    $("#vrsta_auta").val("");
    $("#iznos").val("");
}

function izbrisiRelaciju(id) {
    $.ajax({
        url: "<?php echo base_url(); ?>" + "putninalozi/izbrisiRelaciju",
        type: "POST",
        dataType: 'json',
        data: {
            rel_id: id,
        },
        success: function(data) {

        }
    });

    $('#rel_tr_' + id).remove();
}

function izbrisiTrosak(id) {
    $.ajax({
        url: "<?php echo base_url(); ?>" + "putninalozi/izbrisiTrosak",
        type: "POST",
        dataType: 'json',
        data: {
            trosak_id: id,
        },
        success: function(data) {
        }
    });

    $('#trosak_tr_' + id).remove();
}