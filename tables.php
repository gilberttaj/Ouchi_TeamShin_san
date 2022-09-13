<?php
require('app/functions.php');
includeWithVariables('includes/header.php', ['pageTitle' => 'tables', 'headCSS' => ['page/tables.css']]) ?>

<section class="appointmentUpdates">
    <div class="appointmentUpdates__inner">
        <div class="left appointment">
            <div class="title">
                <span></span>
                <span class="title_color">本日の診療</span>
                <!-- <div class="floating date"> -->
                    <span>6月27日（月）</span>
                <!-- </div> -->
                <div class='c-hamburger'></div>
            </div>
            <div class="receptionTime">
                <div class="left">
                    <div class="textFrame">
                        <p>受付時間</p>
                    </div>
                </div>
                <div class="right">
                    <div class="textContainer">
                        <span>初診</span>
                        <span>午前8:30~11:30</span>
                        <span>午後13:30~16:30</span>
                    </div>
                    <div class="divider"></div>
                    <div class="textContainer">
                        <span>初診</span>
                        <span>午前8:30~11:30</span>
                        <span>午後13:30~16:30</span>
                    </div>
                </div>
            </div>
            <div class="content">
            <table>
                <tr class="head">
                    <th>初診</th>
                    <th>受付</th>
                    <th></th>
                    <th>担当医</th>
                </tr>
                <tr>
                    <th rowspan="2"><span class="arrow">内科</span></th>
                    <td>午前</td>
                    <td class=''><input type="radio"/></td>
                    <td>大内英樹</td>
                    
                    
                </tr>
                <tr>
                    <td>午後</td>
                    <td><input type="radio"/></td>
                    <td>大内英樹</td>
                </tr>

                <tr>
                    <th rowspan="2"><span class="arrow">内科</span></th>
                    <td>午前</td>
                    <td><input type="radio"/></td>
                    <td>大内英樹</td>
                    
                    
                </tr>
                <tr>
                    <td>午後</td>
                    <td><input type="radio"/></td>
                    <td>大内英樹</td>
                </tr>
            </table>
            </div>
        </div>
        <div class="right updates">
            <ul class="p-tabList">
                <li class="p-tabLink">
                <button
                    class="c-button c-button--s c-button--accent--w c-button--nobullet c-button--shadow active">すべて</button>
                </li>
                <li class="p-tabLink">
                <button
                    class="c-button c-button--s c-button--accent--w c-button--nobullet c-button--shadow active">すべて</button>
                </li>
                <li class="p-tabLink">
                <button
                    class="c-button c-button--s c-button--accent--w c-button--nobullet c-button--shadow active">すべて</button>
                </li>
                <li class="p-tabLink">
                <button
                    class="c-button c-button--s c-button--accent--w c-button--nobullet c-button--shadow active">すべて</button>
                </li>
                <li class="p-tabLink">
                <button
                    class="c-button c-button--s c-button--accent--w c-button--nobullet c-button--shadow active">すべて</button>
                </li>
            </ul>
            <ul class="p-tabContentList">
                <li class="p-tabContentDisplay">
                    <ul class="all">
                        <li>
                            <p class="date">2020.07.30</p>
                            <p class="text">この文章はダミーのコピーを仮に流し込んでいますコピーができ次第差し替えますので今しばらくお待ちください</p>
                        </li>
                    </ul>
                </li>
                <li class="p-tabContentDisplay">
                    <ul class="all">
                        <li>
                            <p class="date">2020.07.30</p>
                            <p class="text">この文章はダミーのコピーを仮に流し込んでいますコピーができ次第差し替えますので今しばらくお待ちください</p>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</section>
<?php
includeWithVariables('includes/footer.php', ['footerJS' => ['all.js']]) ?>