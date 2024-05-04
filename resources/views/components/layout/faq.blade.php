<?php 
use App\Models\Faq as Faq_Model;
$website_id = env('WEBSITE_ID');
$faq_datas = Faq_Model::where('website_id',$website_id)->orderBy('id','desc')->get()->toArray();
?>
@if(!empty($faq_datas)):
    <section class="faq-sec">
        <div class="container">
            <div class="faq-box">
                <div class="hiw-head">
                    <h2 class="head-title">Frequently Asked <br> <span>Questions</span></h2>
                </div>
                <div class="accordion" id="accordionExample">
                    @foreach ($faq_datas as $faq)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading<?= $faq['id'];?>">
                                <a class="accordion-button collapsed" href="javascript:;" data-bs-toggle="collapse"
                                    data-bs-target="#collapse<?= $faq['id'];?>" aria-expanded="true" aria-controls="collapse<?= $faq['id'];?>">
                                    <?= $faq['question'];?>
                                </a>
                            </h2>
                            <div id="collapse<?= $faq['id'];?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $faq['id'];?>"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body"><?= $faq['answer'];?></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif