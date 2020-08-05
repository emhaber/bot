<?php
$siteVerisi = file_get_contents("https://namazvakitleri.diyanet.gov.tr/tr-TR/9703/malatya-icin-namaz-vakti"); //hedef sitenin adresi
preg_match('#</tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div id = "tab-1" class="w3-container w3-border nv-tab-content" style="display:none">

                                                    <div class="table-responsive">
(.*?)
</div>
                                                </div>

                                
                                                            </div>
#', $siteVerisi,$ciktinamazvakti); // çekilecek kısım tanımı
// # içerisine gelecek kod ve çekilecek kısıma (.*?) gelecek

echo $ciktinamazvakti[1]; //çıktı
?>
