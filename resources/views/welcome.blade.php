<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <title>SHIHORI TSUJI</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600&family=Montserrat:wght@200;300;400&family=Noto+Sans+JP:wght@100;300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">        
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        
        <div class="wrapper">
            <div class="header">
            </div>

            <div class="logo_area">
                <h1 class="logo">SHIHORI TSUJI</h1>
            </div>

            <div class="bg_area">
            </div>

            <div class="scroll_icon">
                <h2 class="scroll_text">SCROLL</h2>
                <span class="lnr lnr-chevron-down"></span>
                
            </div>

            <div class="content" id="contentWrapper">
                <section class="about ma-2">
                <div class="section_title">
                    <h2 class="">ABOUT ME</h2>
                    </div>
                    <div class="about_flex">
                        <div class="about_left">
                            <div class="bio_table">
                                <div class="bio">
                                    <span class="bio_year">1991</span>
                                    <span class="bio_text">BORN IN FUKUOKA, JAPAN</span>
                                </div>
                                <div class="bio">
                                    <span class="bio_year">2014</span>
                                    <span class="bio_text">GRADUATED KITAKYUSHU UNIV.</span>
                                </div>
                                <div class="bio">
                                    <span class="bio_year">2014</span>
                                    <span class="bio_text">ZOZO inc.</span>
                                </div>
                                <div class="bio">
                                    <span class="bio_year">2019</span>
                                    <span class="bio_text">ENTERED G'S ACADEMY TOKYO</span>
                                </div>
                                <div class="bio">
                                    <span class="bio_year">2020</span>
                                    <span class="bio_text">GRADUATED G'S ACADEMY TOKYO</span>
                                </div>
                            </div>
                        </div>

                        <div class="about_right">   
                            <div class="about_text">
                                <h3>ツジ シホリ</h3>
                                <span>福岡県生まれ。北九州市立大学法学部卒業。<br/>ファッションECのモール運営会社にて、商品撮影や新規サービスの企画・運営などを経験。その後、自分のアイディアをカタチにしたいと思い、プログラミングを学ぶ。現在、ファッション系のサービスを開発中！</span>
                            </div>
                        </div>
                    </div>

                    <div class="sf_about_left">
                        <div class="bio_table">
                            <div class="bio">
                                <span class="bio_year">1991</span>
                                <span class="bio_text">BORN IN FUKUOKA, JAPAN</span>
                            </div>
                            <div class="bio">
                                <span class="bio_year">2014</span>
                                <span class="bio_text">GRADUATED KITAKYUSHU UNIV.</span>
                            </div>
                            <div class="bio">
                                <span class="bio_year">2014</span>
                                <span class="bio_text">ZOZO inc.</span>
                            </div>
                            <div class="bio">
                                <span class="bio_year">2019</span>
                                <span class="bio_text">ENTERED G'S ACADEMY TOKYO</span>
                            </div>
                            <div class="bio">
                                <span class="bio_year">2020</span>
                                <span class="bio_text">GRADUATED G'S ACADEMY TOKYO</span>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="skill ma-2">
                    <div class="section_title">
                        <h2>SKILL</h2>
                        <p>ー できること ー</p>
                    </div>
                    <div class="skill_tabel">
                        <div class="skill_content">
                            <h2 class="skill_title">デザイン</h2>
                            <p class="skill_caption">DESIGN</p>
                            <span class="lnr lnr-laptop-phone"></span>
                            <p class="skill_text">ヒアリングに基づいて、デザインを作成いたします。人の使うものであることを常に意識して、使う人が迷わない、目的を達成できるデザインを心がけています。インターフェースの重要性が増す中でデザインの役割を理解し、そのプランに最適な提案をさせていただきます。</p>
                        </div>
                        <div class="skill_content">
                            <h2 class="skill_title">コーディング</h2>
                            <p class="skill_caption">CODING</p>
                            <span class="lnr lnr-keyboard"></span>
                            <p class="skill_text">デザインの意図を理解し、動きや効果を適切に使用することでWebサイトの仕上がりは大きく変わります。スマートフォンサイト、ワードプレスを使用した更新性の高いサイト、Javascriptを使用した動きのあるサイトなど、様々なサイトのコーディングを行っております。</p>
                        </div>
                        <div class="skill_content">
                            <h2 class="skill_title">その他</h2>
                            <p class="skill_caption">OTHER</p>
                            <span class="lnr lnr-camera"></span>
                            <p class="skill_text">商品撮影・レタッチ等も可能です。</p>
                        </div>

                    </div>


                </section>
                <section class="portfolio ma-2">
                    <div  class="section_title">
                        <h2>PORTFOLIO</h2>
                        <p>ー これまで作成したプロダクト ー</p>
                    </div>
                    <div class="portfolio_table">
                        <div class="portfolio_content portfolio_1">
                            <div class="portfolio_img">
                                <img src="{{asset('img/otenkil.png')}}">
                            </div>
                            <div class="portfolio_text_wrap">
                                <h2 class="portfolio_title">otenkil</h2>
                                <p class="portfolio_text mb-2">現在地の気象状況に応じた参考のコーディネート画像やおすすめのアイテムを提示してくれるWebアプリケーション。現在地以外にも地点を指定しておすすめのコーディネートを閲覧することが可能です。</p>
                                <p class="portfolio_text">使用した技術</p>
                                <p class="portfolio_text">HTML / CSS / JavaScript / OpenWeatherMapAPI</p>
                            </div>
                        </div>
                        <div class="portfolio_content portfolio_2">
                            <div class="portfolio_img">
                                <img src="{{asset('img/hairkarte.png')}}">
                            </div>
                            <div class="portfolio_text_wrap">
                                <h2 class="portfolio_title">hair karte</h2>
                                <p class="portfolio_text mb-2">自分の髪型や美容院での施術内容を記録することができるWebアプリケーション。一般ユーザーと美容院スタッフのマルチログインやQRコードでプロフィールを読み取る機能などを実装しました。</p>
                                <p class="portfolio_text">使用した技術</p>
                                <p class="portfolio_text">HTML / CSS / PHP</p>
                            </div>
                        </div>
                        <div class="portfolio_content portfolio_3">
                            <div class="portfolio_img">
                                <img src="{{asset('img/chumugu.png')}}">
                            </div>
                            <div class="portfolio_text_wrap">
                                <h2 class="portfolio_title">chumugu</h2>
                                <p class="portfolio_text mb-2">自分のアイディアを文章や絵、画像で表現し、作品を繋いでいくエンターテイメントクリエイションツール。Fabric.jsを使用したお絵かき機能や作品を並び変える機能を担当しました。</p>
                                <p class="portfolio_text">使用した技術</p>
                                <p class="portfolio_text">HTML / CSS / JavaScript / Fabric.js /Laravel</p>
                            </div>
                        </div>
                        <div class="portfolio_content portfolio_4">
                            <div class="portfolio_img">
                                <img src="{{asset('img/homeyou.png')}}">
                            </div>
                            <div class="portfolio_text_wrap">
                                <h2 class="portfolio_title">Home You</h2>
                                <p class="portfolio_text  mb-2">タレントとファンを繋ぐコミニュケーションアプリ。タレントの活動を記録したり、ファンからのタレント本人へのレビューを投稿することができます。タレントをアンチから守るためにNGワードの登録などの機能もあります。</p>
                                <p class="portfolio_text">使用した技術</p>
                                <p class="portfolio_text">HTML / CSS / Vue.js / Laravel / AWS</p>
                            </div>
                        </div>
                        <div class="portfolio_content portfolio_5">
                            <div class="portfolio_img">
                                <img src="{{asset('img/clue.png')}}">
                            </div>
                            <div class="portfolio_text_wrap">
                                <h2 class="portfolio_title">Clue</h2>
                                <p class="portfolio_text  mb-2">ファッションに関する疑問を投稿するWebアプリケーション。今後はアプリ内でファッションアイテムのおすすめができるように商品検索機能を実装予定です。</p>
                                <p class="portfolio_text">使用した技術</p>
                                <p class="portfolio_text">HTML / SCSS / Vue.js / Laravel</p>
                            </div>
                        </div>
                        <!-- <div class="portfolio_content portfolio_5">
                            <div class="portfolio_img">
                                <img src="{{asset('img/for_m_logo.png')}}">
                            </div>
                            <div class="portfolio_text_wrap">
                                <h2 class="portfolio_title">LPやポートフォリオサイトの作成</h2>
                                <p class="portfolio_text  mb-2">サービスのLPや個人のポートフォリオの作成実績もあります。お問い合わせメールの自動送信機能の実装やレスポンシブ対応も可能です。</p>
                                <p class="portfolio_text">使用した技術</p>
                                <p class="portfolio_text">HTML / SCSS / Laravel</p>
                            </div>
                        </div> -->
                    </div>
                </section>
                <section class="contact ma-2">
                    <div  class="section_title">
                        <h2>CONTACT</h2>
                        <p>ー お問い合わせはこちら ー</p>
                    </div>
                </section>
            </div>
            <!-- <div class="nav_bar">
                <ul>
                <li>About</li><span>／</span>
                <li>Concept</li><span>／</span>
                <li>Works</li><span>／</span>
                <li>Contact</li>
                </ul>
            </div> -->
        </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
    <script src="{{ asset('js/main.js')}}"></script>  
    </body>
</html>
