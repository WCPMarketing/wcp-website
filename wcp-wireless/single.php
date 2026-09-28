.wcp-article-header h1 {
    max-width:900px;
    margin-bottom:18px;
}

.wcp-article-excerpt {
    max-width:760px;
    font-size:19px;
    line-height:1.65;
    margin-bottom:0;
}

.wcp-article-section .container {
    max-width:980px;
}

.wcp-article-content {
    max-width:780px;
    margin:0 auto;
    font-size:17px;
    line-height:1.8;
}

.wcp-article-content p,
.wcp-article-content ul,
.wcp-article-content ol,
.wcp-article-content blockquote {
    margin-bottom:1.4em;
}

.wcp-article-content h2,
.wcp-article-content h3,
.wcp-article-content h4 {
    margin-top:1.8em;
}

.wcp-article-content img {
    max-width:100%;
    height:auto;
    border-radius:10px;
}

.wcp-article-gallery {
    margin:52px auto 0;
    max-width:900px;
    display:grid;
    grid-template-columns:repeat(2, minmax(0, 1fr));
    gap:22px;
}

.wcp-article-gallery-item {
    margin:0;
}

.wcp-article-gallery-item img {
    display:block;
    width:100%;
    aspect-ratio:16 / 10;
    object-fit:cover;
    border-radius:10px;
}

.wcp-article-gallery-item figcaption {
    color:var(--text-muted);
    font-size:13px;
    line-height:1.5;
    margin-top:8px;
}

.wcp-article-gallery-item:last-child:nth-child(odd) {
    grid-column:1 / -1;
}

.wcp-article-footer {
    max-width:780px;
    margin:48px auto 0;
    padding-top:28px;
    border-top:1px solid var(--border);
}

.wcp-page-links {
    margin-top:30px;
    font-weight:700;
}

@media (max-width:700px) {

    .wcp-article-header {
        padding:54px 0 46px;
    }

    .wcp-article-header.has-image {
        min-height:400px;
    }

    .wcp-article-content {
        font-size:16px;
    }

    .wcp-article-gallery {
        grid-template-columns:1fr;
    }

    .wcp-article-gallery-item:last-child:nth-child(odd) {
        grid-column:auto;
    }

}

</style>


<?php get_footer(); ?>
