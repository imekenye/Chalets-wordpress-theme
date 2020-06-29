<article id="post-<?php the_ID();?>" <?php post_class();?>>
    <section class="singleWrapper">
        <div class="singleWrapper__nav">
            <!-- <img src="/images/svg/leftArrow.svg" alt="" /> -->
            <a href="">Back</a>
        </div>
        <div class="singleWrapper__overview">
            <div class="singleWrapper__overview-images">
                <div class="mainImage"><img src="<?php the_field('chalet_featured_image')?>" alt=""></div>
                <div class="gallery__images">
                    <div class="gallery__images-1"><img src="<?php the_field('chalet_featured_image_one')?>" alt="">
                    </div>
                    <div class="gallery__images-2"><img src="<?php the_field('chalet_featured_image_two')?>" alt="">
                    </div>
                    <div class="gallery__images-3"><img src="<?php the_field('chalet_featured_image_four')?>" alt="">
                    </div>
                </div>
            </div>
            <div class="singleWrapper__overview-details">
                <div class="specs">
                    <div class="price">
                        <div class="price__icon">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M33.8153 19.3549H39.3547C39.7115 19.3549 39.9998 19.644 39.9998 20.0001V36.7742C39.9998 37.1303 39.7115 37.4194 39.3547 37.4194H15.7515L13.3593 39.811C13.2335 39.9368 13.0683 40 12.9032 40C12.738 40 12.5729 39.9368 12.447 39.811L10.0554 37.4194H0.645159C0.288386 37.4194 0 37.1303 0 36.7742V20.0001C0 19.644 0.288386 19.3549 0.645159 19.3549H7.47481L26.6405 0.189193C26.8928 -0.0630643 27.3005 -0.0630643 27.5528 0.189193L39.8108 12.4472C40.0631 12.6995 40.0631 13.1072 39.8108 13.3595L33.8153 19.3549ZM38.4424 12.9033L27.0967 1.55757L9.29867 19.3549H12.9341C13.0825 17.7033 13.7948 16.1691 14.9812 14.982C17.749 12.215 22.2515 12.2156 25.018 14.982C26.2051 16.1691 26.9173 17.7033 27.0651 19.3549H31.9908L38.4424 12.9033ZM16.9206 19.3549C16.8328 18.9356 16.9503 18.4872 17.2625 18.1756L18.4425 19.3549H16.9206ZM23.6496 19.0878C23.7335 19.1711 23.8096 19.2614 23.8805 19.3549V19.3562H25.767C25.6238 18.0498 25.0476 16.8388 24.1051 15.8956C21.8406 13.6324 18.1573 13.6317 15.8928 15.8956C14.9503 16.8388 14.3748 18.0498 14.2309 19.3562H15.6122C15.5316 18.5994 15.7825 17.8311 16.3496 17.264L15.8935 16.8078L16.8057 15.8956L17.2619 16.3517L17.2625 16.3511C17.7496 15.864 18.398 15.5956 19.087 15.5956C19.776 15.5956 20.4238 15.864 20.9115 16.3511L19.9993 17.2633C19.5115 16.7762 18.6625 16.7762 18.1748 17.2633L19.9999 19.0878C21.0064 18.0814 22.6425 18.082 23.6496 19.0878ZM12.9032 38.4426L11.88 37.4194H13.9264L12.9032 38.4426ZM1.29032 36.129H38.7095V20.6452H1.29032V36.129Z"
                                    fill="#EDCB9B" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.6667 30.641H17.4359C17.4359 32.0551 18.5399 33.2051 19.8974 33.2051V33.8461H21.1282V33.2051C22.4857 33.2051 23.5897 32.0551 23.5897 30.641C23.5897 29.2269 22.4857 28.0769 21.1282 28.0769V25.5128C21.807 25.5128 22.359 26.0878 22.359 26.7949H23.5897C23.5897 25.3808 22.4857 24.2308 21.1282 24.2308V23.5897H19.8974V24.2308C18.5399 24.2308 17.4359 25.3808 17.4359 26.7949C17.4359 28.209 18.5399 29.359 19.8974 29.359V31.9231C19.2187 31.9231 18.6667 31.3481 18.6667 30.641ZM18.6667 26.7949C18.6667 26.0878 19.2187 25.5128 19.8974 25.5128V28.0769C19.2187 28.0769 18.6667 27.5019 18.6667 26.7949ZM22.359 30.641C22.359 29.934 21.807 29.359 21.1282 29.359V31.9231C21.807 31.9231 22.359 31.3481 22.359 30.641Z"
                                    fill="#EDCB9B" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M27.6923 28.718C27.6923 32.6765 24.4713 35.8974 20.5128 35.8974C16.5543 35.8974 13.3333 32.6765 13.3333 28.718C13.3333 24.7594 16.5543 21.5385 20.5128 21.5385C24.4713 21.5385 27.6923 24.7594 27.6923 28.718ZM26.3869 28.718C26.3869 25.4794 23.7521 22.8438 20.5128 22.8438C17.2736 22.8438 14.6387 25.4794 14.6387 28.718C14.6387 31.9566 17.2736 34.5921 20.5128 34.5921C23.7521 34.5921 26.3869 31.9566 26.3869 28.718Z"
                                    fill="#EDCB9B" />
                                <path
                                    d="M36.9231 34.2564V23.1795C36.9231 22.8398 36.6409 22.5641 36.2919 22.5641H28.7179V23.7949H35.6607V33.641H28.7179V34.8718H36.2919C36.6409 34.8718 36.9231 34.5961 36.9231 34.2564Z"
                                    fill="#EDCB9B" />
                                <path
                                    d="M3.70808 34.8718H11.282V33.641H4.33925V23.7949H11.282V22.5641H3.70808C3.35905 22.5641 3.07692 22.8398 3.07692 23.1795V34.2564C3.07692 34.5961 3.35905 34.8718 3.70808 34.8718Z"
                                    fill="#EDCB9B" />
                                <path d="M29.7436 30.7692H30.7692V31.7949H29.7436V30.7692Z" fill="#EDCB9B" />
                                <path d="M31.7949 30.7692H32.8205V31.7949H31.7949V30.7692Z" fill="#EDCB9B" />
                                <path d="M29.7436 24.6154H30.7692V25.641H29.7436V24.6154Z" fill="#EDCB9B" />
                                <path d="M31.7949 24.6154H32.8205V25.641H31.7949V24.6154Z" fill="#EDCB9B" />
                                <path
                                    d="M27.2973 5.60831L34.3849 12.7L29.512 17.5752L30.3978 18.4615L35.7137 13.1431C35.9587 12.898 35.9587 12.5019 35.7137 12.2568L27.7402 4.27886C27.5053 4.04381 27.0893 4.04381 26.8543 4.27886L21.5385 9.59729L22.4243 10.4836L27.2973 5.60831Z"
                                    fill="#EDCB9B" />
                                <path
                                    d="M27.7245 15.9224L28.6367 15.0102L29.549 15.9224L28.6367 16.8347L27.7245 15.9224Z"
                                    fill="#EDCB9B" />
                                <path
                                    d="M29.5485 14.0976L30.4608 13.1854L31.373 14.0976L30.4608 15.0099L29.5485 14.0976Z"
                                    fill="#EDCB9B" />
                                <path d="M23.1631 11.361L24.0754 10.4487L24.9876 11.361L24.0754 12.2732L23.1631 11.361Z"
                                    fill="#EDCB9B" />
                                <path
                                    d="M24.9872 9.53613L25.8994 8.62387L26.8117 9.53613L25.8994 10.4484L24.9872 9.53613Z"
                                    fill="#EDCB9B" />
                                <path d="M7.17949 24.6154H8.20513V25.641H7.17949V24.6154Z" fill="#EDCB9B" />
                                <path d="M9.23077 24.6154H10.2564V25.641H9.23077V24.6154Z" fill="#EDCB9B" />
                                <path d="M7.17949 30.7692H8.20513V31.7949H7.17949V30.7692Z" fill="#EDCB9B" />
                                <path d="M9.23077 30.7692H10.2564V31.7949H9.23077V30.7692Z" fill="#EDCB9B" />
                            </svg>

                        </div>
                        <div class="price__text">$ <?php the_field('price')?></div>
                    </div>
                    <div class="baths">
                        <div class="baths__icon">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M38.2031 17.7346H38.125V4.92239C38.1224 2.20478 35.9199 0.00241182 33.2022 0H30.1562C27.4392 0.0029279 25.2373 2.20476 25.2344 4.92176V7.5567H24.5641C24.3983 7.55686 24.2415 7.63199 24.1375 7.76107L23.75 8.24544C22.8992 9.30916 22.3862 10.6032 22.2772 11.961C21.349 12.0418 20.6362 12.818 20.6347 13.7497V14.8575C20.6346 15.0025 20.6922 15.1417 20.7948 15.2443C20.8973 15.3468 21.0365 15.4044 21.1816 15.4043H32.8791C33.0241 15.4044 33.1633 15.3468 33.2659 15.2443C33.3684 15.1417 33.426 15.0025 33.4259 14.8575V13.7497C33.4246 12.818 32.7119 12.0416 31.7838 11.9607C31.6752 10.6033 31.1628 9.30943 30.3125 8.24575L29.9247 7.76201C29.8209 7.63262 29.664 7.55734 29.4981 7.55733H28.8272V4.92239C28.8275 4.18858 29.4224 3.59384 30.1562 3.59367H33.2031C33.9363 3.59436 34.5306 4.18856 34.5312 4.92176V17.734H17.9003V17.7143C17.901 16.548 17.1861 15.5006 16.0997 15.0763C15.0133 14.652 13.7778 14.9375 12.9878 15.7956C12.5358 15.5064 12.0046 15.3661 11.4688 15.3943C10.9226 13.8526 9.46472 12.822 7.82912 12.8214C6.19352 12.8207 4.73481 13.8502 4.1875 15.3915C2.88073 15.4292 1.80848 16.4379 1.69125 17.7399C0.742765 17.7961 0.00180765 18.5807 0 19.5308V20.4683C0.00103347 21.4602 0.804917 22.2641 1.79688 22.2651H1.875V28.515C1.87742 31.5676 3.60526 34.3565 6.3375 35.7179L5.76687 37.0645C5.31219 38.1385 5.81426 39.3777 6.88828 39.8324C7.9623 40.287 9.20156 39.785 9.65625 38.711L10.5656 36.5617H29.4344L30.3444 38.7107C30.808 39.7705 32.038 40.26 33.1032 39.8087C34.1683 39.3574 34.6721 38.1332 34.2331 37.0629L33.6625 35.7179C36.3945 34.3566 38.1223 31.568 38.125 28.5156V22.2657H38.2031C39.1953 22.2647 39.9993 21.4605 40 20.4683V19.5308C39.9986 18.5391 39.1948 17.7356 38.2031 17.7346ZM32.3322 13.7497V14.3122H21.7284V13.7497C21.729 13.3616 22.0435 13.0471 22.4316 13.0466H31.6291C32.0172 13.0471 32.3317 13.3616 32.3322 13.7497ZM30.6875 11.9532C30.5794 10.8473 30.152 9.79686 29.4572 8.9298L29.2341 8.65105H24.8278L24.6038 8.93011C23.9096 9.79727 23.4827 10.8476 23.375 11.9532H30.6875ZM33.2022 2.49994H30.1562C28.8193 2.50149 27.7359 3.58487 27.7344 4.92176V7.5567H26.3281V4.92239C26.33 2.8089 28.0427 1.09596 30.1562 1.09372H33.2031C35.3164 1.09596 37.029 2.80852 37.0312 4.92176V17.734H35.625V4.92176C35.6234 3.58451 34.5395 2.50098 33.2022 2.49994ZM4.50156 16.5065C4.42105 16.4925 4.33953 16.4851 4.25781 16.4843C3.52866 16.4852 2.90775 17.0147 2.79187 17.7346H16.8075V17.7149C16.8082 16.9264 16.2777 16.2364 15.5156 16.0343C14.7534 15.8322 13.9507 16.1688 13.5606 16.854C13.4745 17.0051 13.3217 17.1063 13.1489 17.1264C12.9761 17.1465 12.8041 17.0832 12.6856 16.9559C12.3157 16.548 11.7461 16.3858 11.2169 16.5377C11.0714 16.5768 10.9163 16.5541 10.7881 16.4751C10.6599 16.396 10.57 16.2675 10.5397 16.1199C10.2746 14.8411 9.15206 13.9212 7.846 13.9127C6.53994 13.9042 5.40546 14.8093 5.12375 16.0846C5.06162 16.3684 4.78817 16.5538 4.50156 16.5065ZM8.64844 38.2844C8.48922 38.661 8.11979 38.9054 7.71094 38.9047C7.3695 38.9051 7.05067 38.7341 6.86203 38.4495C6.67339 38.165 6.64012 37.8047 6.77344 37.4904L7.34563 36.1398C7.35978 36.1447 7.37421 36.1488 7.38866 36.153C7.40101 36.1566 7.41338 36.1601 7.42563 36.1642C7.53031 36.1985 7.63625 36.2301 7.74312 36.2601C7.76162 36.2653 7.78006 36.2707 7.79849 36.2761L7.79874 36.2762L7.799 36.2762L7.79924 36.2763C7.82603 36.2841 7.8528 36.292 7.87969 36.2992C8.02625 36.3376 8.17406 36.3723 8.32375 36.4023C8.34881 36.4074 8.37397 36.4117 8.39911 36.4161C8.41724 36.4192 8.43537 36.4223 8.45344 36.4257C8.56563 36.4464 8.67813 36.4654 8.79187 36.4814C8.84719 36.4892 8.9025 36.496 8.95813 36.5026C9.06688 36.5157 9.17625 36.5261 9.28625 36.5339C9.30031 36.5351 9.31437 36.5366 9.32844 36.5382C9.34719 36.5402 9.36594 36.5423 9.38469 36.5435L8.64844 38.2844ZM33.2259 37.4904L32.6538 36.1398C32.6391 36.1448 32.6244 36.149 32.6096 36.1533L32.6094 36.1533C32.5974 36.1568 32.5853 36.1603 32.5731 36.1642C32.4683 36.1981 32.3628 36.2301 32.2566 36.2601C32.2384 36.2652 32.2204 36.2704 32.2023 36.2757C32.1745 36.2837 32.1468 36.2918 32.1188 36.2992C31.9719 36.3379 31.8236 36.3724 31.6741 36.4026C31.6505 36.4075 31.6268 36.4115 31.603 36.4155L31.5663 36.4219L31.5506 36.4248C31.4363 36.446 31.3209 36.4654 31.2047 36.4817C31.1509 36.4892 31.0972 36.4957 31.0434 36.5023C30.9334 36.5154 30.8228 36.5264 30.7116 36.5351C30.6965 36.5363 30.6815 36.5379 30.6665 36.5395C30.6562 36.5406 30.6458 36.5418 30.6355 36.5427C30.6284 36.5434 30.6212 36.544 30.6141 36.5445L31.3509 38.2844C31.5103 38.6609 31.8796 38.9053 32.2884 38.9047C32.6299 38.9051 32.9487 38.7341 33.1373 38.4495C33.326 38.165 33.3593 37.8047 33.2259 37.4904ZM37.0312 28.515C37.0278 31.3434 35.3137 33.8888 32.6941 34.9554C32.5066 35.0323 32.3138 35.102 32.1197 35.1617C32.1147 35.1632 32.1096 35.1647 32.1045 35.1662C32.1003 35.1673 32.0961 35.1685 32.0918 35.1697C32.0791 35.1732 32.0663 35.1767 32.0537 35.1804C31.8566 35.2389 31.6575 35.2898 31.4559 35.3301C31.4455 35.3324 31.4351 35.3342 31.4247 35.3359C31.42 35.3367 31.4153 35.3375 31.4106 35.3384C31.4069 35.339 31.4033 35.3397 31.3997 35.3404C31.1922 35.3804 30.9831 35.4123 30.7719 35.4342C30.7631 35.4342 30.7541 35.4342 30.7453 35.4361C30.5247 35.457 30.3022 35.4673 30.0781 35.4673H9.92188C9.70125 35.4673 9.4825 35.4557 9.26562 35.4361L9.22531 35.4329C9.0175 35.4123 8.81156 35.3808 8.6075 35.3414C8.59819 35.3396 8.58882 35.338 8.57944 35.3365L8.57924 35.3364C8.56697 35.3344 8.55469 35.3323 8.5425 35.3298C8.34281 35.2895 8.145 35.2392 7.94875 35.1811C7.9377 35.1778 7.92665 35.1747 7.91564 35.1716C7.9036 35.1683 7.8916 35.165 7.87969 35.1614C7.68594 35.1017 7.495 35.0323 7.30594 34.9554C4.68647 33.8889 2.97241 31.3438 2.96875 28.5156V22.2657H37.0312V28.515ZM38.2031 21.1714C38.5912 21.1709 38.9057 20.8564 38.9062 20.4683V19.5308C38.9057 19.1427 38.5912 18.8282 38.2031 18.8277H1.79688C1.40876 18.8282 1.09427 19.1427 1.09375 19.5308V20.4683C1.09427 20.8564 1.40876 21.1709 1.79688 21.1714H38.2031Z"
                                    fill="#EDCB9B" />
                            </svg>

                        </div>
                        <div class="baths__text"><?php the_field('no_of_bathrooms')?> Baths</div>
                    </div>
                    <div class="beds">
                        <div class="beds__icon">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.6444 23.2189C12.3111 19.5905 10.1487 16.0374 6.59849 14.9282C6.41123 14.8684 6.20598 14.9126 6.06073 15.0441C5.91548 15.1756 5.85252 15.3741 5.89578 15.5643C5.93904 15.7544 6.08187 15.907 6.27001 15.964C9.29257 16.9089 11.1334 19.9342 10.5653 23.0234L10.5177 23.2806C10.4633 23.5757 10.6605 23.8585 10.9583 23.9126C10.9911 23.9185 11.0243 23.9215 11.0576 23.9216C11.3223 23.9209 11.5488 23.733 11.5959 23.4748L11.6444 23.2189Z"
                                    fill="#EDCB9B" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M39.0483 22.5035C38.2733 21.9016 37.217 21.8112 36.351 22.2725C35.9528 22.4704 35.481 22.4504 35.101 22.2194L27.8189 18.0147L28.2252 17.7806C28.6051 17.5494 29.077 17.5292 29.4752 17.7272C30.39 18.2179 31.5137 18.0864 32.2905 17.3979C33.0674 16.7093 33.3327 15.6096 32.9553 14.6427C32.6068 13.7424 31.7646 13.1287 30.8009 13.0724C30.3816 13.0302 30.01 12.784 29.8077 12.4143L25.392 4.77008C25.1733 4.41055 25.1459 3.96629 25.3189 3.58264C25.7789 2.66122 25.6206 1.55128 24.9213 0.795161C24.2221 0.0390458 23.1278 -0.205399 22.1732 0.181269C21.2648 0.551726 20.6587 1.42108 20.6253 2.40146C20.5972 2.84465 20.3441 3.24259 19.9547 3.45609L4.89835 12.1481C4.5183 12.3787 4.04667 12.3989 3.64832 12.2015C2.73369 11.7115 1.61054 11.8432 0.834112 12.5315C0.0576791 13.2199 -0.207573 14.3191 0.169482 15.2857C0.518005 16.186 1.36016 16.7997 2.32391 16.856C2.74327 16.898 3.11488 17.1443 3.31706 17.5141L7.73093 25.1583C7.95014 25.5182 7.97762 25.9632 7.80436 26.3473C7.34425 27.2686 7.5026 28.3785 8.20201 29.1344C8.90141 29.8903 9.99576 30.1343 10.9501 29.7471C11.6302 29.4686 12.1529 28.9044 12.3785 28.205C15.3046 29.8924 26.7005 36.468 26.8314 36.5436C27.2208 36.7572 27.4738 37.1551 27.5021 37.5983C27.5358 38.5786 28.1419 39.4478 29.0502 39.8184C29.3442 39.9386 29.6589 40.0003 29.9765 40C30.8345 40.0003 31.6316 39.5566 32.0835 38.8273C32.5354 38.0979 32.5777 37.1867 32.1953 36.4186C32.022 36.0345 32.0495 35.5896 32.2687 35.2296L36.6826 27.5854C36.8847 27.2156 37.2564 26.9694 37.6758 26.9276C38.7031 26.8641 39.584 26.172 39.8888 25.1889C40.1936 24.2059 39.8586 23.1369 39.0474 22.5035H39.0483ZM10.536 28.735C10.0031 28.9486 9.39354 28.8108 9.00435 28.3887C8.61517 27.9666 8.52726 27.348 8.78345 26.8342C9.1238 26.1226 9.08424 25.2877 8.67814 24.6115L4.26427 16.9672C3.88169 16.2774 3.17847 15.8257 2.39204 15.7645C1.85252 15.7318 1.38171 15.3873 1.18732 14.883C0.976372 14.3425 1.12531 13.7278 1.56027 13.3437C1.99522 12.9597 2.62368 12.8881 3.13393 13.1643C3.86586 13.5389 4.73868 13.5123 5.44649 13.094L20.5003 4.40322C21.2172 4.00019 21.6773 3.25773 21.7191 2.43646C21.734 1.88563 22.0759 1.39674 22.5882 1.19371C23.1528 0.97118 23.7965 1.13936 24.1801 1.60963C24.5198 2.03021 24.5826 2.61041 24.3407 3.09392C24.0002 3.80558 24.0398 4.64064 24.446 5.31692L28.8587 12.9612C29.2414 13.6508 29.9445 14.1025 30.7309 14.1639C31.2707 14.1962 31.742 14.5406 31.9365 15.0451C32.1522 15.6124 31.976 16.254 31.5009 16.6316C31.0689 16.9737 30.4746 17.0255 29.9899 16.7632C29.2581 16.3884 28.3852 16.4149 27.6774 16.8332L12.6223 25.5249C11.9735 25.894 11.532 26.5427 11.4266 27.2816V27.286L11.4238 27.3086C11.4159 27.3698 11.408 27.4311 11.406 27.4932C11.3903 28.0438 11.0481 28.5321 10.536 28.735ZM37.6089 25.8352C38.1486 25.8028 38.6197 25.4584 38.8142 24.954L38.8133 24.9546C39.029 24.3876 38.8534 23.7462 38.3789 23.3681C37.947 23.0258 37.3525 22.9741 36.8679 23.2366C36.1361 23.6114 35.2632 23.585 34.5554 23.1666L26.7252 18.6462L13.1692 26.472C12.925 26.6112 12.7293 26.8219 12.6086 27.0757C13.5289 27.6057 16.6596 29.4115 27.3774 35.5952C28.0936 35.9988 28.5529 36.7413 28.5943 37.5623C28.609 38.1138 28.9513 38.6033 29.4643 38.8063C30.0291 39.0285 30.6727 38.8603 31.0565 38.3901C31.3961 37.9695 31.4589 37.3893 31.2172 36.9058C30.8768 36.1941 30.9164 35.3591 31.3225 34.6828L35.736 27.0382C36.1188 26.3483 36.8222 25.8964 37.6089 25.8352Z"
                                    fill="#EDCB9B" />
                            </svg>

                        </div>
                        <div class="beds__text"><?php the_field('no_of_bedrooms')?> Beds</div>
                    </div>
                    <div class="sqft">
                        <div class="sqft__icon"><svg width="37" height="40" viewBox="0 0 37 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16 9.14286C16 7.88253 17.0254 6.85715 18.2857 6.85715C19.546 6.85715 20.5714 7.88253 20.5714 9.14286C20.5714 10.4032 19.546 11.4286 18.2857 11.4286C17.0254 11.4286 16 10.4032 16 9.14286ZM17.2427 9.14286C17.2427 9.71806 17.7106 10.1859 18.2857 10.1859C18.8608 10.1859 19.3287 9.71806 19.3287 9.14286C19.3287 8.56766 18.8609 8.09983 18.2857 8.09983C17.7105 8.09983 17.2427 8.56766 17.2427 9.14286Z"
                                    fill="#EDCB9B" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M34.6941 35.9671L36.4934 39.1186C36.6538 39.3994 36.559 39.7586 36.2821 39.921C36.1906 39.9746 36.0908 40 35.9923 40C35.7921 40 35.5973 39.8948 35.4899 39.7067L33.6474 36.4799L33.6384 36.4841C33.428 36.5809 33.2057 36.627 32.9861 36.627C32.4215 36.627 31.8739 36.3227 31.5867 35.7957L29.5186 32.0009C29.3639 31.717 29.4657 31.3598 29.7461 31.2031C30.0264 31.0465 30.3791 31.1495 30.5338 31.4334L32.6018 35.2282C32.71 35.4266 32.9545 35.5087 33.1584 35.4148L33.9657 35.0431C34.0759 34.9924 34.1578 34.9004 34.1963 34.7841C34.2348 34.6679 34.2242 34.5445 34.1665 34.4367L22.1744 12.0501C21.48 13.0385 20.4286 13.7522 19.2117 13.9957L24.1088 23.1135C24.1449 23.1807 24.1916 23.2405 24.2478 23.2912L27.8184 26.5188C27.8672 26.563 27.9083 26.6152 27.9399 26.6732L29.3397 29.2418C29.4944 29.5257 29.3927 29.8829 29.1123 30.0397C29.0235 30.0893 28.9274 30.1129 28.8326 30.1129C28.6284 30.1129 28.4303 30.0034 28.3245 29.8093L27.0327 27.4391C26.7968 29.1071 26.0997 30.6845 25.0109 31.9769C24.3411 32.7719 23.5436 33.4363 22.6609 33.9466H25.7459C25.7822 33.3152 26.2994 32.8123 26.9318 32.8123H27.9524C28.6083 32.8123 29.1418 33.3528 29.1418 34.017V35.0507C29.1418 35.715 28.6082 36.2554 27.9524 36.2554H26.9318C26.2994 36.2554 25.7822 35.7525 25.7459 35.1211H20.1707C19.9225 35.9367 19.1715 36.5311 18.2859 36.5311C17.4002 36.5311 16.6492 35.9367 16.401 35.1211H10.8258C10.7895 35.7525 10.2723 36.2554 9.63995 36.2554H8.61932C7.96343 36.2554 7.42992 35.7149 7.42992 35.0507V34.017C7.42992 33.3527 7.96351 32.8123 8.61932 32.8123H9.63995C10.2723 32.8123 10.7895 33.3152 10.8258 33.9466H13.9109C13.0281 33.4364 12.2306 32.7719 11.5608 31.9769C10.472 30.6845 9.77485 29.1071 9.53906 27.4391L4.98503 35.7956C4.69775 36.3225 4.15009 36.6268 3.58558 36.6269C3.36587 36.6269 3.14376 36.5809 2.93325 36.484L2.92421 36.4798L1.08178 39.7066C0.974321 39.8948 0.77958 39.9999 0.57935 39.9999C0.480859 39.9999 0.381053 39.9745 0.289596 39.9209C0.0124442 39.7586 -0.0823365 39.3994 0.0780021 39.1186L1.87737 35.9671C1.59867 35.7705 1.38483 35.4873 1.27567 35.1575C1.13582 34.735 1.17594 34.2681 1.38576 33.8765L2.92436 31.0043C3.07704 30.7191 3.4288 30.6132 3.71044 30.7681C3.992 30.9228 4.09636 31.2792 3.9436 31.5643L2.405 34.4366C2.34733 34.5444 2.33666 34.6679 2.37516 34.7841C2.41366 34.9004 2.49553 34.9924 2.60577 35.0431L3.41311 35.4147C3.61697 35.5086 3.86142 35.4266 3.96973 35.228L8.63138 26.6734C8.663 26.6153 8.70405 26.5631 8.75291 26.519L12.3234 23.2914C12.3797 23.2405 12.4264 23.1808 12.4624 23.1139L13.8252 20.5765C13.9782 20.2916 14.3304 20.1862 14.6116 20.3413C14.8929 20.4963 14.9968 20.8528 14.8438 21.1378L13.4811 23.675C13.3813 23.8609 13.2517 24.0267 13.0956 24.1678L10.6139 26.4111C10.6676 28.174 11.3111 29.8715 12.4426 31.2146C13.4978 32.467 14.9174 33.3457 16.4816 33.7282C16.7881 33.0272 17.481 32.5366 18.2855 32.5366C19.09 32.5366 19.7829 33.0272 20.0893 33.7282C21.6537 33.3457 23.0732 32.467 24.1283 31.2146C25.2598 29.8716 25.9033 28.174 25.9571 26.4111L23.4753 24.1677C23.3194 24.0267 23.1896 23.8609 23.0898 23.6748L18.2856 14.7296L16.0274 18.9346C15.9221 19.1303 15.723 19.2413 15.5174 19.2413C15.4238 19.2413 15.329 19.2183 15.2409 19.1699C14.9596 19.0148 14.8556 18.6583 15.0086 18.3733L17.3596 13.9957C16.1427 13.7522 15.0914 13.0385 14.3969 12.0501L5.12449 29.3598C5.01943 29.5559 4.82013 29.6671 4.61433 29.6671C4.52094 29.6671 4.42632 29.6442 4.33842 29.5959C4.05686 29.4413 3.95249 29.0848 4.10525 28.7998L7.09672 23.2154L5.42538 22.2296C5.25932 22.3598 5.0679 22.4567 4.85894 22.5134C4.72094 22.5509 4.58093 22.5694 4.44178 22.5694C4.16424 22.5694 3.89041 22.4957 3.64372 22.3514L3.20723 22.0961C2.83677 21.8796 2.57183 21.5299 2.46105 21.1113C2.35034 20.6929 2.40716 20.2557 2.62108 19.8805L4.28716 16.9578C4.501 16.5826 4.84634 16.3142 5.25955 16.2021C5.67254 16.0898 6.10431 16.1475 6.47477 16.3641L6.91126 16.6194C7.48187 16.9531 7.77263 17.5912 7.70027 18.2155L9.296 19.1097L9.44923 18.8236V10.4084H9.22673C8.56868 10.4084 8.03332 9.86619 8.03332 9.19963V7.57454C8.03332 6.90798 8.56868 6.36576 9.22673 6.36576H10.8314C11.4895 6.36576 12.0249 6.90798 12.0249 7.57454V9.19955C12.0249 9.86611 11.4895 10.4083 10.8314 10.4083H10.6089V16.6588L13.7587 10.7788C13.6011 10.2996 13.5144 9.78781 13.5144 9.25561C13.5144 7.67727 14.2553 6.23086 15.512 5.32345V4.60999C15.512 4.09267 15.8397 3.65256 16.2952 3.4879V1.5226C16.2952 0.683078 16.9696 0 17.7986 0H18.6954C19.5244 0 20.1988 0.683078 20.1988 1.5226V3.4879C20.6545 3.65256 20.982 4.09275 20.982 4.60999V5.2699C22.2697 6.1661 23.0569 7.66341 23.0569 9.25561C23.0569 9.78781 22.9702 10.2996 22.8126 10.7788L25.9625 16.6588V10.4084H25.74C25.0819 10.4084 24.5465 9.86619 24.5465 9.19963V7.57454C24.5465 6.90798 25.0819 6.36576 25.74 6.36576H27.3446C28.0027 6.36576 28.538 6.90798 28.538 7.57454V9.19963C28.538 9.86619 28.0027 10.4084 27.3446 10.4084H27.1221V18.8236L27.2753 19.1096L28.8711 18.2154C28.7987 17.5911 29.0895 16.953 29.6601 16.6193L30.0966 16.364C30.4671 16.1475 30.8986 16.0898 31.3118 16.202C31.725 16.3141 32.0703 16.5825 32.2842 16.9577L33.9503 19.8804C34.1641 20.2556 34.221 20.6928 34.1103 21.1112C33.9996 21.5298 33.7346 21.8795 33.364 22.0961L32.9276 22.3513C32.6809 22.4956 32.407 22.5693 32.1296 22.5693C31.9904 22.5693 31.8504 22.5508 31.7124 22.5133C31.5034 22.4566 31.312 22.3598 31.146 22.2295L29.4746 23.2153L35.1857 33.8766C35.3955 34.2681 35.4357 34.735 35.2957 35.1575C35.1866 35.4873 34.9728 35.7705 34.6941 35.9671ZM25.7061 7.57454V9.19963C25.7061 9.2185 25.7213 9.23392 25.74 9.23392H27.3446C27.3632 9.23392 27.3784 9.2185 27.3784 9.19963V7.57454C27.3784 7.55559 27.3632 7.54025 27.3446 7.54025H25.74C25.7213 7.54025 25.7061 7.55567 25.7061 7.57454ZM9.19303 9.19963V7.57454C9.19303 7.55567 9.20818 7.54025 9.22681 7.54025H10.8314C10.8501 7.54025 10.8653 7.55559 10.8653 7.57454V9.19963C10.8653 9.2185 10.8501 9.23392 10.8314 9.23392H9.22681C9.20826 9.23392 9.19303 9.2185 9.19303 9.19963ZM4.55875 21.379C4.67278 21.3481 4.76802 21.274 4.82709 21.1705L6.49325 18.2478C6.61501 18.0341 6.54249 17.7599 6.33152 17.6366L5.89503 17.3813C5.82692 17.3414 5.75139 17.3211 5.67486 17.3211C5.63643 17.3211 5.59786 17.3262 5.55982 17.3365C5.44579 17.3674 5.35054 17.4415 5.29148 17.545L3.6254 20.4678C3.56641 20.5713 3.55072 20.6918 3.58125 20.8073C3.61179 20.9228 3.68492 21.0192 3.78705 21.079L4.22354 21.3343C4.32582 21.3941 4.44487 21.4099 4.55875 21.379ZM6.10771 21.2728L7.23425 19.2966L8.74301 20.142L7.64994 22.1825L6.10771 21.2728ZM9.63972 35.0809C9.65611 35.0809 9.66948 35.0673 9.66948 35.0507V34.017C9.66948 34.0004 9.65611 33.9868 9.63972 33.9868H8.61909C8.6027 33.9868 8.58932 34.0004 8.58932 34.017V35.0507C8.58932 35.0673 8.6027 35.0809 8.61909 35.0809H9.63972ZM18.2857 35.3567C17.8378 35.3567 17.4733 34.9875 17.4733 34.5339C17.4733 34.5108 17.4749 34.488 17.4767 34.4654C17.4773 34.4587 17.4778 34.4521 17.4782 34.4454C17.522 34.0332 17.8673 33.7111 18.2857 33.7111C18.7041 33.7111 19.0494 34.0332 19.0932 34.4454L19.0937 34.4535L19.0947 34.4654C19.0965 34.488 19.0981 34.5107 19.0981 34.5339C19.098 34.9875 18.7336 35.3567 18.2857 35.3567ZM26.9316 33.9868C26.9152 33.9868 26.9019 34.0004 26.9019 34.017V35.0507C26.9019 35.0673 26.9152 35.0809 26.9316 35.0809H27.9523C27.9686 35.0809 27.982 35.0673 27.982 35.0507V34.017C27.982 34.0004 27.9686 33.9868 27.9523 33.9868H26.9316ZM17.4549 1.5226C17.4549 1.33061 17.6091 1.17448 17.7987 1.17448H18.6954C18.885 1.17448 19.0392 1.33061 19.0392 1.5226V3.41774H17.4549V1.5226ZM18.286 12.9133H18.2872C20.2779 12.9125 21.8972 11.272 21.8972 9.25561C21.8972 7.96345 21.2119 6.75374 20.1088 6.09853C19.9313 5.99306 19.8223 5.80029 19.8223 5.59194V4.60999C19.8223 4.60021 19.8144 4.59222 19.8048 4.59222H19.6189H16.8751H16.6892C16.6795 4.59222 16.6717 4.60021 16.6717 4.60999V5.63829C16.6717 5.84226 16.5673 6.03151 16.3958 6.13839C15.3177 6.8105 14.6741 7.97582 14.6741 9.25561C14.6741 11.2718 16.2932 12.9122 18.2837 12.9133H18.286ZM30.2399 17.6365L30.6764 17.3812C30.7786 17.3214 30.8975 17.3056 31.0116 17.3365C31.1256 17.3675 31.2209 17.4415 31.2799 17.545L32.946 20.4678C33.0051 20.5713 33.0207 20.6918 32.9902 20.8073C32.9596 20.9228 32.8865 21.0192 32.7843 21.079L32.3478 21.3343C32.2456 21.3941 32.1265 21.4099 32.0126 21.379C31.8986 21.348 31.8033 21.274 31.7443 21.1705L30.0781 18.2478C29.9564 18.034 30.0289 17.7598 30.2399 17.6365ZM30.4636 21.2728L29.337 19.2966L27.8283 20.142L28.9213 22.1825L30.4636 21.2728Z"
                                    fill="#EDCB9B" />
                            </svg>
                        </div>
                        <div class="sqft__text"><?php the_field('no_in_sqft')?> sqft</div>
                    </div>
                </div>
                <div class="overview">
                    <h2>Overview</h2>
                    <p>
                        <?php the_content()?>
                    </p>
                </div>
                <div class="features">
                    <h2 class="features__heading">Features</h2>
                    <div class="features__details">
                        <div class="features__details-left">
                            <p><span class="bold">Type:</span> <?php the_field('type')?></p>
                            <p><span class="bold">Year Built:</span> 1998</p>
                        </div>
                        <div class="features__details-middle">
                            <p><span class="bold">Heating:</span><?php the_field('heating')?></p>
                            <p><span class="bold">Cooling:</span> No Data</p>
                        </div>
                        <div class="features__details-right">
                            <p><span class="bold">Parking:</span><?php the_field('parking')?></p>
                            <p><span class="bold">Lot:</span><?php the_field('lot')?> acres</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- <?php echo get_the_term_list($post->ID, 'property_status', 'Status: ', ', '); ?>

        <?php the_ID()?> -->


        <div class="similar__chalets">
            <div class="similar__chalets-heading">
                <div class="left__rec"></div>
                <h1>Similar Chalets</h1>


            </div>
            <div class="similar__chalets-listings">
                <?php
               
                $the_featured_query = new WP_Query(array(
                'post_type'=>'chalets',
                'posts_per_page' => '4',
                'tax_query' => array(
                array(
                'taxonomy'=> 'property_status',
                'field' => 'slug',
                'terms' => array('for_sale')
                )
                )
                ));
                while ($the_featured_query->have_posts()) : $the_featured_query->the_post(); ?>
                <div class="listing__card" id="post-<?php the_ID();?>" <?php post_class();?>>
                    <div class="listing__card-image">
                        <div class="img-overlay"></div>
                        <div class="f-img-1">
                            <img src="<?php the_field('chalet_featured_image');?>">
                        </div>
                    </div>
                    <div class="listing__card-price">
                        <span>$<?php the_field('price');?></span>
                        <div class="tag"><?php the_terms($post->ID, 'property_status')?></div>
                    </div>
                    <div class="listing__card-body">
                        <?php the_title('<h3><a href="' . esc_url(get_permalink()) . '">', '</a></h3>')?>
                        <p><?php the_field('location');?></p>
                        <span><?php the_field('no_of_bedrooms');?> bd | <?php the_field('no_of_bathrooms');?> ba |
                            <?php the_field('no_in_sqft');?> sqft</span>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query();?>
            </div>
        </div>
        </div>
        </div>
    </section>
</article>