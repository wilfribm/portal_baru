@extends('landing_page.layout')

@section('content')

    <div class="container" style="padding-top:130px;padding-bottom:80px;">
        <div class="row">
                <div class="col-12">
                    <br>
                    <div class="text-center">
                            <h2 class="section-heading text-uppercase">PROFIL</h2>
                        </div>
                    <div style="text-align: justify;">
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="h-100">
                                        <div class="card-body">
                                        <h4>Sejarah</h4>
                                        Penelitian untuk pengembangan sistem informasi di bidang pertanian terlah dilakukan oleh tim dari Fakultas Teknologi Informasi Universitas Kristen Duta Wacana (FTI UKDW) sejak tahun 2016. Pengembangan sistem informasi ini dimulai dengan pengembangan Blueprint Sistem Informasi bagi pertanian di Indonesia. Pengembangan selanjutnya adalah melakukan pengembangan beberapa sistem informasi pendukung. Pengembangan sistem informasi di bidang pertanian telah dilakukan oleh tim. Terdapat 4 sistem yang telah dikembangkan, yaitu Sistem Informasi (SI) Petani dan Kelompok Tani, SI Aktivitas Tani, SI Pembelian dan Penjualan Produk Pertanian, SI Pemetaan Lahan berbasis Web dan Mobile.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="h-100">
                                        <div class="card-body">
                                            <h4>Logo DutaTani</h4>
                                            <div class="text-center">
                                                <img src="{{asset('img/dutatani.png')}}" style="width: 40%;height:40%;"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="h-100">
                                        <div class="card-body">
                                    <h4>Tujuan Proyek</h4>
                                    Penelitian ini bertujuan untuk membantu mengembangkan teknologi di sektor pertanian. Pertanian dengan begitu banyak sumber daya alamnya memiliki potensi yang sangat besar dalam mendukung perekonomian negara khususnya di Indonesia. Namun hal ini belum sepenuhnya diikuti oleh perkembangan teknologi. Oleh karena itu penelitian ini tidak hanya membantu mengembangkan pertanian dengan teknologi, namun juga mengajak masyarakat di bidang pertanian untuk bersama-sama bertransformasi menjadi pertanian presisi dan pertanian digital di era teknologi ini.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="h-100">
                                        <div class="card-body">
                                    <h4>Pendanaan</h4>
                                    2016 – Hibah Bersaing Dikti <br />
                                    2017 – LPPM UKDW<br />
                                    2018 – LPPM UKDW<br />
                                    2019 – PTUPT Dikti 227/SP2H/LT/DRPM/2019<br />
                                    2020 – PTUPT Dikti 227/SP2H/AMD/LT/DRPM/2020<br />
                                    2021 – PTUPT Dikti SP DIPA042.06.1.401516/2021<br />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="h-100">
                                        <div class="card-body">
                                            <h4>Visi Misi</h4>
                                            <br/>
                                            <h5>Visi</h5>
                                            Menjadi tim penelitian yang unggul dan terpercaya di kawasan nasional untuk menghasilkan luaran yang bertanggung-jawab dalam pengembangan ilmu pengetahuan dan Teknologi Informasi khususnya di bidang pertanian.
                                            <br/><br/>
                                            <h5>Misi</h5>
                                            <ol>
                                                <li>Menyelenggarakan penelitian di bidang ilmu pengetahuan, pertanian dan Teknologi Informasi dengan pendekatan.</li>
                                                <li>Melakukan riset pengembangan ilmu pengetahuan, pertanian dan Teknologi Informasi secara inovatif, aplikatif dan berwawasan lingkungan.</li>
                                                <li>Melakukan pengabdian kepada masyarakat di bidang Teknologi Informasi yang kontekstual dan partisipatoris.</li>
                                                <li>Membangun Teknologi Informasi di bidang pertanian yang unggul dan kompetitif.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="h-100">
                                        <div class="card-body">
                                    <h4>Publikasi</h4>
                                    <br/>
                                    <h5>2020</h5>
                                    <li>Santoso, H. B., Chrismanto, A. R., Wibowo, A., & Delima, R. (2020). Kajian dan Rekomendasi Sistem Pemetaan Lahan Pertanian. ULTIMA Infosys, XI(1).<a href="http://prosiding.senadi.upy.ac.id/index.php/senadi/article/view/129/121" target="_blank">(Preprint)</a></li>
                                    <li>Chrismanto, A. R., Wibowo, A., Santoso, H. B., & Delima, R. (2020). Studi Kelayakan Penerapan Web Mapping Sistem Menggunakan Metode TELOS Studi Kasus: Kelompok Tani Harjo dan Rahayu. Seminar Nasional Dinamika Informatika (SENADI). 4. Yogyakarta: Prodi Informatika, Universitas PGRI Yogyakarta.<a href="http://prosiding.senadi.upy.ac.id/index.php/senadi/article/view/129/121" target="_blank">(Preprint)</a></li>
                                    <br/><br/>
                                        <h5>2019</h5>
                                    <li>Purwadi, J., Delima, R., Wibowo, A., Toding, N., & Santoso, H. (2019). System Usability Scale for Usability Testing of Agriculture E-Commerce Website. Researchers World, 43-57.<a href="http://docplayer.net/171402455-System-usability-scale-for-usability-testing-of-agriculture-e-commerce-website.html" target="_blank">(Preprint)</a></li>
                                    <li>Wibowo, A., Santoso, H. B., Chrismanto, A. R., & Delima, R. (2019, November 29). Mapping and Grouping of Farm Land with Graham Scan Algorithm on Convex Hull Method. International Conference on Sustainable Engineering and Creative Computing.<a href="https://ieeexplore.ieee.org/document/8907143" target="_blank">(Preprint)</a></li>
                                    <li>Wibowo, A., Santoso, H., Delima, R., & Chrismanto, A. (2019). Pengujian Usabilitas Portal Dutatani menggunakan Metode Webqual dan Importance Perfomance Analysis (IPA). Seminar Nasional Saind dan Teknologi (SNST) (pp. 24-35). Semarang: Universitas Wahid Hasyim Semarang.<a href="http://download.garuda.ristekdikti.go.id/article.php?article=1150233&val=5634&title=PENGUJIAN%20USABILITAS%20PORTAL%20DUTATANI%20MENGGUNAKAN%20METODE%20WEBQUAL%20DAN%20IMPORTANCE%20PERFORMANCE%20ANALYSIS%20IPA" target="_blank">(Preprint)</a></li>
                                    <br/><br/>
                                    <h5>2018</h5>
                                    <li>Delima, R., Santoso, H. B., Aditya, G. H., Purwadi, J., & Wibowo, A. (2018). Development of Sales Modules for Agricultural E-Commerce Using Dynamic Syatem Development Method. International Journal of New Media Technology (IJNMT), 95-103.<a href="https://garuda.ristekbrin.go.id/documents/detail/936588" target="_blank">(Preprint)</a></li>

                                    <li>Delima, R., Santoso, H. B., Andriyanto, N., & Wibowo, A. (2018). Development of Purchasing Module for Agriculture E-Commerce using Dynamic System Development. International Journal of Advanced Computer Science and Application, 86-96.<a href="https://thesai.org/Publications/ViewPaper?Volume=9&Issue=10&Code=IJACSA&SerialNo=12" target="_blank">(Preprint)</a></li>    

                                    <li>Santoso, H., Delima, R., Listyaningsih, E., & Wibowo, A. (2018). Usability Testing for Crop and Farmer Activity Information System. International Journal of Advanced Computer Science and Applications (IJACSA), 147-158.<a href="https://thesai.org/Publications/ViewPaper?Volume=9&Issue=11&Code=IJACSA&SerialNo=22" target="_blank">(Preprint)</a></li>
                                    
                                    <br/><br/>
                                    <h5>2017</h5>
                                    <li>Wibowo, A. (2017). Rancang Bangun Sistem Informasi Pelatihan dan Pelayanan untuk Pertanian. Jurnal Informatika dan Sistem Informasi (JUISI), 57-67.<a href="https://journal.uc.ac.id/index.php/JUISI/article/view/494" target="_blank">(Preprint)</a></li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-4">
                                    <h4>Tim Kerja</h4>
                                </div>
                                <div class="col-lg-3">
                                    <div class="team-member">
                                    <img
                                        class="mx-auto rounded-circle"
                                        src="{{asset('tim/antonius Rachmat.jpg')}}"
                                        alt=""
                                    />
                                    <h5>Antonius Rachmat<br /> Chrismanto, S.Kom., M.Cs.</h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="team-member">
                                    <img
                                        class="mx-auto rounded-circle"
                                        src="{{asset('tim/Argo Wibowo.jpg')}}"
                                        alt=""
                                    />
                                    <h5>Argo Wibowo, S.T., M.T.</h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="team-member">
                                    <img
                                        class="mx-auto rounded-circle"
                                        src="{{asset('tim/Halim Budi.png')}}"
                                        alt=""
                                    />
                                    <h5>Halim Budi Santoso, S.Kom.,<br /> MT., MBA.</h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="team-member">
                                    <img
                                        class="mx-auto rounded-circle"
                                        src="{{asset('tim/Joko Purwadi.jpg')}}"
                                        alt=""
                                    />
                                    <h5>Joko Purwadi, S.Kom.,<br /> M.Kom.</h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="team-member">
                                    <img
                                        class="mx-auto rounded-circle"
                                        src="{{asset('tim/Lukas Chrisantyo.jpg')}}"
                                        alt=""
                                    />
                                    <h5>Lukas Chrisantyo A A.,<br /> S.Kom., M.Eng.</h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="team-member">
                                    <img
                                        class="mx-auto rounded-circle"
                                        src="{{asset('tim/Maria Nila.jpeg')}}"
                                        alt=""
                                    />
                                    <h5>Maria Nila Anggia Rini S.T.,<br /> M.T.I</h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="team-member">
                                    <img
                                        class="mx-auto rounded-circle"
                                        src="{{asset('tim/Rosa Delima.jpg')}}"
                                        alt=""
                                    />
                                    <h5>Rosa Delima, S.Kom.,<br /> M.Kom.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

@endsection