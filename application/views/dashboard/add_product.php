
<?php $this->load->view("dashboard/header"); ?>


    <div class="row">
        <div class="col-md-12">
        <div>
            <div class="card-box">
                <h4 class="m-t-0 header-title">Test</h4>
                <?php $sayac = 1;
                foreach($Sorular as $soru){ ?>
                <form class="soru" id="<?php echo $soru["Soru_No"];?>">
                    <div class="form-row">
                        <?php if(!empty($soru["Resim"])){ ?>
                            <div class="col-md-5 mx-auto">
                                <img src="<?php echo $soru["Resim"];?>" alt="" class="img-fluid" />
                            </div>
                        <?php } ?>
                    </div>
                    <br>
                    <div class="form-row">
                        <a><?php echo $sayac.") ".$soru["Soru"];
                        $sayac++;?></a>
                    </div>
                    <br>
                    <?php foreach ($soru["Cevaplar"] as $cevap) { ?>
                    <div class="form-row">
                        <label class="">
                            <input type="radio" value="<?php echo $cevap["Secenek_No"];?>" name="cevap" /><?php echo $cevap["Cevap"];?>
                        </label>
                    </div>
                    <?php } ?>
                    </form>
                    <hr>
                    <?php } ?>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <a href="<?php echo base_url("Urunler/listele");?>" class="btn btn-danger">İptal</a>
                        </div>
                        <div class="form-group col-md-4">
                            <button id="bitir" class="btn btn-primary float-right">Kaydet</button>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
<?php $this->load->view("dashboard/footer");   ?>
<script>
$(document).ready(function() {
    $("#bitir").click(function() {
        var answersList = [];
        //Loop over all questoins
        $(".soru").each(function() {

        var questionId = $(this).attr("id");
        var answer = $("input[name='cevap']:checked", $(this)).val();

        //if Answer isnt provided do not update the answersList
        if (answer !== undefined) {
            answersList.push({
                question: questionId,
                answer: answer
            });
        }
        });
        $.ajax({
            type: "POST",
            url: url,
            data: data,
            success: success,
            dataType: dataType
        });
        console.log(answersList);
    });
});
</script>