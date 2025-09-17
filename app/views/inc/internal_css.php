 :root {
     --brand: #009970;
     /* Accent color */
     --bg-soft: #f6f8fb;
 }

 .btn-brand {
     background: var(--brand);
     border-color: var(--brand);
 }

 .btn-brand:hover {
     filter: brightness(0.95);
     color: black;
 }

 .hero-bg {
     background: linear-gradient(135deg, #eef3ff 0%, #ffffff 60%);
 }

 .shadow-soft {
     box-shadow: 0 10px 30px rgba(31, 45, 61, 0.08);
 }

 .cover-wrap {
     background: white;
     border-radius: 1rem;
     padding: 1rem;
     border: 1px solid rgba(0, 0, 0, .05);
 }

 .toc-list .list-group-item {
     border: none;
     border-left: 4px solid transparent;
 }

 .toc-list .list-group-item:hover {
     background: #f9fbff;
     border-left-color: var(--brand);
 }

 .badge-soft {
     background: #eef3ff;
     color: #2d5bdb;
 }

 .section-title {
     letter-spacing: .2px;
 }

 .footer {
     color: #6c757d;
 }