    transition:transform .25s ease;
}

.wcp-blog-card-image:hover img {
    transform:scale(1.025);
}

.wcp-blog-card-placeholder {
    width:100%;
    height:100%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:28px;
    font-weight:700;
    color:var(--red);
    background:var(--surface);
}

.wcp-blog-card-content {
    padding:24px;
    display:flex;
    flex-direction:column;
    flex:1;
}

.wcp-blog-meta {
    color:var(--red);
    font-size:12px;
    font-weight:700;
    letter-spacing:.04em;
    text-transform:uppercase;
    margin-bottom:10px;
}

.wcp-blog-card h3 {
    margin-top:0;
}

.wcp-blog-card h3 a {
    color:inherit;
    text-decoration:none;
}

.wcp-blog-card p {
    color:var(--text-muted);
    line-height:1.65;
}

.wcp-blog-card .btn-card {
    margin-top:auto;
    padding-top:8px;
}

.wcp-blog-pagination {
    margin-top:42px;
}

.wcp-blog-pagination .page-numbers {
    list-style:none;
    display:flex;
    flex-wrap:wrap;
    gap:8px;
    padding:0;
    margin:0;
}

.wcp-blog-pagination a,
.wcp-blog-pagination span {
    display:inline-flex;
    align-items:center;
    justify-content:center;
    min-height:42px;
    padding:8px 14px;
    border:1px solid var(--border);
    border-radius:6px;
    text-decoration:none;
}

.wcp-blog-pagination .current {
    background:var(--red);
    border-color:var(--red);
    color:#fff;
}

.wcp-blog-empty {
    max-width:620px;
}

@media (max-width:960px) {

    .wcp-blog-grid {
        grid-template-columns:repeat(2, minmax(0, 1fr));
    }

}

@media (max-width:640px) {

    .wcp-blog-grid {
        grid-template-columns:1fr;
    }

}

</style>


<?php get_footer(); ?>
