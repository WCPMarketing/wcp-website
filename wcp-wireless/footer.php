
                    <svg
                        width="14"
                        height="14"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                    >

                        <path d="M4 4h16v16H4z"/>

                        <path d="m4 6 8 7 8-7"/>

                    </svg>


                    <a
                        href="<?php
                            echo esc_attr(
                                'mailto:' . sanitize_email($global_email)
                            );
                        ?>"
                    >
                        <?php echo esc_html($global_email); ?>
                    </a>

                </div>


                <!-- ADDRESS -->

                <div class="footer-contact-item">

                    <svg
                        width="14"
                        height="14"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                    >

                        <path
                            d="M12 22s8-7.4 8-13a8 8 0 1 0-16 0c0 5.6 8 13 8 13z"
                        />

                        <circle
                            cx="12"
                            cy="9"
                            r="3"
                        />

                    </svg>


                    <span>
                        <?php
                            echo nl2br(
                                esc_html($global_address)
                            );
                        ?>
                    </span>

                </div>


            </div>


        </div>


        <!-- =================================================
             COPYRIGHT
        ================================================== -->

        <div class="footer-bottom">

            <span>

                &copy;
                <?php echo esc_html(wp_date('Y')); ?>

                Wireless Communications Plus — Rogers Authorized Dealer

            </span>

        </div>


    </div>

</footer>


<?php wp_footer(); ?>

</body>

</html>
