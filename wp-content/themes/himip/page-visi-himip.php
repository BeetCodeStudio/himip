<?php get_header(); ?>

    <!-- Main Content -->
    <div class="bg-blue-50 text-center py-20">
        <h2 class="title capitalize py-3">profil HIMIP Candradimuka</h2>
        <p class="petunjuk capitalize">visi misi HIMIP Candradimuka</p>
    </div>
    <div class="container flex flex-col space-y-3 py-10">
        <!-- sejarah jurusan -->
        <div class="pb-10">
            <div class="title-container">
                <h2 class="subtitle text-center">visi dan misi</h2>
                <p class="petunjuk text-center capitalize">Visi dan misi HIMIP Candradimuka</p>
            </div>
             <!-- visi misi jurusan end -->
             <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="bg-slate-100 flex border-2 border-gray-300 rounded-md">
                        <div class="p-5 space-y-2">
                            <h2 class="subtitle capitalize text-left">Visi</h2>
                            <hr>
                            <ul class="space-y-2">
                                <li>
                                    Menjadikan HIMIP sebagai wadah pelopor dan kreator serta mengaktualisasikan diri
                                    dengan mengembangkan toleransi, kreatifitas, serta terwujudnya eksistensi himip yang
                                    responsif dan inovatif.
                                </li>

                            </ul>

                        </div>
                    </div>
                    <div class="bg-slate-100 flex border-2 border-gray-300 rounded-md">
                        <div class="p-5 space-y-2">
                            <h2 class="subtitle capitalize text-left">Misi </h2>
                            <hr>
                            <ul class="list-decimal list-outside text-justify space-y-2 px-5">
                                <li>Menguatkan mental mahasiswa Ilmu Pemerintahan agar lebih aktif dalam membela
                                    kebenaran sebagai agent of change dan agent of control
                                </li>
                                <li>
                                    Aktif dan tanggap dalam memberikan pelayanan kebutuhan mahasiswa

                                </li>
                                <li>
                                    Terdepan dalam mengawasi isu dan responsif terhadap dinamika sosial politik
                                </li>

                            </ul>
                          
                        </div>
                    </div>
                </div>
        </div>
        <!-- sejarah jurusan end -->

        <!-- Updated -->
    <section class="text-gray-600 body-font">
        <div class="w-full h-full flex justify-center items-center">
            <img class="w-60 h-60 bg-center bg-auto" src="<?php echo  bloginfo('template_directory') ?>/img/candradimuka.png">
        </div>
        <div class="flex flex-wrap w-full mb-10 flex-col items-center text-center">
            <h1 class="subtitle text-center">Filosofi logo
            </h1>
 
            <p class="lg:w-1/2 w-full leading-relaxed text-black text-center ">Logo adalah simbol dari suatu organisasi yang
                mencerminkan makna atau pesan yang ingin disampaikan dan penggambaran identitas diri dari suatu
                organisasi. Pengurus Himpunan Mahasiswa Ilmu Pemerintahan periode 2021/2022 menghadirkan sebuah logo
                dengan tiga bagian utama yang memiliki filosofi sebagai berikut :</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 container px-5 pt-5 pb-16 mx-auto text-center">
            <div class="flex flex-col p-6 
            bg-slate-100 flex border-2 border-gray-300 rounded-md">
               
                    <h2 class="text-2xl font-poppins font-bold text-blue-800 capitalize text-center mb-2">Atap</h2>
                    <hr>

                <p class="flex-1 leading-relaxed text-base mt-2">Melambangkan wadah untuk mahasiswa Ilmu Pemerintahan
                    menempah dan mengasah diri pribadi agar memiliki karakter.</p>
            </div>
            <div class="flex flex-col p-6 
            bg-slate-100 flex border-2 border-gray-300 rounded-md">
               
                    <h2 class="text-2xl font-poppins font-bold text-blue-800 capitalize text-center mb-2">Garis Setengah Segitiga</h2>
                    <hr>
                <p class="flex-1 leading-relaxed text-base mt-2">Melambangkan sifat kuat, terlatih, dan tangkas.</p>
            </div>
            <div class="flex flex-col p-6 
            bg-slate-100 flex border-2 border-gray-300 rounded-md">
                
                    <h2 class="text-2xl font-poppins font-bold text-blue-800 capitalize text-center mb-2">Tangan Mengepal</h2>
                    <hr>
                <p class="flex-1 leading-relaxed text-base mt-2">Melambangkan pendirian yang teguh serta melambangkan
                    perjuangan dan pergerakan.
                </p>
            </div>
        </div>
    </section>
    <!-- Updated End-->
    </div>

    <!-- Main Content End -->
    <script>
        w3.includeHTML();
    </script>

    <!-- Footer -->
    <div w3-include-html="footer.html"></div>
    <!-- Footer End -->


</body>

</html>