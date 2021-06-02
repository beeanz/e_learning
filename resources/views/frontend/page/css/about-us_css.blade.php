{{--
@author: ByteRain
@date: 12/04/20
--}}
<style>
    .card {
        font-size: .875rem; }

    *,
    *::before,
    *::after {
        box-sizing: border-box; }

    html {
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        -ms-overflow-style: scrollbar;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }

    @-ms-viewport {
        width: device-width; }

    article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section {
        display: block; }

    body {
        margin: 0;
        font-family: "Roboto", "Helvetica", "Arial", sans-serif;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: left;
        background-color: #fafafa; }

    [tabindex="-1"]:focus {
        outline: 0 !important; }

    hr {
        box-sizing: content-box;
        height: 0;
        overflow: visible; }

    h1, h2, h3, h4, h5, h6 {
        margin-top: 0;
        margin-bottom: 0.5rem; }

    p {
        margin-top: 0;
        margin-bottom: 1rem; }

    abbr[title],
    abbr[data-original-title] {
        text-decoration: underline;
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted;
        cursor: help;
        border-bottom: 0; }

    address {
        margin-bottom: 1rem;
        font-style: normal;
        line-height: inherit; }

    ol,
    ul,
    dl {
        margin-top: 0;
        margin-bottom: 1rem; }

    ol ol,
    ul ul,
    ol ul,
    ul ol {
        margin-bottom: 0; }

    dt {
        font-weight: 500; }

    dd {
        margin-bottom: .5rem;
        margin-left: 0; }

    blockquote {
        margin: 0 0 1rem; }

    dfn {
        font-style: italic; }

    b,
    strong {
        font-weight: bolder; }

    small {
        font-size: 80%; }

    sub,
    sup {
        position: relative;
        font-size: 75%;
        line-height: 0;
        vertical-align: baseline; }

    sub {
        bottom: -.25em; }

    sup {
        top: -.5em; }

    a {
        color: #9c27b0;
        text-decoration: none;
        background-color: transparent;
        -webkit-text-decoration-skip: objects; }
    a:hover {
        color: #0a6ebd;
        text-decoration: underline; }

    a:not([href]):not([tabindex]) {
        color: inherit;
        text-decoration: none; }
    a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
        color: inherit;
        text-decoration: none; }
    a:not([href]):not([tabindex]):focus {
        outline: 0; }

    pre,
    code,
    kbd,
    samp {
        font-family: monospace, monospace;
        font-size: 1em; }

    pre {
        margin-top: 0;
        margin-bottom: 1rem;
        overflow: auto;
        -ms-overflow-style: scrollbar; }

    figure {
        margin: 0 0 1rem; }

    img {
        vertical-align: middle;
        border-style: none; }

    svg:not(:root) {
        overflow: hidden; }

    table {
        border-collapse: collapse; }

    caption {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        color: #6c757d;
        text-align: left;
        caption-side: bottom; }

    th {
        text-align: inherit; }

    label {
        display: inline-block;
        margin-bottom: .5rem; }

    button {
        border-radius: 0; }

    button:focus {
        outline: 1px dotted;
        outline: 5px auto -webkit-focus-ring-color; }

    input,
    button,
    select,
    optgroup,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit; }

    button,
    input {
        overflow: visible; }

    button,
    select {
        text-transform: none; }

    button,
    html [type="button"],
    [type="reset"],
    [type="submit"] {
        -webkit-appearance: button; }

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
        padding: 0;
        border-style: none; }

    input[type="radio"],
    input[type="checkbox"] {
        box-sizing: border-box;
        padding: 0; }

    input[type="date"],
    input[type="time"],
    input[type="datetime-local"],
    input[type="month"] {
        -webkit-appearance: listbox; }

    textarea {
        overflow: auto;
        resize: vertical; }

    fieldset {
        min-width: 0;
        padding: 0;
        margin: 0;
        border: 0; }

    legend {
        display: block;
        width: 100%;
        max-width: 100%;
        padding: 0;
        margin-bottom: .5rem;
        font-size: 1.5rem;
        line-height: inherit;
        color: inherit;
        white-space: normal; }

    progress {
        vertical-align: baseline; }

    [type="number"]::-webkit-inner-spin-button,
    [type="number"]::-webkit-outer-spin-button {
        height: auto; }

    [type="search"] {
        outline-offset: -2px;
        -webkit-appearance: none; }

    [type="search"]::-webkit-search-cancel-button,
    [type="search"]::-webkit-search-decoration {
        -webkit-appearance: none; }

    ::-webkit-file-upload-button {
        font: inherit;
        -webkit-appearance: button; }

    output {
        display: inline-block; }

    summary {
        display: list-item;
        cursor: pointer; }

    template {
        display: none; }

    [hidden] {
        display: none !important; }

    @media print {
        *,
        *::before,
        *::after {
            text-shadow: none !important;
            box-shadow: none !important; }
        a:not(.btn) {
            text-decoration: underline; }
        abbr[title]::after {
            content: " (" attr(title) ")"; }
        pre {
            white-space: pre-wrap !important; }
        pre,
        blockquote {
            border: 1px solid #999;
            page-break-inside: avoid; }
        thead {
            display: table-header-group; }
        tr,
        img {
            page-break-inside: avoid; }
        p,
        h2,
        h3 {
            orphans: 3;
            widows: 3; }
        h2,
        h3 {
            page-break-after: avoid; }
        @page {
            size: a3; }
        body {
            min-width: 992px !important; }
        .container {
            min-width: 992px !important; }
        .navbar {
            display: none; }
        .badge {
            border: 1px solid #000; }
        .table {
            border-collapse: collapse !important; }
        .table td,
        .table th {
            background-color: #fff !important; }
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #ddd !important; } }

    *,
    *::before,
    *::after {
        box-sizing: border-box; }

    html {
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        -ms-overflow-style: scrollbar;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }

    @-ms-viewport {
        width: device-width; }

    article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section {
        display: block; }

    body {
        margin: 0;
        font-family: "Roboto", "Helvetica", "Arial", sans-serif;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: left;
        background-color: #fafafa; }

    [tabindex="-1"]:focus {
        outline: 0 !important; }

    hr {
        box-sizing: content-box;
        height: 0;
        overflow: visible; }

    h1, h2, h3, h4, h5, h6 {
        margin-top: 0;
        margin-bottom: 0.5rem; }

    p {
        margin-top: 0;
        margin-bottom: 1rem; }

    abbr[title],
    abbr[data-original-title] {
        text-decoration: underline;
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted;
        cursor: help;
        border-bottom: 0; }

    address {
        margin-bottom: 1rem;
        font-style: normal;
        line-height: inherit; }

    ol,
    ul,
    dl {
        margin-top: 0;
        margin-bottom: 1rem; }

    ol ol,
    ul ul,
    ol ul,
    ul ol {
        margin-bottom: 0; }

    dt {
        font-weight: 500; }

    dd {
        margin-bottom: .5rem;
        margin-left: 0; }

    blockquote {
        margin: 0 0 1rem; }

    dfn {
        font-style: italic; }

    b,
    strong {
        font-weight: bolder; }

    small {
        font-size: 80%; }

    sub,
    sup {
        position: relative;
        font-size: 75%;
        line-height: 0;
        vertical-align: baseline; }

    sub {
        bottom: -.25em; }

    sup {
        top: -.5em; }

    a {
        color: #9c27b0;
        text-decoration: none;
        background-color: transparent;
        -webkit-text-decoration-skip: objects; }
    a:hover {
        color: #0a6ebd;
        text-decoration: underline; }

    a:not([href]):not([tabindex]) {
        color: inherit;
        text-decoration: none; }
    a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
        color: inherit;
        text-decoration: none; }
    a:not([href]):not([tabindex]):focus {
        outline: 0; }

    pre,
    code,
    kbd,
    samp {
        font-family: monospace, monospace;
        font-size: 1em; }

    pre {
        margin-top: 0;
        margin-bottom: 1rem;
        overflow: auto;
        -ms-overflow-style: scrollbar; }

    figure {
        margin: 0 0 1rem; }

    img {
        vertical-align: middle;
        border-style: none; }

    svg:not(:root) {
        overflow: hidden; }

    table {
        border-collapse: collapse; }

    caption {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        color: #6c757d;
        text-align: left;
        caption-side: bottom; }

    th {
        text-align: inherit; }

    label {
        display: inline-block;
        margin-bottom: .5rem; }

    button {
        border-radius: 0; }

    button:focus {
        outline: 1px dotted;
        outline: 5px auto -webkit-focus-ring-color; }

    input,
    button,
    select,
    optgroup,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit; }

    button,
    input {
        overflow: visible; }

    button,
    select {
        text-transform: none; }

    button,
    html [type="button"],
    [type="reset"],
    [type="submit"] {
        -webkit-appearance: button; }

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
        padding: 0;
        border-style: none; }

    input[type="radio"],
    input[type="checkbox"] {
        box-sizing: border-box;
        padding: 0; }

    input[type="date"],
    input[type="time"],
    input[type="datetime-local"],
    input[type="month"] {
        -webkit-appearance: listbox; }

    textarea {
        overflow: auto;
        resize: vertical; }

    fieldset {
        min-width: 0;
        padding: 0;
        margin: 0;
        border: 0; }

    legend {
        display: block;
        width: 100%;
        max-width: 100%;
        padding: 0;
        margin-bottom: .5rem;
        font-size: 1.5rem;
        line-height: inherit;
        color: inherit;
        white-space: normal; }

    progress {
        vertical-align: baseline; }

    [type="number"]::-webkit-inner-spin-button,
    [type="number"]::-webkit-outer-spin-button {
        height: auto; }

    [type="search"] {
        outline-offset: -2px;
        -webkit-appearance: none; }

    [type="search"]::-webkit-search-cancel-button,
    [type="search"]::-webkit-search-decoration {
        -webkit-appearance: none; }

    ::-webkit-file-upload-button {
        font: inherit;
        -webkit-appearance: button; }

    output {
        display: inline-block; }

    summary {
        display: list-item;
        cursor: pointer; }

    template {
        display: none; }

    [hidden] {
        display: none !important; }

    h1, h2, h3, h4, h5, h6,
    .h1, .h2, .h3, .h4, .h5, .h6 {
        margin-bottom: 0.5rem;
        font-family: inherit;
        font-weight: 400;
        line-height: 1.2;
        color: inherit; }

    h1, .h1 {
        font-size: 2.5rem; }

    h2, .h2 {
        font-size: 2rem; }

    h3, .h3 {
        font-size: 1.75rem; }

    h4, .h4 {
        font-size: 1.5rem; }

    h5, .h5 {
        font-size: 1.25rem; }

    h6, .h6 {
        font-size: 1rem; }

    .lead {
        font-size: 1.25rem;
        font-weight: 300; }

    .display-1 {
        font-size: 7rem;
        font-weight: 300;
        line-height: 1.2; }

    .display-2 {
        font-size: 3.5rem;
        font-weight: 300;
        line-height: 1.2; }

    .display-3 {
        font-size: 2.8125rem;
        font-weight: 300;
        line-height: 1.2; }

    .display-4 {
        font-size: 2.125rem;
        font-weight: 300;
        line-height: 1.2; }

    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.1); }

    small,
    .small {
        font-size: 80%;
        font-weight: 400; }

    mark,
    .mark {
        padding: 0.2em;
        background-color: #fcf8e3; }

    .list-unstyled {
        padding-left: 0;
        list-style: none; }

    .list-inline {
        padding-left: 0;
        list-style: none; }

    .list-inline-item {
        display: inline-block; }
    .list-inline-item:not(:last-child) {
        margin-right: 0.5rem; }

    .initialism {
        font-size: 90%;
        text-transform: uppercase; }

    .blockquote {
        margin-bottom: 1rem;
        font-size: 1.25rem; }

    .blockquote-footer {
        display: block;
        font-size: 80%;
        color: #6c757d; }
    .blockquote-footer::before {
        content: "\2014 \00A0"; }

    .img-fluid {
        max-width: 100%;
        height: auto; }

    .img-thumbnail {
        padding: 0.25rem;
        background-color: #fafafa;
        border: 1px solid #dee2e6;
        border-radius: 0.25rem;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075);
        max-width: 100%;
        height: auto; }

    .figure {
        display: inline-block; }

    .figure-img {
        margin-bottom: 0.5rem;
        line-height: 1; }

    .figure-caption {
        font-size: 90%;
        color: #6c757d; }

    code,
    kbd,
    pre,
    samp {
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }

    code {
        font-size: 87.5%;
        color: #e91e63;
        word-break: break-word; }
    a > code {
        color: inherit; }

    kbd {
        padding: 0.2rem 0.4rem;
        font-size: 87.5%;
        color: #ffffff;
        background-color: #212529;
        border-radius: 0.2rem;
        box-shadow: inset 0 -0.1rem 0 rgba(0, 0, 0, 0.25); }
    kbd kbd {
        padding: 0;
        font-size: 100%;
        font-weight: 500;
        box-shadow: none; }

    pre {
        display: block;
        font-size: 87.5%;
        color: #212529; }
    pre code {
        font-size: inherit;
        color: inherit;
        word-break: normal; }

    .pre-scrollable {
        max-height: 340px;
        overflow-y: scroll; }

    .container {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto; }
    @media (min-width: 576px) {
        .container {
            max-width: 540px; } }
    @media (min-width: 768px) {
        .container {
            max-width: 720px; } }
    @media (min-width: 992px) {
        .container {
            max-width: 960px; } }
    @media (min-width: 1200px) {
        .container {
            max-width: 1140px; } }

    .container-fluid {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto; }

    .row {
        display: -webkit-box;
        display: flex;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px; }

    .no-gutters {
        margin-right: 0;
        margin-left: 0; }
    .no-gutters > .col,
    .no-gutters > [class*="col-"] {
        padding-right: 0;
        padding-left: 0; }

    .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
    .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
    .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
    .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
    .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
    .col-xl-auto {
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px; }

    .col {
        flex-basis: 0;
        -webkit-box-flex: 1;
        flex-grow: 1;
        max-width: 100%; }

    .col-auto {
        -webkit-box-flex: 0;
        flex: 0 0 auto;
        width: auto;
        max-width: none; }

    .col-1 {
        -webkit-box-flex: 0;
        flex: 0 0 8.33333%;
        max-width: 8.33333%; }

    .col-2 {
        -webkit-box-flex: 0;
        flex: 0 0 16.66667%;
        max-width: 16.66667%; }

    .col-3 {
        -webkit-box-flex: 0;
        flex: 0 0 25%;
        max-width: 25%; }

    .col-4 {
        -webkit-box-flex: 0;
        flex: 0 0 33.33333%;
        max-width: 33.33333%; }

    .col-5 {
        -webkit-box-flex: 0;
        flex: 0 0 41.66667%;
        max-width: 41.66667%; }

    .col-6 {
        -webkit-box-flex: 0;
        flex: 0 0 50%;
        max-width: 50%; }

    .col-7 {
        -webkit-box-flex: 0;
        flex: 0 0 58.33333%;
        max-width: 58.33333%; }

    .col-8 {
        -webkit-box-flex: 0;
        flex: 0 0 66.66667%;
        max-width: 66.66667%; }

    .col-9 {
        -webkit-box-flex: 0;
        flex: 0 0 75%;
        max-width: 75%; }

    .col-10 {
        -webkit-box-flex: 0;
        flex: 0 0 83.33333%;
        max-width: 83.33333%; }

    .col-11 {
        -webkit-box-flex: 0;
        flex: 0 0 91.66667%;
        max-width: 91.66667%; }

    .col-12 {
        -webkit-box-flex: 0;
        flex: 0 0 100%;
        max-width: 100%; }

    .order-first {
        -webkit-box-ordinal-group: 0;
        order: -1; }

    .order-last {
        -webkit-box-ordinal-group: 14;
        order: 13; }

    .order-0 {
        -webkit-box-ordinal-group: 1;
        order: 0; }

    .order-1 {
        -webkit-box-ordinal-group: 2;
        order: 1; }

    .order-2 {
        -webkit-box-ordinal-group: 3;
        order: 2; }

    .order-3 {
        -webkit-box-ordinal-group: 4;
        order: 3; }

    .order-4 {
        -webkit-box-ordinal-group: 5;
        order: 4; }

    .order-5 {
        -webkit-box-ordinal-group: 6;
        order: 5; }

    .order-6 {
        -webkit-box-ordinal-group: 7;
        order: 6; }

    .order-7 {
        -webkit-box-ordinal-group: 8;
        order: 7; }

    .order-8 {
        -webkit-box-ordinal-group: 9;
        order: 8; }

    .order-9 {
        -webkit-box-ordinal-group: 10;
        order: 9; }

    .order-10 {
        -webkit-box-ordinal-group: 11;
        order: 10; }

    .order-11 {
        -webkit-box-ordinal-group: 12;
        order: 11; }

    .order-12 {
        -webkit-box-ordinal-group: 13;
        order: 12; }

    .offset-1 {
        margin-left: 8.33333%; }

    .offset-2 {
        margin-left: 16.66667%; }

    .offset-3 {
        margin-left: 25%; }

    .offset-4 {
        margin-left: 33.33333%; }

    .offset-5 {
        margin-left: 41.66667%; }

    .offset-6 {
        margin-left: 50%; }

    .offset-7 {
        margin-left: 58.33333%; }

    .offset-8 {
        margin-left: 66.66667%; }

    .offset-9 {
        margin-left: 75%; }

    .offset-10 {
        margin-left: 83.33333%; }

    .offset-11 {
        margin-left: 91.66667%; }

    @media (min-width: 576px) {
        .col-sm {
            flex-basis: 0;
            -webkit-box-flex: 1;
            flex-grow: 1;
            max-width: 100%; }
        .col-sm-auto {
            -webkit-box-flex: 0;
            flex: 0 0 auto;
            width: auto;
            max-width: none; }
        .col-sm-1 {
            -webkit-box-flex: 0;
            flex: 0 0 8.33333%;
            max-width: 8.33333%; }
        .col-sm-2 {
            -webkit-box-flex: 0;
            flex: 0 0 16.66667%;
            max-width: 16.66667%; }
        .col-sm-3 {
            -webkit-box-flex: 0;
            flex: 0 0 25%;
            max-width: 25%; }
        .col-sm-4 {
            -webkit-box-flex: 0;
            flex: 0 0 33.33333%;
            max-width: 33.33333%; }
        .col-sm-5 {
            -webkit-box-flex: 0;
            flex: 0 0 41.66667%;
            max-width: 41.66667%; }
        .col-sm-6 {
            -webkit-box-flex: 0;
            flex: 0 0 50%;
            max-width: 50%; }
        .col-sm-7 {
            -webkit-box-flex: 0;
            flex: 0 0 58.33333%;
            max-width: 58.33333%; }
        .col-sm-8 {
            -webkit-box-flex: 0;
            flex: 0 0 66.66667%;
            max-width: 66.66667%; }
        .col-sm-9 {
            -webkit-box-flex: 0;
            flex: 0 0 75%;
            max-width: 75%; }
        .col-sm-10 {
            -webkit-box-flex: 0;
            flex: 0 0 83.33333%;
            max-width: 83.33333%; }
        .col-sm-11 {
            -webkit-box-flex: 0;
            flex: 0 0 91.66667%;
            max-width: 91.66667%; }
        .col-sm-12 {
            -webkit-box-flex: 0;
            flex: 0 0 100%;
            max-width: 100%; }
        .order-sm-first {
            -webkit-box-ordinal-group: 0;
            order: -1; }
        .order-sm-last {
            -webkit-box-ordinal-group: 14;
            order: 13; }
        .order-sm-0 {
            -webkit-box-ordinal-group: 1;
            order: 0; }
        .order-sm-1 {
            -webkit-box-ordinal-group: 2;
            order: 1; }
        .order-sm-2 {
            -webkit-box-ordinal-group: 3;
            order: 2; }
        .order-sm-3 {
            -webkit-box-ordinal-group: 4;
            order: 3; }
        .order-sm-4 {
            -webkit-box-ordinal-group: 5;
            order: 4; }
        .order-sm-5 {
            -webkit-box-ordinal-group: 6;
            order: 5; }
        .order-sm-6 {
            -webkit-box-ordinal-group: 7;
            order: 6; }
        .order-sm-7 {
            -webkit-box-ordinal-group: 8;
            order: 7; }
        .order-sm-8 {
            -webkit-box-ordinal-group: 9;
            order: 8; }
        .order-sm-9 {
            -webkit-box-ordinal-group: 10;
            order: 9; }
        .order-sm-10 {
            -webkit-box-ordinal-group: 11;
            order: 10; }
        .order-sm-11 {
            -webkit-box-ordinal-group: 12;
            order: 11; }
        .order-sm-12 {
            -webkit-box-ordinal-group: 13;
            order: 12; }
        .offset-sm-0 {
            margin-left: 0; }
        .offset-sm-1 {
            margin-left: 8.33333%; }
        .offset-sm-2 {
            margin-left: 16.66667%; }
        .offset-sm-3 {
            margin-left: 25%; }
        .offset-sm-4 {
            margin-left: 33.33333%; }
        .offset-sm-5 {
            margin-left: 41.66667%; }
        .offset-sm-6 {
            margin-left: 50%; }
        .offset-sm-7 {
            margin-left: 58.33333%; }
        .offset-sm-8 {
            margin-left: 66.66667%; }
        .offset-sm-9 {
            margin-left: 75%; }
        .offset-sm-10 {
            margin-left: 83.33333%; }
        .offset-sm-11 {
            margin-left: 91.66667%; } }

    @media (min-width: 768px) {
        .col-md {
            flex-basis: 0;
            -webkit-box-flex: 1;
            flex-grow: 1;
            max-width: 100%; }
        .col-md-auto {
            -webkit-box-flex: 0;
            flex: 0 0 auto;
            width: auto;
            max-width: none; }
        .col-md-1 {
            -webkit-box-flex: 0;
            flex: 0 0 8.33333%;
            max-width: 8.33333%; }
        .col-md-2 {
            -webkit-box-flex: 0;
            flex: 0 0 16.66667%;
            max-width: 16.66667%; }
        .col-md-3 {
            -webkit-box-flex: 0;
            flex: 0 0 25%;
            max-width: 25%; }
        .col-md-4 {
            -webkit-box-flex: 0;
            flex: 0 0 33.33333%;
            max-width: 33.33333%; }
        .col-md-5 {
            -webkit-box-flex: 0;
            flex: 0 0 41.66667%;
            max-width: 41.66667%; }
        .col-md-6 {
            -webkit-box-flex: 0;
            flex: 0 0 50%;
            max-width: 50%; }
        .col-md-7 {
            -webkit-box-flex: 0;
            flex: 0 0 58.33333%;
            max-width: 58.33333%; }
        .col-md-8 {
            -webkit-box-flex: 0;
            flex: 0 0 66.66667%;
            max-width: 66.66667%; }
        .col-md-9 {
            -webkit-box-flex: 0;
            flex: 0 0 75%;
            max-width: 75%; }
        .col-md-10 {
            -webkit-box-flex: 0;
            flex: 0 0 83.33333%;
            max-width: 83.33333%; }
        .col-md-11 {
            -webkit-box-flex: 0;
            flex: 0 0 91.66667%;
            max-width: 91.66667%; }
        .col-md-12 {
            -webkit-box-flex: 0;
            flex: 0 0 100%;
            max-width: 100%; }
        .order-md-first {
            -webkit-box-ordinal-group: 0;
            order: -1; }
        .order-md-last {
            -webkit-box-ordinal-group: 14;
            order: 13; }
        .order-md-0 {
            -webkit-box-ordinal-group: 1;
            order: 0; }
        .order-md-1 {
            -webkit-box-ordinal-group: 2;
            order: 1; }
        .order-md-2 {
            -webkit-box-ordinal-group: 3;
            order: 2; }
        .order-md-3 {
            -webkit-box-ordinal-group: 4;
            order: 3; }
        .order-md-4 {
            -webkit-box-ordinal-group: 5;
            order: 4; }
        .order-md-5 {
            -webkit-box-ordinal-group: 6;
            order: 5; }
        .order-md-6 {
            -webkit-box-ordinal-group: 7;
            order: 6; }
        .order-md-7 {
            -webkit-box-ordinal-group: 8;
            order: 7; }
        .order-md-8 {
            -webkit-box-ordinal-group: 9;
            order: 8; }
        .order-md-9 {
            -webkit-box-ordinal-group: 10;
            order: 9; }
        .order-md-10 {
            -webkit-box-ordinal-group: 11;
            order: 10; }
        .order-md-11 {
            -webkit-box-ordinal-group: 12;
            order: 11; }
        .order-md-12 {
            -webkit-box-ordinal-group: 13;
            order: 12; }
        .offset-md-0 {
            margin-left: 0; }
        .offset-md-1 {
            margin-left: 8.33333%; }
        .offset-md-2 {
            margin-left: 16.66667%; }
        .offset-md-3 {
            margin-left: 25%; }
        .offset-md-4 {
            margin-left: 33.33333%; }
        .offset-md-5 {
            margin-left: 41.66667%; }
        .offset-md-6 {
            margin-left: 50%; }
        .offset-md-7 {
            margin-left: 58.33333%; }
        .offset-md-8 {
            margin-left: 66.66667%; }
        .offset-md-9 {
            margin-left: 75%; }
        .offset-md-10 {
            margin-left: 83.33333%; }
        .offset-md-11 {
            margin-left: 91.66667%; } }

    @media (min-width: 992px) {
        .col-lg {
            flex-basis: 0;
            -webkit-box-flex: 1;
            flex-grow: 1;
            max-width: 100%; }
        .col-lg-auto {
            -webkit-box-flex: 0;
            flex: 0 0 auto;
            width: auto;
            max-width: none; }
        .col-lg-1 {
            -webkit-box-flex: 0;
            flex: 0 0 8.33333%;
            max-width: 8.33333%; }
        .col-lg-2 {
            -webkit-box-flex: 0;
            flex: 0 0 16.66667%;
            max-width: 16.66667%; }
        .col-lg-3 {
            -webkit-box-flex: 0;
            flex: 0 0 25%;
            max-width: 25%; }
        .col-lg-4 {
            -webkit-box-flex: 0;
            flex: 0 0 33.33333%;
            max-width: 33.33333%; }
        .col-lg-5 {
            -webkit-box-flex: 0;
            flex: 0 0 41.66667%;
            max-width: 41.66667%; }
        .col-lg-6 {
            -webkit-box-flex: 0;
            flex: 0 0 50%;
            max-width: 50%; }
        .col-lg-7 {
            -webkit-box-flex: 0;
            flex: 0 0 58.33333%;
            max-width: 58.33333%; }
        .col-lg-8 {
            -webkit-box-flex: 0;
            flex: 0 0 66.66667%;
            max-width: 66.66667%; }
        .col-lg-9 {
            -webkit-box-flex: 0;
            flex: 0 0 75%;
            max-width: 75%; }
        .col-lg-10 {
            -webkit-box-flex: 0;
            flex: 0 0 83.33333%;
            max-width: 83.33333%; }
        .col-lg-11 {
            -webkit-box-flex: 0;
            flex: 0 0 91.66667%;
            max-width: 91.66667%; }
        .col-lg-12 {
            -webkit-box-flex: 0;
            flex: 0 0 100%;
            max-width: 100%; }
        .order-lg-first {
            -webkit-box-ordinal-group: 0;
            order: -1; }
        .order-lg-last {
            -webkit-box-ordinal-group: 14;
            order: 13; }
        .order-lg-0 {
            -webkit-box-ordinal-group: 1;
            order: 0; }
        .order-lg-1 {
            -webkit-box-ordinal-group: 2;
            order: 1; }
        .order-lg-2 {
            -webkit-box-ordinal-group: 3;
            order: 2; }
        .order-lg-3 {
            -webkit-box-ordinal-group: 4;
            order: 3; }
        .order-lg-4 {
            -webkit-box-ordinal-group: 5;
            order: 4; }
        .order-lg-5 {
            -webkit-box-ordinal-group: 6;
            order: 5; }
        .order-lg-6 {
            -webkit-box-ordinal-group: 7;
            order: 6; }
        .order-lg-7 {
            -webkit-box-ordinal-group: 8;
            order: 7; }
        .order-lg-8 {
            -webkit-box-ordinal-group: 9;
            order: 8; }
        .order-lg-9 {
            -webkit-box-ordinal-group: 10;
            order: 9; }
        .order-lg-10 {
            -webkit-box-ordinal-group: 11;
            order: 10; }
        .order-lg-11 {
            -webkit-box-ordinal-group: 12;
            order: 11; }
        .order-lg-12 {
            -webkit-box-ordinal-group: 13;
            order: 12; }
        .offset-lg-0 {
            margin-left: 0; }
        .offset-lg-1 {
            margin-left: 8.33333%; }
        .offset-lg-2 {
            margin-left: 16.66667%; }
        .offset-lg-3 {
            margin-left: 25%; }
        .offset-lg-4 {
            margin-left: 33.33333%; }
        .offset-lg-5 {
            margin-left: 41.66667%; }
        .offset-lg-6 {
            margin-left: 50%; }
        .offset-lg-7 {
            margin-left: 58.33333%; }
        .offset-lg-8 {
            margin-left: 66.66667%; }
        .offset-lg-9 {
            margin-left: 75%; }
        .offset-lg-10 {
            margin-left: 83.33333%; }
        .offset-lg-11 {
            margin-left: 91.66667%; } }

    @media (min-width: 1200px) {
        .col-xl {
            flex-basis: 0;
            -webkit-box-flex: 1;
            flex-grow: 1;
            max-width: 100%; }
        .col-xl-auto {
            -webkit-box-flex: 0;
            flex: 0 0 auto;
            width: auto;
            max-width: none; }
        .col-xl-1 {
            -webkit-box-flex: 0;
            flex: 0 0 8.33333%;
            max-width: 8.33333%; }
        .col-xl-2 {
            -webkit-box-flex: 0;
            flex: 0 0 16.66667%;
            max-width: 16.66667%; }
        .col-xl-3 {
            -webkit-box-flex: 0;
            flex: 0 0 25%;
            max-width: 25%; }
        .col-xl-4 {
            -webkit-box-flex: 0;
            flex: 0 0 33.33333%;
            max-width: 33.33333%; }
        .col-xl-5 {
            -webkit-box-flex: 0;
            flex: 0 0 41.66667%;
            max-width: 41.66667%; }
        .col-xl-6 {
            -webkit-box-flex: 0;
            flex: 0 0 50%;
            max-width: 50%; }
        .col-xl-7 {
            -webkit-box-flex: 0;
            flex: 0 0 58.33333%;
            max-width: 58.33333%; }
        .col-xl-8 {
            -webkit-box-flex: 0;
            flex: 0 0 66.66667%;
            max-width: 66.66667%; }
        .col-xl-9 {
            -webkit-box-flex: 0;
            flex: 0 0 75%;
            max-width: 75%; }
        .col-xl-10 {
            -webkit-box-flex: 0;
            flex: 0 0 83.33333%;
            max-width: 83.33333%; }
        .col-xl-11 {
            -webkit-box-flex: 0;
            flex: 0 0 91.66667%;
            max-width: 91.66667%; }
        .col-xl-12 {
            -webkit-box-flex: 0;
            flex: 0 0 100%;
            max-width: 100%; }
        .order-xl-first {
            -webkit-box-ordinal-group: 0;
            order: -1; }
        .order-xl-last {
            -webkit-box-ordinal-group: 14;
            order: 13; }
        .order-xl-0 {
            -webkit-box-ordinal-group: 1;
            order: 0; }
        .order-xl-1 {
            -webkit-box-ordinal-group: 2;
            order: 1; }
        .order-xl-2 {
            -webkit-box-ordinal-group: 3;
            order: 2; }
        .order-xl-3 {
            -webkit-box-ordinal-group: 4;
            order: 3; }
        .order-xl-4 {
            -webkit-box-ordinal-group: 5;
            order: 4; }
        .order-xl-5 {
            -webkit-box-ordinal-group: 6;
            order: 5; }
        .order-xl-6 {
            -webkit-box-ordinal-group: 7;
            order: 6; }
        .order-xl-7 {
            -webkit-box-ordinal-group: 8;
            order: 7; }
        .order-xl-8 {
            -webkit-box-ordinal-group: 9;
            order: 8; }
        .order-xl-9 {
            -webkit-box-ordinal-group: 10;
            order: 9; }
        .order-xl-10 {
            -webkit-box-ordinal-group: 11;
            order: 10; }
        .order-xl-11 {
            -webkit-box-ordinal-group: 12;
            order: 11; }
        .order-xl-12 {
            -webkit-box-ordinal-group: 13;
            order: 12; }
        .offset-xl-0 {
            margin-left: 0; }
        .offset-xl-1 {
            margin-left: 8.33333%; }
        .offset-xl-2 {
            margin-left: 16.66667%; }
        .offset-xl-3 {
            margin-left: 25%; }
        .offset-xl-4 {
            margin-left: 33.33333%; }
        .offset-xl-5 {
            margin-left: 41.66667%; }
        .offset-xl-6 {
            margin-left: 50%; }
        .offset-xl-7 {
            margin-left: 58.33333%; }
        .offset-xl-8 {
            margin-left: 66.66667%; }
        .offset-xl-9 {
            margin-left: 75%; }
        .offset-xl-10 {
            margin-left: 83.33333%; }
        .offset-xl-11 {
            margin-left: 91.66667%; } }

    .table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 1rem;
        background-color: transparent; }
    .table th,
    .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid rgba(0, 0, 0, 0.06); }
    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid rgba(0, 0, 0, 0.06); }
    .table tbody + tbody {
        border-top: 2px solid rgba(0, 0, 0, 0.06); }
    .table .table {
        background-color: #fafafa; }

    .table-sm th,
    .table-sm td {
        padding: 0.3rem; }

    .table-bordered {
        border: 1px solid rgba(0, 0, 0, 0.06); }
    .table-bordered th,
    .table-bordered td {
        border: 1px solid rgba(0, 0, 0, 0.06); }
    .table-bordered thead th,
    .table-bordered thead td {
        border-bottom-width: 2px; }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.05); }

    .table-hover tbody tr:hover {
        background-color: rgba(0, 0, 0, 0.075); }

    .table-primary,
    .table-primary > th,
    .table-primary > td {
        background-color: #c1e2fc; }

    .table-hover .table-primary:hover {
        background-color: #a9d7fb; }
    .table-hover .table-primary:hover > td,
    .table-hover .table-primary:hover > th {
        background-color: #a9d7fb; }

    .table-secondary,
    .table-secondary > th,
    .table-secondary > td {
        background-color: #d6d8db; }

    .table-hover .table-secondary:hover {
        background-color: #c8cbcf; }
    .table-hover .table-secondary:hover > td,
    .table-hover .table-secondary:hover > th {
        background-color: #c8cbcf; }

    .table-success,
    .table-success > th,
    .table-success > td {
        background-color: #cde9ce; }

    .table-hover .table-success:hover {
        background-color: #bbe1bd; }
    .table-hover .table-success:hover > td,
    .table-hover .table-success:hover > th {
        background-color: #bbe1bd; }

    .table-info,
    .table-info > th,
    .table-info > td {
        background-color: #b8ecf3; }

    .table-hover .table-info:hover {
        background-color: #a2e6ef; }
    .table-hover .table-info:hover > td,
    .table-hover .table-info:hover > th {
        background-color: #a2e6ef; }

    .table-warning,
    .table-warning > th,
    .table-warning > td {
        background-color: #fff9c8; }

    .table-hover .table-warning:hover {
        background-color: #fff6af; }
    .table-hover .table-warning:hover > td,
    .table-hover .table-warning:hover > th {
        background-color: #fff6af; }

    .table-danger,
    .table-danger > th,
    .table-danger > td {
        background-color: #fccac7; }

    .table-hover .table-danger:hover {
        background-color: #fbb3af; }
    .table-hover .table-danger:hover > td,
    .table-hover .table-danger:hover > th {
        background-color: #fbb3af; }

    .table-light,
    .table-light > th,
    .table-light > td {
        background-color: #fdfdfe; }

    .table-hover .table-light:hover {
        background-color: #ececf6; }
    .table-hover .table-light:hover > td,
    .table-hover .table-light:hover > th {
        background-color: #ececf6; }

    .table-dark,
    .table-dark > th,
    .table-dark > td {
        background-color: #c6c8ca; }

    .table-hover .table-dark:hover {
        background-color: #b9bbbe; }
    .table-hover .table-dark:hover > td,
    .table-hover .table-dark:hover > th {
        background-color: #b9bbbe; }

    .table-active,
    .table-active > th,
    .table-active > td {
        background-color: rgba(0, 0, 0, 0.075); }

    .table-hover .table-active:hover {
        background-color: rgba(0, 0, 0, 0.075); }
    .table-hover .table-active:hover > td,
    .table-hover .table-active:hover > th {
        background-color: rgba(0, 0, 0, 0.075); }

    .table .thead-dark th {
        color: #fafafa;
        background-color: #212529;
        border-color: #32383e; }

    .table .thead-light th {
        color: #495057;
        background-color: #e9ecef;
        border-color: rgba(0, 0, 0, 0.06); }

    .table-dark {
        color: #fafafa;
        background-color: #212529; }
    .table-dark th,
    .table-dark td,
    .table-dark thead th {
        border-color: #32383e; }
    .table-dark.table-bordered {
        border: 0; }
    .table-dark.table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(255, 255, 255, 0.05); }
    .table-dark.table-hover tbody tr:hover {
        background-color: rgba(255, 255, 255, 0.075); }

    @media (max-width: 575.98px) {
        .table-responsive-sm {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar; }
        .table-responsive-sm > .table-bordered {
            border: 0; } }

    @media (max-width: 767.98px) {
        .table-responsive-md {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar; }
        .table-responsive-md > .table-bordered {
            border: 0; } }

    @media (max-width: 991.98px) {
        .table-responsive-lg {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar; }
        .table-responsive-lg > .table-bordered {
            border: 0; } }

    @media (max-width: 1199.98px) {
        .table-responsive-xl {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar; }
        .table-responsive-xl > .table-bordered {
            border: 0; } }

    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar; }
    .table-responsive > .table-bordered {
        border: 0; }

    .form-control {
        display: block;
        width: 100%;
        padding: 0.4375rem 0;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: rgba(0, 0, 0, 0);
        background-clip: padding-box;
        border: 1px solid #d2d2d2;
        border-radius: 0;
        box-shadow: none;
        -webkit-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
    .form-control::-ms-expand {
        background-color: transparent;
        border: 0; }
    .form-control:focus {
        color: #495057;
        background-color: rgba(0, 0, 0, 0);
        border-color: #9acffa;
        outline: 0;
        box-shadow: none, 0 0 0 0.2rem rgba(33, 150, 243, 0.25); }
    .form-control::-webkit-input-placeholder {
        color: #6c757d;
        opacity: 1; }
    .form-control::-moz-placeholder {
        color: #6c757d;
        opacity: 1; }
    .form-control:-ms-input-placeholder {
        color: #6c757d;
        opacity: 1; }
    .form-control::-ms-input-placeholder {
        color: #6c757d;
        opacity: 1; }
    .form-control::placeholder {
        color: #6c757d;
        opacity: 1; }
    .form-control:disabled, .form-control[readonly] {
        background-color: #e9ecef;
        opacity: 1; }

    select.form-control:not([size]):not([multiple]) {
        height: calc(2.4375rem + 2px); }

    select.form-control:focus::-ms-value {
        color: #495057;
        background-color: rgba(0, 0, 0, 0); }

    .form-control-file,
    .form-control-range {
        display: block;
        width: 100%; }

    .col-form-label {
        padding-top: calc(0.4375rem + 1px);
        padding-bottom: calc(0.4375rem + 1px);
        margin-bottom: 0;
        font-size: inherit;
        line-height: 1.5; }

    .col-form-label-lg {
        padding-top: calc(0.5625rem + 1px);
        padding-bottom: calc(0.5625rem + 1px);
        font-size: 1.25rem;
        line-height: 1.5; }

    .col-form-label-sm {
        padding-top: calc(0.25rem + 1px);
        padding-bottom: calc(0.25rem + 1px);
        font-size: 0.875rem;
        line-height: 1.5; }

    .form-control-plaintext {
        display: block;
        width: 100%;
        padding-top: 0.4375rem;
        padding-bottom: 0.4375rem;
        margin-bottom: 0;
        line-height: 1.5;
        background-color: transparent;
        border: solid transparent;
        border-width: 1px 0; }
    .form-control-plaintext.form-control-sm, .input-group-sm > .form-control-plaintext.form-control,
    .input-group-sm > .input-group-prepend > .form-control-plaintext.input-group-text,
    .input-group-sm > .input-group-append > .form-control-plaintext.input-group-text,
    .input-group-sm > .input-group-prepend > .form-control-plaintext.btn,
    .input-group-sm > .input-group-append > .form-control-plaintext.btn, .form-control-plaintext.form-control-lg, .input-group-lg > .form-control-plaintext.form-control,
    .input-group-lg > .input-group-prepend > .form-control-plaintext.input-group-text,
    .input-group-lg > .input-group-append > .form-control-plaintext.input-group-text,
    .input-group-lg > .input-group-prepend > .form-control-plaintext.btn,
    .input-group-lg > .input-group-append > .form-control-plaintext.btn {
        padding-right: 0;
        padding-left: 0; }

    .form-control-sm, .input-group-sm > .form-control,
    .input-group-sm > .input-group-prepend > .input-group-text,
    .input-group-sm > .input-group-append > .input-group-text,
    .input-group-sm > .input-group-prepend > .btn,
    .input-group-sm > .input-group-append > .btn {
        padding: 0.25rem 0;
        font-size: 0.875rem;
        line-height: 1.5;
        border-radius: 0.2rem; }

    select.form-control-sm:not([size]):not([multiple]), .input-group-sm > select.form-control:not([size]):not([multiple]),
    .input-group-sm > .input-group-prepend > select.input-group-text:not([size]):not([multiple]),
    .input-group-sm > .input-group-append > select.input-group-text:not([size]):not([multiple]),
    .input-group-sm > .input-group-prepend > select.btn:not([size]):not([multiple]),
    .input-group-sm > .input-group-append > select.btn:not([size]):not([multiple]) {
        height: calc(2.125rem + 2px); }

    .form-control-lg, .input-group-lg > .form-control,
    .input-group-lg > .input-group-prepend > .input-group-text,
    .input-group-lg > .input-group-append > .input-group-text,
    .input-group-lg > .input-group-prepend > .btn,
    .input-group-lg > .input-group-append > .btn {
        padding: 0.5625rem 0;
        font-size: 1.25rem;
        line-height: 1.5;
        border-radius: 0.3rem; }

    select.form-control-lg:not([size]):not([multiple]), .input-group-lg > select.form-control:not([size]):not([multiple]),
    .input-group-lg > .input-group-prepend > select.input-group-text:not([size]):not([multiple]),
    .input-group-lg > .input-group-append > select.input-group-text:not([size]):not([multiple]),
    .input-group-lg > .input-group-prepend > select.btn:not([size]):not([multiple]),
    .input-group-lg > .input-group-append > select.btn:not([size]):not([multiple]) {
        height: calc(4.125rem + 2px); }

    .form-group {
        margin-bottom: 1rem; }

    .form-text {
        display: block;
        margin-top: 0.25rem; }

    .form-row {
        display: -webkit-box;
        display: flex;
        flex-wrap: wrap;
        margin-right: -5px;
        margin-left: -5px; }
    .form-row > .col,
    .form-row > [class*="col-"] {
        padding-right: 5px;
        padding-left: 5px; }

    .form-check {
        position: relative;
        display: block;
        padding-left: 1.25rem; }

    .form-check-input {
        position: absolute;
        margin-top: 0.3rem;
        margin-left: -1.25rem; }
    .form-check-input:disabled ~ .form-check-label {
        color: #6c757d; }

    .form-check-label {
        margin-bottom: 0; }

    .form-check-inline {
        display: -webkit-inline-box;
        display: inline-flex;
        -webkit-box-align: center;
        align-items: center;
        padding-left: 0;
        margin-right: 0.75rem; }
    .form-check-inline .form-check-input {
        position: static;
        margin-top: 0;
        margin-right: 0.3125rem;
        margin-left: 0; }

    .valid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #4caf50; }

    .valid-tooltip {
        position: absolute;
        top: 100%;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: .5rem;
        margin-top: .1rem;
        font-size: .875rem;
        line-height: 1;
        color: #fff;
        background-color: rgba(76, 175, 80, 0.8);
        border-radius: .2rem; }

    .was-validated .form-control:valid, .form-control.is-valid, .was-validated
    .custom-select:valid,
    .custom-select.is-valid {
        border-color: #4caf50; }
    .was-validated .form-control:valid:focus, .form-control.is-valid:focus, .was-validated
    .custom-select:valid:focus,
    .custom-select.is-valid:focus {
        border-color: #4caf50;
        box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25); }
    .was-validated .form-control:valid ~ .valid-feedback,
    .was-validated .form-control:valid ~ .valid-tooltip, .form-control.is-valid ~ .valid-feedback,
    .form-control.is-valid ~ .valid-tooltip, .was-validated
    .custom-select:valid ~ .valid-feedback,
    .was-validated
    .custom-select:valid ~ .valid-tooltip,
    .custom-select.is-valid ~ .valid-feedback,
    .custom-select.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
        color: #4caf50; }

    .was-validated .form-check-input:valid ~ .valid-feedback,
    .was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
    .form-check-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
        color: #4caf50; }
    .was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
        background-color: #a3d7a5; }

    .was-validated .custom-control-input:valid ~ .valid-feedback,
    .was-validated .custom-control-input:valid ~ .valid-tooltip, .custom-control-input.is-valid ~ .valid-feedback,
    .custom-control-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
        background-color: #6ec071; }

    .was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
        box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(76, 175, 80, 0.25); }

    .was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
        border-color: #4caf50; }
    .was-validated .custom-file-input:valid ~ .custom-file-label::before, .custom-file-input.is-valid ~ .custom-file-label::before {
        border-color: inherit; }

    .was-validated .custom-file-input:valid ~ .valid-feedback,
    .was-validated .custom-file-input:valid ~ .valid-tooltip, .custom-file-input.is-valid ~ .valid-feedback,
    .custom-file-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
        box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25); }

    .invalid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #f44336; }

    .invalid-tooltip {
        position: absolute;
        top: 100%;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: .5rem;
        margin-top: .1rem;
        font-size: .875rem;
        line-height: 1;
        color: #fff;
        background-color: rgba(244, 67, 54, 0.8);
        border-radius: .2rem; }

    .was-validated .form-control:invalid, .form-control.is-invalid, .was-validated
    .custom-select:invalid,
    .custom-select.is-invalid {
        border-color: #f44336; }
    .was-validated .form-control:invalid:focus, .form-control.is-invalid:focus, .was-validated
    .custom-select:invalid:focus,
    .custom-select.is-invalid:focus {
        border-color: #f44336;
        box-shadow: 0 0 0 0.2rem rgba(244, 67, 54, 0.25); }
    .was-validated .form-control:invalid ~ .invalid-feedback,
    .was-validated .form-control:invalid ~ .invalid-tooltip, .form-control.is-invalid ~ .invalid-feedback,
    .form-control.is-invalid ~ .invalid-tooltip, .was-validated
    .custom-select:invalid ~ .invalid-feedback,
    .was-validated
    .custom-select:invalid ~ .invalid-tooltip,
    .custom-select.is-invalid ~ .invalid-feedback,
    .custom-select.is-invalid ~ .invalid-tooltip {
        display: block; }

    .was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
        color: #f44336; }

    .was-validated .form-check-input:invalid ~ .invalid-feedback,
    .was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
    .form-check-input.is-invalid ~ .invalid-tooltip {
        display: block; }

    .was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
        color: #f44336; }
    .was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
        background-color: #fbb4af; }

    .was-validated .custom-control-input:invalid ~ .invalid-feedback,
    .was-validated .custom-control-input:invalid ~ .invalid-tooltip, .custom-control-input.is-invalid ~ .invalid-feedback,
    .custom-control-input.is-invalid ~ .invalid-tooltip {
        display: block; }

    .was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
        background-color: #f77066; }

    .was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
        box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(244, 67, 54, 0.25); }

    .was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
        border-color: #f44336; }
    .was-validated .custom-file-input:invalid ~ .custom-file-label::before, .custom-file-input.is-invalid ~ .custom-file-label::before {
        border-color: inherit; }

    .was-validated .custom-file-input:invalid ~ .invalid-feedback,
    .was-validated .custom-file-input:invalid ~ .invalid-tooltip, .custom-file-input.is-invalid ~ .invalid-feedback,
    .custom-file-input.is-invalid ~ .invalid-tooltip {
        display: block; }

    .was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
        box-shadow: 0 0 0 0.2rem rgba(244, 67, 54, 0.25); }

    .form-inline {
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        flex-flow: row wrap;
        -webkit-box-align: center;
        align-items: center; }
    .form-inline .form-check {
        width: 100%; }
    @media (min-width: 576px) {
        .form-inline label {
            display: -webkit-box;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            margin-bottom: 0; }
        .form-inline .form-group {
            display: -webkit-box;
            display: flex;
            -webkit-box-flex: 0;
            flex: 0 0 auto;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-flow: row wrap;
            -webkit-box-align: center;
            align-items: center;
            margin-bottom: 0; }
        .form-inline .form-control {
            display: inline-block;
            width: auto;
            vertical-align: middle; }
        .form-inline .form-control-plaintext {
            display: inline-block; }
        .form-inline .input-group {
            width: auto; }
        .form-inline .form-check {
            display: -webkit-box;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            width: auto;
            padding-left: 0; }
        .form-inline .form-check-input {
            position: relative;
            margin-top: 0;
            margin-right: 0.25rem;
            margin-left: 0; }
        .form-inline .custom-control {
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center; }
        .form-inline .custom-control-label {
            margin-bottom: 0; } }

    .btn {
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border: 1px solid transparent;
        padding: 0.46875rem 1rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
    .btn:hover, .btn:focus {
        text-decoration: none; }
    .btn:focus, .btn.focus {
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(33, 150, 243, 0.25); }
    .btn.disabled, .btn:disabled {
        opacity: 0.65;
        box-shadow: none; }
    .btn:not(:disabled):not(.disabled) {
        cursor: pointer; }
    .btn:not(:disabled):not(.disabled):active, .btn:not(:disabled):not(.disabled).active {
        background-image: none;
        box-shadow: none; }
    .btn:not(:disabled):not(.disabled):active:focus, .btn:not(:disabled):not(.disabled).active:focus {
        box-shadow: 0 0 0 0.2rem rgba(33, 150, 243, 0.25), none; }

    a.btn.disabled,
    fieldset:disabled a.btn {
        pointer-events: none; }

    .btn-primary {
        color: #ffffff;
        background-color: #2196f3;
        border-color: #2196f3;
        box-shadow: none; }
    .btn-primary:hover {
        color: #ffffff;
        background-color: #0c83e2;
        border-color: #0c7cd5; }
    .btn-primary:focus, .btn-primary.focus {
        box-shadow: none, 0 0 0 0.2rem rgba(33, 150, 243, 0.5); }
    .btn-primary.disabled, .btn-primary:disabled {
        color: #ffffff;
        background-color: #2196f3;
        border-color: #2196f3; }
    .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
    .show > .btn-primary.dropdown-toggle {
        color: #ffffff;
        background-color: #0c7cd5;
        border-color: #0b75c9; }
    .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-primary.dropdown-toggle:focus {
        box-shadow: none, 0 0 0 0.2rem rgba(33, 150, 243, 0.5); }

    .btn-secondary {
        color: #ffffff;
        background-color: #6c757d;
        border-color: #6c757d;
        box-shadow: none; }
    .btn-secondary:hover {
        color: #ffffff;
        background-color: #5a6268;
        border-color: #545b62; }
    .btn-secondary:focus, .btn-secondary.focus {
        box-shadow: none, 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }
    .btn-secondary.disabled, .btn-secondary:disabled {
        color: #ffffff;
        background-color: #6c757d;
        border-color: #6c757d; }
    .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
    .show > .btn-secondary.dropdown-toggle {
        color: #ffffff;
        background-color: #545b62;
        border-color: #4e555b; }
    .btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-secondary.dropdown-toggle:focus {
        box-shadow: none, 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }

    .btn-success {
        color: #ffffff;
        background-color: #4caf50;
        border-color: #4caf50;
        box-shadow: none; }
    .btn-success:hover {
        color: #ffffff;
        background-color: #409444;
        border-color: #3d8b40; }
    .btn-success:focus, .btn-success.focus {
        box-shadow: none, 0 0 0 0.2rem rgba(76, 175, 80, 0.5); }
    .btn-success.disabled, .btn-success:disabled {
        color: #ffffff;
        background-color: #4caf50;
        border-color: #4caf50; }
    .btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
    .show > .btn-success.dropdown-toggle {
        color: #ffffff;
        background-color: #3d8b40;
        border-color: #39833c; }
    .btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-success.dropdown-toggle:focus {
        box-shadow: none, 0 0 0 0.2rem rgba(76, 175, 80, 0.5); }

    .btn-info {
        color: #ffffff;
        background-color: #00bcd4;
        border-color: #00bcd4;
        box-shadow: none; }
    .btn-info:hover {
        color: #ffffff;
        background-color: #009aae;
        border-color: #008fa1; }
    .btn-info:focus, .btn-info.focus {
        box-shadow: none, 0 0 0 0.2rem rgba(0, 188, 212, 0.5); }
    .btn-info.disabled, .btn-info:disabled {
        color: #ffffff;
        background-color: #00bcd4;
        border-color: #00bcd4; }
    .btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
    .show > .btn-info.dropdown-toggle {
        color: #ffffff;
        background-color: #008fa1;
        border-color: #008394; }
    .btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-info.dropdown-toggle:focus {
        box-shadow: none, 0 0 0 0.2rem rgba(0, 188, 212, 0.5); }

    .btn-warning {
        color: #212529;
        background-color: #ffeb3b;
        border-color: #ffeb3b;
        box-shadow: none; }
    .btn-warning:hover {
        color: #212529;
        background-color: #ffe715;
        border-color: #ffe608; }
    .btn-warning:focus, .btn-warning.focus {
        box-shadow: none, 0 0 0 0.2rem rgba(255, 235, 59, 0.5); }
    .btn-warning.disabled, .btn-warning:disabled {
        color: #212529;
        background-color: #ffeb3b;
        border-color: #ffeb3b; }
    .btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
    .show > .btn-warning.dropdown-toggle {
        color: #212529;
        background-color: #ffe608;
        border-color: #fae100; }
    .btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-warning.dropdown-toggle:focus {
        box-shadow: none, 0 0 0 0.2rem rgba(255, 235, 59, 0.5); }

    .btn-danger {
        color: #ffffff;
        background-color: #f44336;
        border-color: #f44336;
        box-shadow: none; }
    .btn-danger:hover {
        color: #ffffff;
        background-color: #f22112;
        border-color: #ea1c0d; }
    .btn-danger:focus, .btn-danger.focus {
        box-shadow: none, 0 0 0 0.2rem rgba(244, 67, 54, 0.5); }
    .btn-danger.disabled, .btn-danger:disabled {
        color: #ffffff;
        background-color: #f44336;
        border-color: #f44336; }
    .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
    .show > .btn-danger.dropdown-toggle {
        color: #ffffff;
        background-color: #ea1c0d;
        border-color: #de1b0c; }
    .btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-danger.dropdown-toggle:focus {
        box-shadow: none, 0 0 0 0.2rem rgba(244, 67, 54, 0.5); }

    .btn-light {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa;
        box-shadow: none; }
    .btn-light:hover {
        color: #212529;
        background-color: #e2e6ea;
        border-color: #dae0e5; }
    .btn-light:focus, .btn-light.focus {
        box-shadow: none, 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }
    .btn-light.disabled, .btn-light:disabled {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa; }
    .btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
    .show > .btn-light.dropdown-toggle {
        color: #212529;
        background-color: #dae0e5;
        border-color: #d3d9df; }
    .btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-light.dropdown-toggle:focus {
        box-shadow: none, 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }

    .btn-dark {
        color: #ffffff;
        background-color: #343a40;
        border-color: #343a40;
        box-shadow: none; }
    .btn-dark:hover {
        color: #ffffff;
        background-color: #23272b;
        border-color: #1d2124; }
    .btn-dark:focus, .btn-dark.focus {
        box-shadow: none, 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }
    .btn-dark.disabled, .btn-dark:disabled {
        color: #ffffff;
        background-color: #343a40;
        border-color: #343a40; }
    .btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
    .show > .btn-dark.dropdown-toggle {
        color: #ffffff;
        background-color: #1d2124;
        border-color: #171a1d; }
    .btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-dark.dropdown-toggle:focus {
        box-shadow: none, 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }

    .btn-outline-primary {
        color: #2196f3;
        background-color: transparent;
        background-image: none;
        border-color: #2196f3; }
    .btn-outline-primary:hover {
        color: #ffffff;
        background-color: #2196f3;
        border-color: #2196f3; }
    .btn-outline-primary:focus, .btn-outline-primary.focus {
        box-shadow: 0 0 0 0.2rem rgba(33, 150, 243, 0.5); }
    .btn-outline-primary.disabled, .btn-outline-primary:disabled {
        color: #2196f3;
        background-color: transparent; }
    .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
    .show > .btn-outline-primary.dropdown-toggle {
        color: #ffffff;
        background-color: #2196f3;
        border-color: #2196f3; }
    .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-primary.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(33, 150, 243, 0.5); }

    .btn-outline-secondary {
        color: #6c757d;
        background-color: transparent;
        background-image: none;
        border-color: #6c757d; }
    .btn-outline-secondary:hover {
        color: #ffffff;
        background-color: #6c757d;
        border-color: #6c757d; }
    .btn-outline-secondary:focus, .btn-outline-secondary.focus {
        box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }
    .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
        color: #6c757d;
        background-color: transparent; }
    .btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
    .show > .btn-outline-secondary.dropdown-toggle {
        color: #ffffff;
        background-color: #6c757d;
        border-color: #6c757d; }
    .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-secondary.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }

    .btn-outline-success {
        color: #4caf50;
        background-color: transparent;
        background-image: none;
        border-color: #4caf50; }
    .btn-outline-success:hover {
        color: #ffffff;
        background-color: #4caf50;
        border-color: #4caf50; }
    .btn-outline-success:focus, .btn-outline-success.focus {
        box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.5); }
    .btn-outline-success.disabled, .btn-outline-success:disabled {
        color: #4caf50;
        background-color: transparent; }
    .btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active,
    .show > .btn-outline-success.dropdown-toggle {
        color: #ffffff;
        background-color: #4caf50;
        border-color: #4caf50; }
    .btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-success.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.5); }

    .btn-outline-info {
        color: #00bcd4;
        background-color: transparent;
        background-image: none;
        border-color: #00bcd4; }
    .btn-outline-info:hover {
        color: #ffffff;
        background-color: #00bcd4;
        border-color: #00bcd4; }
    .btn-outline-info:focus, .btn-outline-info.focus {
        box-shadow: 0 0 0 0.2rem rgba(0, 188, 212, 0.5); }
    .btn-outline-info.disabled, .btn-outline-info:disabled {
        color: #00bcd4;
        background-color: transparent; }
    .btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
    .show > .btn-outline-info.dropdown-toggle {
        color: #ffffff;
        background-color: #00bcd4;
        border-color: #00bcd4; }
    .btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-info.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(0, 188, 212, 0.5); }

    .btn-outline-warning {
        color: #ffeb3b;
        background-color: transparent;
        background-image: none;
        border-color: #ffeb3b; }
    .btn-outline-warning:hover {
        color: #212529;
        background-color: #ffeb3b;
        border-color: #ffeb3b; }
    .btn-outline-warning:focus, .btn-outline-warning.focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 235, 59, 0.5); }
    .btn-outline-warning.disabled, .btn-outline-warning:disabled {
        color: #ffeb3b;
        background-color: transparent; }
    .btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
    .show > .btn-outline-warning.dropdown-toggle {
        color: #212529;
        background-color: #ffeb3b;
        border-color: #ffeb3b; }
    .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-warning.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 235, 59, 0.5); }

    .btn-outline-danger {
        color: #f44336;
        background-color: transparent;
        background-image: none;
        border-color: #f44336; }
    .btn-outline-danger:hover {
        color: #ffffff;
        background-color: #f44336;
        border-color: #f44336; }
    .btn-outline-danger:focus, .btn-outline-danger.focus {
        box-shadow: 0 0 0 0.2rem rgba(244, 67, 54, 0.5); }
    .btn-outline-danger.disabled, .btn-outline-danger:disabled {
        color: #f44336;
        background-color: transparent; }
    .btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
    .show > .btn-outline-danger.dropdown-toggle {
        color: #ffffff;
        background-color: #f44336;
        border-color: #f44336; }
    .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-danger.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(244, 67, 54, 0.5); }

    .btn-outline-light {
        color: #f8f9fa;
        background-color: transparent;
        background-image: none;
        border-color: #f8f9fa; }
    .btn-outline-light:hover {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa; }
    .btn-outline-light:focus, .btn-outline-light.focus {
        box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }
    .btn-outline-light.disabled, .btn-outline-light:disabled {
        color: #f8f9fa;
        background-color: transparent; }
    .btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
    .show > .btn-outline-light.dropdown-toggle {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa; }
    .btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-light.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }

    .btn-outline-dark {
        color: #343a40;
        background-color: transparent;
        background-image: none;
        border-color: #343a40; }
    .btn-outline-dark:hover {
        color: #ffffff;
        background-color: #343a40;
        border-color: #343a40; }
    .btn-outline-dark:focus, .btn-outline-dark.focus {
        box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }
    .btn-outline-dark.disabled, .btn-outline-dark:disabled {
        color: #343a40;
        background-color: transparent; }
    .btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
    .show > .btn-outline-dark.dropdown-toggle {
        color: #ffffff;
        background-color: #343a40;
        border-color: #343a40; }
    .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-dark.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }

    .btn-link {
        font-weight: 400;
        color: #9c27b0;
        background-color: transparent; }
    .btn-link:hover {
        color: #0a6ebd;
        text-decoration: underline;
        background-color: transparent;
        border-color: transparent; }
    .btn-link:focus, .btn-link.focus {
        text-decoration: underline;
        border-color: transparent;
        box-shadow: none; }
    .btn-link:disabled, .btn-link.disabled {
        color: #999; }

    .btn-lg, .btn-group-lg > .btn {
        padding: 1.125rem 2.25rem;
        font-size: 1.25rem;
        line-height: 1.5;
        border-radius: 0.3rem; }

    .btn-sm, .btn-group-sm > .btn {
        padding: 0.40625rem 1.25rem;
        font-size: 0.875rem;
        line-height: 1.5;
        border-radius: 0.1875rem; }

    .btn-block {
        display: block;
        width: 100%; }
    .btn-block + .btn-block {
        margin-top: 0.5rem; }

    input[type="submit"].btn-block,
    input[type="reset"].btn-block,
    input[type="button"].btn-block {
        width: 100%; }

    .fade {
        opacity: 0;
        -webkit-transition: opacity 0.15s linear;
        transition: opacity 0.15s linear; }
    .fade.show {
        opacity: 1; }

    .collapse {
        display: none; }
    .collapse.show {
        display: block; }

    tr.collapse.show {
        display: table-row; }

    tbody.collapse.show {
        display: table-row-group; }

    .collapsing {
        position: relative;
        height: 0;
        overflow: hidden;
        -webkit-transition: height 0.35s ease;
        transition: height 0.35s ease; }

    .dropup,
    .dropdown {
        position: relative; }

    .dropdown-toggle::after {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid;
        border-right: 0.3em solid transparent;
        border-bottom: 0;
        border-left: 0.3em solid transparent; }

    .dropdown-toggle:empty::after {
        margin-left: 0; }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 10rem;
        padding: 0.5rem 0;
        margin: 0.125rem 0 0;
        font-size: 1rem;
        color: #212529;
        text-align: left;
        list-style: none;
        background-color: #ffffff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.15);
        border-radius: 0.25rem;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }

    .dropup .dropdown-menu {
        margin-top: 0;
        margin-bottom: 0.125rem; }

    .dropup .dropdown-toggle::after {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0;
        border-right: 0.3em solid transparent;
        border-bottom: 0.3em solid;
        border-left: 0.3em solid transparent; }

    .dropup .dropdown-toggle:empty::after {
        margin-left: 0; }

    .dropright .dropdown-menu {
        margin-top: 0;
        margin-left: 0.125rem; }

    .dropright .dropdown-toggle::after {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid transparent;
        border-bottom: 0.3em solid transparent;
        border-left: 0.3em solid; }

    .dropright .dropdown-toggle:empty::after {
        margin-left: 0; }

    .dropright .dropdown-toggle::after {
        vertical-align: 0; }

    .dropleft .dropdown-menu {
        margin-top: 0;
        margin-right: 0.125rem; }

    .dropleft .dropdown-toggle::after {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: ""; }

    .dropleft .dropdown-toggle::after {
        display: none; }

    .dropleft .dropdown-toggle::before {
        display: inline-block;
        width: 0;
        height: 0;
        margin-right: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid transparent;
        border-right: 0.3em solid;
        border-bottom: 0.3em solid transparent; }

    .dropleft .dropdown-toggle:empty::after {
        margin-left: 0; }

    .dropleft .dropdown-toggle::before {
        vertical-align: 0; }

    .dropdown-divider {
        height: 0;
        margin: 0.5rem 0;
        overflow: hidden;
        border-top: 1px solid #e9ecef; }

    .dropdown-item {
        display: block;
        width: 100%;
        padding: 0.625rem 1.25rem;
        clear: both;
        font-weight: 400;
        color: #212529;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0; }
    .dropdown-item:hover, .dropdown-item:focus {
        color: #16181b;
        text-decoration: none;
        background-color: #f8f9fa; }
    .dropdown-item.active, .dropdown-item:active {
        color: #ffffff;
        text-decoration: none;
        background-color: #2196f3; }
    .dropdown-item.disabled, .dropdown-item:disabled {
        color: #6c757d;
        background-color: transparent; }

    .dropdown-menu.show {
        display: block; }

    .dropdown-header {
        display: block;
        padding: 0.5rem 1.25rem;
        margin-bottom: 0;
        font-size: 0.875rem;
        color: #6c757d;
        white-space: nowrap; }

    .btn-group,
    .btn-group-vertical {
        position: relative;
        display: -webkit-inline-box;
        display: inline-flex;
        vertical-align: middle; }
    .btn-group > .btn,
    .btn-group-vertical > .btn {
        position: relative;
        -webkit-box-flex: 0;
        flex: 0 1 auto; }
    .btn-group > .btn:hover,
    .btn-group-vertical > .btn:hover {
        z-index: 1; }
    .btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
    .btn-group-vertical > .btn:focus,
    .btn-group-vertical > .btn:active,
    .btn-group-vertical > .btn.active {
        z-index: 1; }
    .btn-group .btn + .btn,
    .btn-group .btn + .btn-group,
    .btn-group .btn-group + .btn,
    .btn-group .btn-group + .btn-group,
    .btn-group-vertical .btn + .btn,
    .btn-group-vertical .btn + .btn-group,
    .btn-group-vertical .btn-group + .btn,
    .btn-group-vertical .btn-group + .btn-group {
        margin-left: -1px; }

    .btn-toolbar {
        display: -webkit-box;
        display: flex;
        flex-wrap: wrap;
        -webkit-box-pack: start;
        justify-content: flex-start; }
    .btn-toolbar .input-group {
        width: auto; }

    .btn-group > .btn:first-child {
        margin-left: 0; }

    .btn-group > .btn:not(:last-child):not(.dropdown-toggle),
    .btn-group > .btn-group:not(:last-child) > .btn {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0; }

    .btn-group > .btn:not(:first-child),
    .btn-group > .btn-group:not(:first-child) > .btn {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0; }

    .dropdown-toggle-split {
        padding-right: 0.75rem;
        padding-left: 0.75rem; }
    .dropdown-toggle-split::after {
        margin-left: 0; }

    .btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
        padding-right: 0.9375rem;
        padding-left: 0.9375rem; }

    .btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
        padding-right: 1.6875rem;
        padding-left: 1.6875rem; }

    .btn-group.show .dropdown-toggle {
        box-shadow: none; }
    .btn-group.show .dropdown-toggle.btn-link {
        box-shadow: none; }

    .btn-group-vertical {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        -webkit-box-align: start;
        align-items: flex-start;
        -webkit-box-pack: center;
        justify-content: center; }
    .btn-group-vertical .btn,
    .btn-group-vertical .btn-group {
        width: 100%; }
    .btn-group-vertical > .btn + .btn,
    .btn-group-vertical > .btn + .btn-group,
    .btn-group-vertical > .btn-group + .btn,
    .btn-group-vertical > .btn-group + .btn-group {
        margin-top: -1px;
        margin-left: 0; }
    .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
    .btn-group-vertical > .btn-group:not(:last-child) > .btn {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0; }
    .btn-group-vertical > .btn:not(:first-child),
    .btn-group-vertical > .btn-group:not(:first-child) > .btn {
        border-top-left-radius: 0;
        border-top-right-radius: 0; }

    .btn-group-toggle > .btn,
    .btn-group-toggle > .btn-group > .btn {
        margin-bottom: 0; }
    .btn-group-toggle > .btn input[type="radio"],
    .btn-group-toggle > .btn input[type="checkbox"],
    .btn-group-toggle > .btn-group > .btn input[type="radio"],
    .btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
        position: absolute;
        clip: rect(0, 0, 0, 0);
        pointer-events: none; }

    .input-group {
        position: relative;
        display: -webkit-box;
        display: flex;
        flex-wrap: wrap;
        -webkit-box-align: stretch;
        align-items: stretch;
        width: 100%; }
    .input-group > .form-control,
    .input-group > .custom-select,
    .input-group > .custom-file {
        position: relative;
        -webkit-box-flex: 1;
        flex: 1 1 auto;
        width: 1%;
        margin-bottom: 0; }
    .input-group > .form-control:focus,
    .input-group > .custom-select:focus,
    .input-group > .custom-file:focus {
        z-index: 3; }
    .input-group > .form-control + .form-control,
    .input-group > .form-control + .custom-select,
    .input-group > .form-control + .custom-file,
    .input-group > .custom-select + .form-control,
    .input-group > .custom-select + .custom-select,
    .input-group > .custom-select + .custom-file,
    .input-group > .custom-file + .form-control,
    .input-group > .custom-file + .custom-select,
    .input-group > .custom-file + .custom-file {
        margin-left: -1px; }
    .input-group > .form-control:not(:last-child),
    .input-group > .custom-select:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0; }
    .input-group > .form-control:not(:first-child),
    .input-group > .custom-select:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0; }
    .input-group > .custom-file {
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
        align-items: center; }
    .input-group > .custom-file:not(:last-child) .custom-file-label,
    .input-group > .custom-file:not(:last-child) .custom-file-label::before {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0; }
    .input-group > .custom-file:not(:first-child) .custom-file-label,
    .input-group > .custom-file:not(:first-child) .custom-file-label::before {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0; }

    .input-group-prepend,
    .input-group-append {
        display: -webkit-box;
        display: flex; }
    .input-group-prepend .btn,
    .input-group-append .btn {
        position: relative;
        z-index: 2; }
    .input-group-prepend .btn + .btn,
    .input-group-prepend .btn + .input-group-text,
    .input-group-prepend .input-group-text + .input-group-text,
    .input-group-prepend .input-group-text + .btn,
    .input-group-append .btn + .btn,
    .input-group-append .btn + .input-group-text,
    .input-group-append .input-group-text + .input-group-text,
    .input-group-append .input-group-text + .btn {
        margin-left: -1px; }

    .input-group-prepend {
        margin-right: -1px; }

    .input-group-append {
        margin-left: -1px; }

    .input-group-text {
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        padding: 0.4375rem 0;
        margin-bottom: 0;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        text-align: center;
        white-space: nowrap;
        background-color: transparent;
        border: 1px solid transparent;
        border-radius: 0; }
    .input-group-text input[type="radio"],
    .input-group-text input[type="checkbox"] {
        margin-top: 0; }

    .input-group > .input-group-prepend > .btn,
    .input-group > .input-group-prepend > .input-group-text,
    .input-group > .input-group-append:not(:last-child) > .btn,
    .input-group > .input-group-append:not(:last-child) > .input-group-text,
    .input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
    .input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0; }

    .input-group > .input-group-append > .btn,
    .input-group > .input-group-append > .input-group-text,
    .input-group > .input-group-prepend:not(:first-child) > .btn,
    .input-group > .input-group-prepend:not(:first-child) > .input-group-text,
    .input-group > .input-group-prepend:first-child > .btn:not(:first-child),
    .input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0; }

    .custom-control {
        position: relative;
        display: block;
        min-height: 1.5rem;
        padding-left: 1.5rem; }

    .custom-control-inline {
        display: -webkit-inline-box;
        display: inline-flex;
        margin-right: 1rem; }

    .custom-control-input {
        position: absolute;
        z-index: -1;
        opacity: 0; }
    .custom-control-input:checked ~ .custom-control-label::before {
        color: #ffffff;
        background-color: #2196f3;
        box-shadow: none; }
    .custom-control-input:focus ~ .custom-control-label::before {
        box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(33, 150, 243, 0.25); }
    .custom-control-input:active ~ .custom-control-label::before {
        color: #ffffff;
        background-color: #cae6fc;
        box-shadow: none; }
    .custom-control-input:disabled ~ .custom-control-label {
        color: #6c757d; }
    .custom-control-input:disabled ~ .custom-control-label::before {
        background-color: #e9ecef; }

    .custom-control-label {
        margin-bottom: 0; }
    .custom-control-label::before {
        position: absolute;
        top: 0.25rem;
        left: 0;
        display: block;
        width: 1rem;
        height: 1rem;
        pointer-events: none;
        content: "";
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: #dee2e6;
        box-shadow: inset 0 0.25rem 0.25rem rgba(0, 0, 0, 0.1); }
    .custom-control-label::after {
        position: absolute;
        top: 0.25rem;
        left: 0;
        display: block;
        width: 1rem;
        height: 1rem;
        content: "";
        background-repeat: no-repeat;
        background-position: center center;
        background-size: 50% 50%; }

    .custom-checkbox .custom-control-label::before {
        border-radius: 0.25rem; }

    .custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
        background-color: #2196f3; }

    .custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3E%3Cpath fill='%23ffffff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3E%3C/svg%3E"); }

    .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
        background-color: #2196f3;
        box-shadow: none; }

    .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3E%3Cpath stroke='%23ffffff' d='M0 2h4'/%3E%3C/svg%3E"); }

    .custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
        background-color: rgba(33, 150, 243, 0.5); }

    .custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
        background-color: rgba(33, 150, 243, 0.5); }

    .custom-radio .custom-control-label::before {
        border-radius: 50%; }

    .custom-radio .custom-control-input:checked ~ .custom-control-label::before {
        background-color: #2196f3; }

    .custom-radio .custom-control-input:checked ~ .custom-control-label::after {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3E%3Ccircle r='3' fill='%23ffffff'/%3E%3C/svg%3E"); }

    .custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
        background-color: rgba(33, 150, 243, 0.5); }

    .custom-select {
        display: inline-block;
        width: 100%;
        height: calc(2.4375rem + 2px);
        padding: 0.375rem 1.75rem 0.375rem 0.75rem;
        line-height: 1.5;
        color: #495057;
        vertical-align: middle;
        background: #ffffff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right 0.75rem center;
        background-size: 8px 10px;
        border: 1px solid #d2d2d2;
        border-radius: 0.25rem;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none; }
    .custom-select:focus {
        border-color: #9acffa;
        outline: 0;
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075), 0 0 5px rgba(154, 207, 250, 0.5); }
    .custom-select:focus::-ms-value {
        color: #495057;
        background-color: rgba(0, 0, 0, 0); }
    .custom-select[multiple], .custom-select[size]:not([size="1"]) {
        height: auto;
        padding-right: 0.75rem;
        background-image: none; }
    .custom-select:disabled {
        color: #6c757d;
        background-color: #e9ecef; }
    .custom-select::-ms-expand {
        opacity: 0; }

    .custom-select-sm {
        height: calc(2.125rem + 2px);
        padding-top: 0.375rem;
        padding-bottom: 0.375rem;
        font-size: 75%; }

    .custom-select-lg {
        height: calc(4.125rem + 2px);
        padding-top: 0.375rem;
        padding-bottom: 0.375rem;
        font-size: 125%; }

    .custom-file {
        position: relative;
        display: inline-block;
        width: 100%;
        height: calc(2.4375rem + 2px);
        margin-bottom: 0; }

    .custom-file-input {
        position: relative;
        z-index: 2;
        width: 100%;
        height: calc(2.4375rem + 2px);
        margin: 0;
        opacity: 0; }
    .custom-file-input:focus ~ .custom-file-control {
        border-color: #9acffa;
        box-shadow: 0 0 0 0.2rem rgba(33, 150, 243, 0.25); }
    .custom-file-input:focus ~ .custom-file-control::before {
        border-color: #9acffa; }
    .custom-file-input:lang(en) ~ .custom-file-label::after {
        content: "Browse"; }

    .custom-file-label {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1;
        height: calc(2.4375rem + 2px);
        padding: 0.46875rem 1rem;
        line-height: 1.3;
        color: #495057;
        background-color: transparent;
        border: 0 solid #d2d2d2;
        border-radius: 0;
        box-shadow: none; }
    .custom-file-label::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 3;
        display: block;
        height: calc(calc(2.4375rem + 2px) - 0 * 2);
        padding: 0.46875rem 1rem;
        line-height: 1.3;
        color: #495057;
        content: "Browse";
        background-color: transparent;
        border-left: 0 solid #d2d2d2;
        border-radius: 0 0 0 0; }

    .nav {
        display: -webkit-box;
        display: flex;
        flex-wrap: wrap;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none; }

    .nav-link {
        display: block;
        padding: 0.5rem 1rem; }
    .nav-link:hover, .nav-link:focus {
        text-decoration: none; }
    .nav-link.disabled {
        color: #6c757d; }

    .nav-tabs {
        border-bottom: 1px solid #dee2e6; }
    .nav-tabs .nav-item {
        margin-bottom: -1px; }
    .nav-tabs .nav-link {
        border: 1px solid transparent;
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem; }
    .nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
        border-color: #e9ecef #e9ecef #dee2e6; }
    .nav-tabs .nav-link.disabled {
        color: #6c757d;
        background-color: transparent;
        border-color: transparent; }
    .nav-tabs .nav-link.active,
    .nav-tabs .nav-item.show .nav-link {
        color: #495057;
        background-color: #fafafa;
        border-color: #dee2e6 #dee2e6 #fafafa; }
    .nav-tabs .dropdown-menu {
        margin-top: -1px;
        border-top-left-radius: 0;
        border-top-right-radius: 0; }

    .nav-pills .nav-link {
        border-radius: 0.25rem; }

    .nav-pills .nav-link.active,
    .nav-pills .show > .nav-link {
        color: #ffffff;
        background-color: #2196f3; }

    .nav-fill .nav-item {
        -webkit-box-flex: 1;
        flex: 1 1 auto;
        text-align: center; }

    .nav-justified .nav-item {
        flex-basis: 0;
        -webkit-box-flex: 1;
        flex-grow: 1;
        text-align: center; }

    .tab-content > .tab-pane {
        display: none; }

    .tab-content > .active {
        display: block; }

    .navbar {
        position: relative;
        display: -webkit-box;
        display: flex;
        flex-wrap: wrap;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        justify-content: space-between;
        padding: 0.5rem 1rem; }
    .navbar > .container,
    .navbar > .container-fluid {
        display: -webkit-box;
        display: flex;
        flex-wrap: wrap;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        justify-content: space-between; }

    .navbar-brand {
        display: inline-block;
        padding-top: 0.3125rem;
        padding-bottom: 0.3125rem;
        margin-right: 1rem;
        font-size: 1.25rem;
        line-height: inherit;
        white-space: nowrap; }
    .navbar-brand:hover, .navbar-brand:focus {
        text-decoration: none; }

    .navbar-nav {
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none; }
    .navbar-nav .nav-link {
        padding-right: 0;
        padding-left: 0; }
    .navbar-nav .dropdown-menu {
        position: static;
        float: none; }

    .navbar-text {
        display: inline-block;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem; }

    .navbar-collapse {
        flex-basis: 100%;
        -webkit-box-flex: 1;
        flex-grow: 1;
        -webkit-box-align: center;
        align-items: center; }

    .navbar-toggler {
        padding: 0.25rem 0.75rem;
        font-size: 1.25rem;
        line-height: 1;
        background-color: transparent;
        border: 1px solid transparent;
        border-radius: 0.25rem; }
    .navbar-toggler:hover, .navbar-toggler:focus {
        text-decoration: none; }
    .navbar-toggler:not(:disabled):not(.disabled) {
        cursor: pointer; }

    .navbar-toggler-icon {
        display: inline-block;
        width: 1.5em;
        height: 1.5em;
        vertical-align: middle;
        content: "";
        background: no-repeat center center;
        background-size: 100% 100%; }

    @media (max-width: 575.98px) {
        .navbar-expand-sm > .container,
        .navbar-expand-sm > .container-fluid {
            padding-right: 0;
            padding-left: 0; } }

    @media (min-width: 576px) {
        .navbar-expand-sm {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            justify-content: flex-start; }
        .navbar-expand-sm .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-direction: row; }
        .navbar-expand-sm .navbar-nav .dropdown-menu {
            position: absolute; }
        .navbar-expand-sm .navbar-nav .dropdown-menu-right {
            right: 0;
            left: auto; }
        .navbar-expand-sm .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem; }
        .navbar-expand-sm > .container,
        .navbar-expand-sm > .container-fluid {
            flex-wrap: nowrap; }
        .navbar-expand-sm .navbar-collapse {
            display: -webkit-box !important;
            display: flex !important;
            flex-basis: auto; }
        .navbar-expand-sm .navbar-toggler {
            display: none; }
        .navbar-expand-sm .dropup .dropdown-menu {
            top: auto;
            bottom: 100%; } }

    @media (max-width: 767.98px) {
        .navbar-expand-md > .container,
        .navbar-expand-md > .container-fluid {
            padding-right: 0;
            padding-left: 0; } }

    @media (min-width: 768px) {
        .navbar-expand-md {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            justify-content: flex-start; }
        .navbar-expand-md .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-direction: row; }
        .navbar-expand-md .navbar-nav .dropdown-menu {
            position: absolute; }
        .navbar-expand-md .navbar-nav .dropdown-menu-right {
            right: 0;
            left: auto; }
        .navbar-expand-md .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem; }
        .navbar-expand-md > .container,
        .navbar-expand-md > .container-fluid {
            flex-wrap: nowrap; }
        .navbar-expand-md .navbar-collapse {
            display: -webkit-box !important;
            display: flex !important;
            flex-basis: auto; }
        .navbar-expand-md .navbar-toggler {
            display: none; }
        .navbar-expand-md .dropup .dropdown-menu {
            top: auto;
            bottom: 100%; } }

    @media (max-width: 991.98px) {
        .navbar-expand-lg > .container,
        .navbar-expand-lg > .container-fluid {
            padding-right: 0;
            padding-left: 0; } }

    @media (min-width: 992px) {
        .navbar-expand-lg {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            justify-content: flex-start; }
        .navbar-expand-lg .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-direction: row; }
        .navbar-expand-lg .navbar-nav .dropdown-menu {
            position: absolute; }
        .navbar-expand-lg .navbar-nav .dropdown-menu-right {
            right: 0;
            left: auto; }
        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem; }
        .navbar-expand-lg > .container,
        .navbar-expand-lg > .container-fluid {
            flex-wrap: nowrap; }
        .navbar-expand-lg .navbar-collapse {
            display: -webkit-box !important;
            display: flex !important;
            flex-basis: auto; }
        .navbar-expand-lg .navbar-toggler {
            display: none; }
        .navbar-expand-lg .dropup .dropdown-menu {
            top: auto;
            bottom: 100%; } }

    @media (max-width: 1199.98px) {
        .navbar-expand-xl > .container,
        .navbar-expand-xl > .container-fluid {
            padding-right: 0;
            padding-left: 0; } }

    @media (min-width: 1200px) {
        .navbar-expand-xl {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            justify-content: flex-start; }
        .navbar-expand-xl .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-direction: row; }
        .navbar-expand-xl .navbar-nav .dropdown-menu {
            position: absolute; }
        .navbar-expand-xl .navbar-nav .dropdown-menu-right {
            right: 0;
            left: auto; }
        .navbar-expand-xl .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem; }
        .navbar-expand-xl > .container,
        .navbar-expand-xl > .container-fluid {
            flex-wrap: nowrap; }
        .navbar-expand-xl .navbar-collapse {
            display: -webkit-box !important;
            display: flex !important;
            flex-basis: auto; }
        .navbar-expand-xl .navbar-toggler {
            display: none; }
        .navbar-expand-xl .dropup .dropdown-menu {
            top: auto;
            bottom: 100%; } }

    .navbar-expand {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        flex-flow: row nowrap;
        -webkit-box-pack: start;
        justify-content: flex-start; }
    .navbar-expand > .container,
    .navbar-expand > .container-fluid {
        padding-right: 0;
        padding-left: 0; }
    .navbar-expand .navbar-nav {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        flex-direction: row; }
    .navbar-expand .navbar-nav .dropdown-menu {
        position: absolute; }
    .navbar-expand .navbar-nav .dropdown-menu-right {
        right: 0;
        left: auto; }
    .navbar-expand .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand > .container,
    .navbar-expand > .container-fluid {
        flex-wrap: nowrap; }
    .navbar-expand .navbar-collapse {
        display: -webkit-box !important;
        display: flex !important;
        flex-basis: auto; }
    .navbar-expand .navbar-toggler {
        display: none; }
    .navbar-expand .dropup .dropdown-menu {
        top: auto;
        bottom: 100%; }

    .navbar-light .navbar-brand {
        color: rgba(0, 0, 0, 0.9); }
    .navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
        color: rgba(0, 0, 0, 0.9); }

    .navbar-light .navbar-nav .nav-link {
        color: rgba(0, 0, 0, 0.5); }
    .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
        color: rgba(0, 0, 0, 0.7); }
    .navbar-light .navbar-nav .nav-link.disabled {
        color: rgba(0, 0, 0, 0.3); }

    .navbar-light .navbar-nav .show > .nav-link,
    .navbar-light .navbar-nav .active > .nav-link,
    .navbar-light .navbar-nav .nav-link.show,
    .navbar-light .navbar-nav .nav-link.active {
        color: rgba(0, 0, 0, 0.9); }

    .navbar-light .navbar-toggler {
        color: rgba(0, 0, 0, 0.5);
        border-color: rgba(0, 0, 0, 0.1); }

    .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); }

    .navbar-light .navbar-text {
        color: rgba(0, 0, 0, 0.5); }
    .navbar-light .navbar-text a {
        color: rgba(0, 0, 0, 0.9); }
    .navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
        color: rgba(0, 0, 0, 0.9); }

    .navbar-dark .navbar-brand {
        color: #ffffff; }
    .navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
        color: #ffffff; }

    .navbar-dark .navbar-nav .nav-link {
        color: rgba(255, 255, 255, 0.5); }
    .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
        color: rgba(255, 255, 255, 0.75); }
    .navbar-dark .navbar-nav .nav-link.disabled {
        color: rgba(255, 255, 255, 0.25); }

    .navbar-dark .navbar-nav .show > .nav-link,
    .navbar-dark .navbar-nav .active > .nav-link,
    .navbar-dark .navbar-nav .nav-link.show,
    .navbar-dark .navbar-nav .nav-link.active {
        color: #ffffff; }

    .navbar-dark .navbar-toggler {
        color: rgba(255, 255, 255, 0.5);
        border-color: rgba(255, 255, 255, 0.1); }

    .navbar-dark .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); }

    .navbar-dark .navbar-text {
        color: rgba(255, 255, 255, 0.5); }
    .navbar-dark .navbar-text a {
        color: #ffffff; }
    .navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
        color: #ffffff; }

    .card {
        position: relative;
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.12);
        border-radius: 0.25rem; }
    .card > hr {
        margin-right: 0;
        margin-left: 0; }
    .card > .list-group:first-child .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem; }
    .card > .list-group:last-child .list-group-item:last-child {
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem; }

    .card-body {
        -webkit-box-flex: 1;
        flex: 1 1 auto;
        padding: 1.25rem; }

    .card-title {
        margin-bottom: 0.75rem; }

    .card-subtitle {
        margin-top: -0.375rem;
        margin-bottom: 0; }

    .card-text:last-child {
        margin-bottom: 0; }

    .card-link:hover {
        text-decoration: none; }

    .card-link + .card-link {
        margin-left: 1.25rem; }

    .card-header {
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: #fff;
        border-bottom: 1px solid rgba(0, 0, 0, 0.12); }
    .card-header:first-child {
        border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0; }
    .card-header + .list-group .list-group-item:first-child {
        border-top: 0; }

    .card-footer {
        padding: 0.75rem 1.25rem;
        background-color: #fff;
        border-top: 1px solid rgba(0, 0, 0, 0.12); }
    .card-footer:last-child {
        border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px); }

    .card-header-tabs {
        margin-right: -0.625rem;
        margin-bottom: -0.75rem;
        margin-left: -0.625rem;
        border-bottom: 0; }

    .card-header-pills {
        margin-right: -0.625rem;
        margin-left: -0.625rem; }

    .card-img-overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 1.25rem; }

    .card-img {
        width: 100%;
        border-radius: calc(0.25rem - 1px); }

    .card-img-top {
        width: 100%;
        border-top-left-radius: calc(0.25rem - 1px);
        border-top-right-radius: calc(0.25rem - 1px); }

    .card-img-bottom {
        width: 100%;
        border-bottom-right-radius: calc(0.25rem - 1px);
        border-bottom-left-radius: calc(0.25rem - 1px); }

    .card-deck {
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column; }
    .card-deck .card {
        margin-bottom: 15px; }
    @media (min-width: 576px) {
        .card-deck {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-flow: row wrap;
            margin-right: -15px;
            margin-left: -15px; }
        .card-deck .card {
            display: -webkit-box;
            display: flex;
            -webkit-box-flex: 1;
            flex: 1 0 0%;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
            margin-right: 15px;
            margin-bottom: 0;
            margin-left: 15px; } }

    .card-group {
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column; }
    .card-group > .card {
        margin-bottom: 15px; }
    @media (min-width: 576px) {
        .card-group {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-flow: row wrap; }
        .card-group > .card {
            -webkit-box-flex: 1;
            flex: 1 0 0%;
            margin-bottom: 0; }
        .card-group > .card + .card {
            margin-left: 0;
            border-left: 0; }
        .card-group > .card:first-child {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0; }
        .card-group > .card:first-child .card-img-top,
        .card-group > .card:first-child .card-header {
            border-top-right-radius: 0; }
        .card-group > .card:first-child .card-img-bottom,
        .card-group > .card:first-child .card-footer {
            border-bottom-right-radius: 0; }
        .card-group > .card:last-child {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0; }
        .card-group > .card:last-child .card-img-top,
        .card-group > .card:last-child .card-header {
            border-top-left-radius: 0; }
        .card-group > .card:last-child .card-img-bottom,
        .card-group > .card:last-child .card-footer {
            border-bottom-left-radius: 0; }
        .card-group > .card:only-child {
            border-radius: 0.25rem; }
        .card-group > .card:only-child .card-img-top,
        .card-group > .card:only-child .card-header {
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem; }
        .card-group > .card:only-child .card-img-bottom,
        .card-group > .card:only-child .card-footer {
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem; }
        .card-group > .card:not(:first-child):not(:last-child):not(:only-child) {
            border-radius: 0; }
        .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-top,
        .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
        .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-header,
        .card-group > .card:not(:first-child):not(:last-child):not(:only-child) .card-footer {
            border-radius: 0; } }

    .card-columns .card {
        margin-bottom: 0.75rem; }

    @media (min-width: 576px) {
        .card-columns {
            -webkit-column-count: 3;
            -moz-column-count: 3;
            column-count: 3;
            -webkit-column-gap: 1.25rem;
            -moz-column-gap: 1.25rem;
            column-gap: 1.25rem; }
        .card-columns .card {
            display: inline-block;
            width: 100%; } }

    .breadcrumb {
        display: -webkit-box;
        display: flex;
        flex-wrap: wrap;
        padding: 0.75rem 1rem;
        margin-bottom: 1rem;
        list-style: none;
        background-color: #e9ecef;
        border-radius: 0.25rem; }

    .breadcrumb-item + .breadcrumb-item::before {
        display: inline-block;
        padding-right: 0.5rem;
        padding-left: 0.5rem;
        color: #6c757d;
        content: "/"; }

    .breadcrumb-item + .breadcrumb-item:hover::before {
        text-decoration: underline; }

    .breadcrumb-item + .breadcrumb-item:hover::before {
        text-decoration: none; }

    .breadcrumb-item.active {
        color: #6c757d; }

    .pagination {
        display: -webkit-box;
        display: flex;
        padding-left: 0;
        list-style: none;
        border-radius: 0.25rem; }

    .page-link {
        position: relative;
        display: block;
        padding: 0.5rem 0.75rem;
        margin-left: 0;
        line-height: 1.25;
        color: #2196f3;
        background-color: transparent;
        border: 0 solid #dee2e6; }
    .page-link:hover {
        color: #0a6ebd;
        text-decoration: none;
        background-color: #e9ecef;
        border-color: #dee2e6; }
    .page-link:focus {
        z-index: 2;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(33, 150, 243, 0.25); }
    .page-link:not(:disabled):not(.disabled) {
        cursor: pointer; }

    .page-item:first-child .page-link {
        margin-left: 0;
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem; }

    .page-item:last-child .page-link {
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem; }

    .page-item.active .page-link {
        z-index: 1;
        color: #ffffff;
        background-color: #2196f3;
        border-color: #2196f3; }

    .page-item.disabled .page-link {
        color: #6c757d;
        pointer-events: none;
        cursor: auto;
        background-color: transparent;
        border-color: #dee2e6; }

    .pagination-lg .page-link {
        padding: 0.75rem 0;
        font-size: 1.25rem;
        line-height: 1.5; }

    .pagination-lg .page-item:first-child .page-link {
        border-top-left-radius: 0.3rem;
        border-bottom-left-radius: 0.3rem; }

    .pagination-lg .page-item:last-child .page-link {
        border-top-right-radius: 0.3rem;
        border-bottom-right-radius: 0.3rem; }

    .pagination-sm .page-link {
        padding: 0.25rem 0;
        font-size: 0.875rem;
        line-height: 1.5; }

    .pagination-sm .page-item:first-child .page-link {
        border-top-left-radius: 0.2rem;
        border-bottom-left-radius: 0.2rem; }

    .pagination-sm .page-item:last-child .page-link {
        border-top-right-radius: 0.2rem;
        border-bottom-right-radius: 0.2rem; }

    .jumbotron {
        padding: 2rem 1rem;
        margin-bottom: 2rem;
        background-color: #e9ecef;
        border-radius: 0.3rem; }
    @media (min-width: 576px) {
        .jumbotron {
            padding: 4rem 2rem; } }

    .jumbotron-fluid {
        padding-right: 0;
        padding-left: 0;
        border-radius: 0; }

    .alert {
        position: relative;
        padding: 0.75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem; }

    .alert-heading {
        color: inherit; }

    .alert-link {
        font-weight: 500; }

    .alert-dismissible {
        padding-right: 4rem; }
    .alert-dismissible .close {
        position: absolute;
        top: 0;
        right: 0;
        padding: 0.75rem 1.25rem;
        color: inherit; }

    .alert-primary {
        color: #114e7e;
        background-color: #d3eafd;
        border-color: #c1e2fc; }
    .alert-primary hr {
        border-top-color: #a9d7fb; }
    .alert-primary .alert-link {
        color: #0b3251; }

    .alert-secondary {
        color: #383d41;
        background-color: #e2e3e5;
        border-color: #d6d8db; }
    .alert-secondary hr {
        border-top-color: #c8cbcf; }
    .alert-secondary .alert-link {
        color: #202326; }

    .alert-success {
        color: #285b2a;
        background-color: #dbefdc;
        border-color: #cde9ce; }
    .alert-success hr {
        border-top-color: #bbe1bd; }
    .alert-success .alert-link {
        color: #18381a; }

    .alert-info {
        color: #00626e;
        background-color: #ccf2f6;
        border-color: #b8ecf3; }
    .alert-info hr {
        border-top-color: #a2e6ef; }
    .alert-info .alert-link {
        color: #00353b; }

    .alert-warning {
        color: #857a1f;
        background-color: #fffbd8;
        border-color: #fff9c8; }
    .alert-warning hr {
        border-top-color: #fff6af; }
    .alert-warning .alert-link {
        color: #5c5415; }

    .alert-danger {
        color: #7f231c;
        background-color: #fdd9d7;
        border-color: #fccac7; }
    .alert-danger hr {
        border-top-color: #fbb3af; }
    .alert-danger .alert-link {
        color: #551713; }

    .alert-light {
        color: #818182;
        background-color: #fefefe;
        border-color: #fdfdfe; }
    .alert-light hr {
        border-top-color: #ececf6; }
    .alert-light .alert-link {
        color: #686868; }

    .alert-dark {
        color: #1b1e21;
        background-color: #d6d8d9;
        border-color: #c6c8ca; }
    .alert-dark hr {
        border-top-color: #b9bbbe; }
    .alert-dark .alert-link {
        color: #040505; }

    @-webkit-keyframes progress-bar-stripes {
        from {
            background-position: 1rem 0; }
        to {
            background-position: 0 0; } }

    @keyframes progress-bar-stripes {
        from {
            background-position: 1rem 0; }
        to {
            background-position: 0 0; } }

    .progress {
        display: -webkit-box;
        display: flex;
        height: 1rem;
        overflow: hidden;
        font-size: 0.75rem;
        background-color: #e9ecef;
        border-radius: 0.25rem;
        box-shadow: inset 0 0.1rem 0.1rem rgba(0, 0, 0, 0.1); }

    .progress-bar {
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        -webkit-box-pack: center;
        justify-content: center;
        color: #ffffff;
        text-align: center;
        background-color: #2196f3;
        -webkit-transition: width 0.6s ease;
        transition: width 0.6s ease; }

    .progress-bar-striped {
        background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
        background-size: 1rem 1rem; }

    .progress-bar-animated {
        -webkit-animation: progress-bar-stripes 1s linear infinite;
        animation: progress-bar-stripes 1s linear infinite; }

    .media {
        display: -webkit-box;
        display: flex;
        -webkit-box-align: start;
        align-items: flex-start; }

    .media-body {
        -webkit-box-flex: 1;
        flex: 1; }

    .list-group {
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0; }

    .list-group-item-action {
        width: 100%;
        color: #495057;
        text-align: inherit; }
    .list-group-item-action:hover, .list-group-item-action:focus {
        color: #495057;
        text-decoration: none;
        background-color: #f8f9fa; }
    .list-group-item-action:active {
        color: #212529;
        background-color: #e9ecef; }

    .list-group-item {
        position: relative;
        display: block;
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: inherit;
        border: 0 solid rgba(0, 0, 0, 0.125); }
    .list-group-item:first-child {
        border-top-left-radius: 0;
        border-top-right-radius: 0; }
    .list-group-item:last-child {
        margin-bottom: 0;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0; }
    .list-group-item:hover, .list-group-item:focus {
        z-index: 1;
        text-decoration: none; }
    .list-group-item.disabled, .list-group-item:disabled {
        color: #6c757d;
        background-color: inherit; }
    .list-group-item.active {
        z-index: 2;
        color: #ffffff;
        background-color: #2196f3;
        border-color: #2196f3; }

    .list-group-flush .list-group-item {
        border-right: 0;
        border-left: 0;
        border-radius: 0; }

    .list-group-flush:first-child .list-group-item:first-child {
        border-top: 0; }

    .list-group-flush:last-child .list-group-item:last-child {
        border-bottom: 0; }

    .list-group-item-primary {
        color: #114e7e;
        background-color: #c1e2fc; }
    .list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
        color: #114e7e;
        background-color: #a9d7fb; }
    .list-group-item-primary.list-group-item-action.active {
        color: #fff;
        background-color: #114e7e;
        border-color: #114e7e; }

    .list-group-item-secondary {
        color: #383d41;
        background-color: #d6d8db; }
    .list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
        color: #383d41;
        background-color: #c8cbcf; }
    .list-group-item-secondary.list-group-item-action.active {
        color: #fff;
        background-color: #383d41;
        border-color: #383d41; }

    .list-group-item-success {
        color: #285b2a;
        background-color: #cde9ce; }
    .list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
        color: #285b2a;
        background-color: #bbe1bd; }
    .list-group-item-success.list-group-item-action.active {
        color: #fff;
        background-color: #285b2a;
        border-color: #285b2a; }

    .list-group-item-info {
        color: #00626e;
        background-color: #b8ecf3; }
    .list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
        color: #00626e;
        background-color: #a2e6ef; }
    .list-group-item-info.list-group-item-action.active {
        color: #fff;
        background-color: #00626e;
        border-color: #00626e; }

    .list-group-item-warning {
        color: #857a1f;
        background-color: #fff9c8; }
    .list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
        color: #857a1f;
        background-color: #fff6af; }
    .list-group-item-warning.list-group-item-action.active {
        color: #fff;
        background-color: #857a1f;
        border-color: #857a1f; }

    .list-group-item-danger {
        color: #7f231c;
        background-color: #fccac7; }
    .list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
        color: #7f231c;
        background-color: #fbb3af; }
    .list-group-item-danger.list-group-item-action.active {
        color: #fff;
        background-color: #7f231c;
        border-color: #7f231c; }

    .list-group-item-light {
        color: #818182;
        background-color: #fdfdfe; }
    .list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
        color: #818182;
        background-color: #ececf6; }
    .list-group-item-light.list-group-item-action.active {
        color: #fff;
        background-color: #818182;
        border-color: #818182; }

    .list-group-item-dark {
        color: #1b1e21;
        background-color: #c6c8ca; }
    .list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
        color: #1b1e21;
        background-color: #b9bbbe; }
    .list-group-item-dark.list-group-item-action.active {
        color: #fff;
        background-color: #1b1e21;
        border-color: #1b1e21; }

    .close {
        float: right;
        font-size: 1.5rem;
        font-weight: 500;
        line-height: 1;
        color: #000000;
        text-shadow: 0 1px 0 #ffffff;
        opacity: .5; }
    .close:hover, .close:focus {
        color: #000000;
        text-decoration: none;
        opacity: .75; }
    .close:not(:disabled):not(.disabled) {
        cursor: pointer; }

    button.close {
        padding: 0;
        background-color: transparent;
        border: 0;
        -webkit-appearance: none; }

    .badge {
        display: inline-block;
        padding: 0.25em 0.4em;
        font-size: 75%;
        font-weight: 500;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: 0.25rem; }
    .badge:empty {
        display: none; }

    .btn .badge {
        position: relative;
        top: -1px; }

    .badge-pill {
        padding-right: 0.6em;
        padding-left: 0.6em;
        border-radius: 10rem; }

    .badge-primary {
        color: #ffffff;
        background-color: #2196f3; }
    .badge-primary[href]:hover, .badge-primary[href]:focus {
        color: #ffffff;
        text-decoration: none;
        background-color: #0c7cd5; }

    .badge-secondary {
        color: #ffffff;
        background-color: #6c757d; }
    .badge-secondary[href]:hover, .badge-secondary[href]:focus {
        color: #ffffff;
        text-decoration: none;
        background-color: #545b62; }

    .badge-success {
        color: #ffffff;
        background-color: #4caf50; }
    .badge-success[href]:hover, .badge-success[href]:focus {
        color: #ffffff;
        text-decoration: none;
        background-color: #3d8b40; }

    .badge-info {
        color: #ffffff;
        background-color: #00bcd4; }
    .badge-info[href]:hover, .badge-info[href]:focus {
        color: #ffffff;
        text-decoration: none;
        background-color: #008fa1; }

    .badge-warning {
        color: #212529;
        background-color: #ffeb3b; }
    .badge-warning[href]:hover, .badge-warning[href]:focus {
        color: #212529;
        text-decoration: none;
        background-color: #ffe608; }

    .badge-danger {
        color: #ffffff;
        background-color: #f44336; }
    .badge-danger[href]:hover, .badge-danger[href]:focus {
        color: #ffffff;
        text-decoration: none;
        background-color: #ea1c0d; }

    .badge-light {
        color: #212529;
        background-color: #f8f9fa; }
    .badge-light[href]:hover, .badge-light[href]:focus {
        color: #212529;
        text-decoration: none;
        background-color: #dae0e5; }

    .badge-dark {
        color: #ffffff;
        background-color: #343a40; }
    .badge-dark[href]:hover, .badge-dark[href]:focus {
        color: #ffffff;
        text-decoration: none;
        background-color: #1d2124; }

    .modal-open {
        overflow: hidden; }

    .modal {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1050;
        display: none;
        overflow: hidden;
        outline: 0; }
    .modal-open .modal {
        overflow-x: hidden;
        overflow-y: auto; }

    .modal-dialog {
        position: relative;
        width: auto;
        margin: 0.5rem;
        pointer-events: none; }
    .modal.fade .modal-dialog {
        -webkit-transition: -webkit-transform 0.3s ease-out;
        transition: -webkit-transform 0.3s ease-out;
        transition: transform 0.3s ease-out;
        transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
        -webkit-transform: translate(0, -25%);
        transform: translate(0, -25%); }
    .modal.show .modal-dialog {
        -webkit-transform: translate(0, 0);
        transform: translate(0, 0); }

    .modal-dialog-centered {
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        min-height: calc(100% - (0.5rem * 2)); }

    .modal-content {
        position: relative;
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: #ffffff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 0.3rem;
        box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.5);
        outline: 0; }

    .modal-backdrop {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1040;
        background-color: #000000; }
    .modal-backdrop.fade {
        opacity: 0; }
    .modal-backdrop.show {
        opacity: 0.26; }

    .modal-header {
        display: -webkit-box;
        display: flex;
        -webkit-box-align: start;
        align-items: flex-start;
        -webkit-box-pack: justify;
        justify-content: space-between;
        padding: 1rem;
        border-bottom: 1px solid #e9ecef;
        border-top-left-radius: 0.3rem;
        border-top-right-radius: 0.3rem; }
    .modal-header .close {
        padding: 1rem;
        margin: -1rem -1rem -1rem auto; }

    .modal-title {
        margin-bottom: 0;
        line-height: 1.5; }

    .modal-body {
        position: relative;
        -webkit-box-flex: 1;
        flex: 1 1 auto;
        padding: 1rem; }

    .modal-footer {
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: end;
        justify-content: flex-end;
        padding: 1rem;
        border-top: 1px solid #e9ecef; }
    .modal-footer > :not(:first-child) {
        margin-left: .25rem; }
    .modal-footer > :not(:last-child) {
        margin-right: .25rem; }

    .modal-scrollbar-measure {
        position: absolute;
        top: -9999px;
        width: 50px;
        height: 50px;
        overflow: scroll; }

    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 500px;
            margin: 1.75rem auto; }
        .modal-dialog-centered {
            min-height: calc(100% - (1.75rem * 2)); }
        .modal-content {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.5); }
        .modal-sm {
            max-width: 300px; } }

    @media (min-width: 992px) {
        .modal-lg {
            max-width: 800px; } }

    .tooltip {
        position: absolute;
        z-index: 1070;
        display: block;
        margin: 0;
        font-family: "Roboto", "Helvetica", "Arial", sans-serif;
        font-style: normal;
        font-weight: 400;
        line-height: 1.5;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        white-space: normal;
        line-break: auto;
        font-size: 0.875rem;
        word-wrap: break-word;
        opacity: 0; }
    .tooltip.show {
        opacity: 0.9; }
    .tooltip .arrow {
        position: absolute;
        display: block;
        width: 0.8rem;
        height: 0.4rem; }
    .tooltip .arrow::before {
        position: absolute;
        content: "";
        border-color: transparent;
        border-style: solid; }

    .bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
        padding: 0.4rem 0; }
    .bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
        bottom: 0; }
    .bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
        top: 0;
        border-width: 0.4rem 0.4rem 0;
        border-top-color: rgba(97, 97, 97, 0.9); }

    .bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
        padding: 0 0.4rem; }
    .bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
        left: 0;
        width: 0.4rem;
        height: 0.8rem; }
    .bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
        right: 0;
        border-width: 0.4rem 0.4rem 0.4rem 0;
        border-right-color: rgba(97, 97, 97, 0.9); }

    .bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
        padding: 0.4rem 0; }
    .bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
        top: 0; }
    .bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
        bottom: 0;
        border-width: 0 0.4rem 0.4rem;
        border-bottom-color: rgba(97, 97, 97, 0.9); }

    .bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
        padding: 0 0.4rem; }
    .bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
        right: 0;
        width: 0.4rem;
        height: 0.8rem; }
    .bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
        left: 0;
        border-width: 0.4rem 0 0.4rem 0.4rem;
        border-left-color: rgba(97, 97, 97, 0.9); }

    .tooltip-inner {
        max-width: 200px;
        padding: 0.25rem 0.5rem;
        color: #ffffff;
        text-align: center;
        background-color: rgba(97, 97, 97, 0.9);
        border-radius: 0.25rem; }

    .popover {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1060;
        display: block;
        max-width: 276px;
        font-family: "Roboto", "Helvetica", "Arial", sans-serif;
        font-style: normal;
        font-weight: 400;
        line-height: 1.5;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        white-space: normal;
        line-break: auto;
        font-size: 0.875rem;
        word-wrap: break-word;
        background-color: #ffffff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 0.3rem;
        box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.2); }
    .popover .arrow {
        position: absolute;
        display: block;
        width: 1rem;
        height: 0.5rem;
        margin: 0 0.3rem; }
    .popover .arrow::before, .popover .arrow::after {
        position: absolute;
        display: block;
        content: "";
        border-color: transparent;
        border-style: solid; }

    .bs-popover-top, .bs-popover-auto[x-placement^="top"] {
        margin-bottom: 0.5rem; }
    .bs-popover-top .arrow, .bs-popover-auto[x-placement^="top"] .arrow {
        bottom: calc((0.5rem + 1px) * -1); }
    .bs-popover-top .arrow::before, .bs-popover-auto[x-placement^="top"] .arrow::before,
    .bs-popover-top .arrow::after,
    .bs-popover-auto[x-placement^="top"] .arrow::after {
        border-width: 0.5rem 0.5rem 0; }
    .bs-popover-top .arrow::before, .bs-popover-auto[x-placement^="top"] .arrow::before {
        bottom: 0;
        border-top-color: rgba(0, 0, 0, 0.25); }

    .bs-popover-top .arrow::after,
    .bs-popover-auto[x-placement^="top"] .arrow::after {
        bottom: 1px;
        border-top-color: #ffffff; }

    .bs-popover-right, .bs-popover-auto[x-placement^="right"] {
        margin-left: 0.5rem; }
    .bs-popover-right .arrow, .bs-popover-auto[x-placement^="right"] .arrow {
        left: calc((0.5rem + 1px) * -1);
        width: 0.5rem;
        height: 1rem;
        margin: 0.3rem 0; }
    .bs-popover-right .arrow::before, .bs-popover-auto[x-placement^="right"] .arrow::before,
    .bs-popover-right .arrow::after,
    .bs-popover-auto[x-placement^="right"] .arrow::after {
        border-width: 0.5rem 0.5rem 0.5rem 0; }
    .bs-popover-right .arrow::before, .bs-popover-auto[x-placement^="right"] .arrow::before {
        left: 0;
        border-right-color: rgba(0, 0, 0, 0.25); }

    .bs-popover-right .arrow::after,
    .bs-popover-auto[x-placement^="right"] .arrow::after {
        left: 1px;
        border-right-color: #ffffff; }

    .bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
        margin-top: 0.5rem; }
    .bs-popover-bottom .arrow, .bs-popover-auto[x-placement^="bottom"] .arrow {
        top: calc((0.5rem + 1px) * -1); }
    .bs-popover-bottom .arrow::before, .bs-popover-auto[x-placement^="bottom"] .arrow::before,
    .bs-popover-bottom .arrow::after,
    .bs-popover-auto[x-placement^="bottom"] .arrow::after {
        border-width: 0 0.5rem 0.5rem 0.5rem; }
    .bs-popover-bottom .arrow::before, .bs-popover-auto[x-placement^="bottom"] .arrow::before {
        top: 0;
        border-bottom-color: rgba(0, 0, 0, 0.25); }

    .bs-popover-bottom .arrow::after,
    .bs-popover-auto[x-placement^="bottom"] .arrow::after {
        top: 1px;
        border-bottom-color: #ffffff; }
    .bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
        position: absolute;
        top: 0;
        left: 50%;
        display: block;
        width: 1rem;
        margin-left: -0.5rem;
        content: "";
        border-bottom: 1px solid #f7f7f7; }

    .bs-popover-left, .bs-popover-auto[x-placement^="left"] {
        margin-right: 0.5rem; }
    .bs-popover-left .arrow, .bs-popover-auto[x-placement^="left"] .arrow {
        right: calc((0.5rem + 1px) * -1);
        width: 0.5rem;
        height: 1rem;
        margin: 0.3rem 0; }
    .bs-popover-left .arrow::before, .bs-popover-auto[x-placement^="left"] .arrow::before,
    .bs-popover-left .arrow::after,
    .bs-popover-auto[x-placement^="left"] .arrow::after {
        border-width: 0.5rem 0 0.5rem 0.5rem; }
    .bs-popover-left .arrow::before, .bs-popover-auto[x-placement^="left"] .arrow::before {
        right: 0;
        border-left-color: rgba(0, 0, 0, 0.25); }

    .bs-popover-left .arrow::after,
    .bs-popover-auto[x-placement^="left"] .arrow::after {
        right: 1px;
        border-left-color: #ffffff; }

    .popover-header {
        padding: 0.5rem 0.75rem;
        margin-bottom: 0;
        font-size: 1rem;
        color: inherit;
        background-color: #f7f7f7;
        border-bottom: 1px solid #ebebeb;
        border-top-left-radius: calc(0.3rem - 1px);
        border-top-right-radius: calc(0.3rem - 1px); }
    .popover-header:empty {
        display: none; }

    .popover-body {
        padding: 0.5rem 0.75rem;
        color: #212529; }

    .carousel {
        position: relative; }

    .carousel-inner {
        position: relative;
        width: 100%;
        overflow: hidden; }

    .carousel-item {
        position: relative;
        display: none;
        -webkit-box-align: center;
        align-items: center;
        width: 100%;
        -webkit-transition: -webkit-transform 0.6s ease;
        transition: -webkit-transform 0.6s ease;
        transition: transform 0.6s ease;
        transition: transform 0.6s ease, -webkit-transform 0.6s ease;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-perspective: 1000px;
        perspective: 1000px; }

    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block; }

    .carousel-item-next,
    .carousel-item-prev {
        position: absolute;
        top: 0; }

    .carousel-item-next.carousel-item-left,
    .carousel-item-prev.carousel-item-right {
        -webkit-transform: translateX(0);
        transform: translateX(0); }
    @supports (transform-style: preserve-3d) {
        .carousel-item-next.carousel-item-left,
        .carousel-item-prev.carousel-item-right {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0); } }

    .carousel-item-next,
    .active.carousel-item-right {
        -webkit-transform: translateX(100%);
        transform: translateX(100%); }
    @supports (transform-style: preserve-3d) {
        .carousel-item-next,
        .active.carousel-item-right {
            -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0); } }

    .carousel-item-prev,
    .active.carousel-item-left {
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%); }
    @supports (transform-style: preserve-3d) {
        .carousel-item-prev,
        .active.carousel-item-left {
            -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0); } }

    .carousel-control-prev,
    .carousel-control-next {
        position: absolute;
        top: 0;
        bottom: 0;
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        width: 15%;
        color: #ffffff;
        text-align: center;
        opacity: 0.5; }
    .carousel-control-prev:hover, .carousel-control-prev:focus,
    .carousel-control-next:hover,
    .carousel-control-next:focus {
        color: #ffffff;
        text-decoration: none;
        outline: 0;
        opacity: .9; }

    .carousel-control-prev {
        left: 0; }

    .carousel-control-next {
        right: 0; }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        display: inline-block;
        width: 20px;
        height: 20px;
        background: transparent no-repeat center center;
        background-size: 100% 100%; }

    .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23ffffff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E"); }

    .carousel-control-next-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23ffffff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E"); }

    .carousel-indicators {
        position: absolute;
        right: 0;
        bottom: 10px;
        left: 0;
        z-index: 15;
        display: -webkit-box;
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
        padding-left: 0;
        margin-right: 15%;
        margin-left: 15%;
        list-style: none; }
    .carousel-indicators li {
        position: relative;
        -webkit-box-flex: 0;
        flex: 0 1 auto;
        width: 30px;
        height: 3px;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: -999px;
        background-color: rgba(255, 255, 255, 0.5); }
    .carousel-indicators li::before {
        position: absolute;
        top: -10px;
        left: 0;
        display: inline-block;
        width: 100%;
        height: 10px;
        content: ""; }
    .carousel-indicators li::after {
        position: absolute;
        bottom: -10px;
        left: 0;
        display: inline-block;
        width: 100%;
        height: 10px;
        content: ""; }
    .carousel-indicators .active {
        background-color: #ffffff; }

    .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 20px;
        left: 15%;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #ffffff;
        text-align: center; }

    .align-baseline {
        vertical-align: baseline !important; }

    .align-top {
        vertical-align: top !important; }

    .align-middle {
        vertical-align: middle !important; }

    .align-bottom {
        vertical-align: bottom !important; }

    .align-text-bottom {
        vertical-align: text-bottom !important; }

    .align-text-top {
        vertical-align: text-top !important; }

    .bg-primary {
        background-color: #2196f3 !important; }

    a.bg-primary:hover, a.bg-primary:focus,
    button.bg-primary:hover,
    button.bg-primary:focus {
        background-color: #0c7cd5 !important; }

    .bg-secondary {
        background-color: #6c757d !important; }

    a.bg-secondary:hover, a.bg-secondary:focus,
    button.bg-secondary:hover,
    button.bg-secondary:focus {
        background-color: #545b62 !important; }

    .bg-success {
        background-color: #4caf50 !important; }

    a.bg-success:hover, a.bg-success:focus,
    button.bg-success:hover,
    button.bg-success:focus {
        background-color: #3d8b40 !important; }

    .bg-info {
        background-color: #00bcd4 !important; }

    a.bg-info:hover, a.bg-info:focus,
    button.bg-info:hover,
    button.bg-info:focus {
        background-color: #008fa1 !important; }

    .bg-warning {
        background-color: #ffeb3b !important; }

    a.bg-warning:hover, a.bg-warning:focus,
    button.bg-warning:hover,
    button.bg-warning:focus {
        background-color: #ffe608 !important; }

    .bg-danger {
        background-color: #f44336 !important; }

    a.bg-danger:hover, a.bg-danger:focus,
    button.bg-danger:hover,
    button.bg-danger:focus {
        background-color: #ea1c0d !important; }

    .bg-light {
        background-color: #f8f9fa !important; }

    a.bg-light:hover, a.bg-light:focus,
    button.bg-light:hover,
    button.bg-light:focus {
        background-color: #dae0e5 !important; }

    .bg-dark {
        background-color: #343a40 !important; }

    a.bg-dark:hover, a.bg-dark:focus,
    button.bg-dark:hover,
    button.bg-dark:focus {
        background-color: #1d2124 !important; }

    .bg-white {
        background-color: #ffffff !important; }

    .bg-transparent {
        background-color: transparent !important; }

    .border {
        border: 1px solid #dee2e6 !important; }

    .border-top {
        border-top: 1px solid #dee2e6 !important; }

    .border-right {
        border-right: 1px solid #dee2e6 !important; }

    .border-bottom {
        border-bottom: 1px solid #dee2e6 !important; }

    .border-left {
        border-left: 1px solid #dee2e6 !important; }

    .border-0 {
        border: 0 !important; }

    .border-top-0 {
        border-top: 0 !important; }

    .border-right-0 {
        border-right: 0 !important; }

    .border-bottom-0 {
        border-bottom: 0 !important; }

    .border-left-0 {
        border-left: 0 !important; }

    .border-primary {
        border-color: #2196f3 !important; }

    .border-secondary {
        border-color: #6c757d !important; }

    .border-success {
        border-color: #4caf50 !important; }

    .border-info {
        border-color: #00bcd4 !important; }

    .border-warning {
        border-color: #ffeb3b !important; }

    .border-danger {
        border-color: #f44336 !important; }

    .border-light {
        border-color: #f8f9fa !important; }

    .border-dark {
        border-color: #343a40 !important; }

    .border-white {
        border-color: #ffffff !important; }

    .rounded {
        border-radius: 0.25rem !important; }

    .rounded-top {
        border-top-left-radius: 0.25rem !important;
        border-top-right-radius: 0.25rem !important; }

    .rounded-right {
        border-top-right-radius: 0.25rem !important;
        border-bottom-right-radius: 0.25rem !important; }

    .rounded-bottom {
        border-bottom-right-radius: 0.25rem !important;
        border-bottom-left-radius: 0.25rem !important; }

    .rounded-left {
        border-top-left-radius: 0.25rem !important;
        border-bottom-left-radius: 0.25rem !important; }

    .rounded-circle {
        border-radius: 50% !important; }

    .rounded-0 {
        border-radius: 0 !important; }

    .clearfix::after {
        display: block;
        clear: both;
        content: ""; }

    .d-none {
        display: none !important; }

    .d-inline {
        display: inline !important; }

    .d-inline-block {
        display: inline-block !important; }

    .d-block {
        display: block !important; }

    .d-table {
        display: table !important; }

    .d-table-row {
        display: table-row !important; }

    .d-table-cell {
        display: table-cell !important; }

    .d-flex {
        display: -webkit-box !important;
        display: flex !important; }

    .d-inline-flex {
        display: -webkit-inline-box !important;
        display: inline-flex !important; }

    @media (min-width: 576px) {
        .d-sm-none {
            display: none !important; }
        .d-sm-inline {
            display: inline !important; }
        .d-sm-inline-block {
            display: inline-block !important; }
        .d-sm-block {
            display: block !important; }
        .d-sm-table {
            display: table !important; }
        .d-sm-table-row {
            display: table-row !important; }
        .d-sm-table-cell {
            display: table-cell !important; }
        .d-sm-flex {
            display: -webkit-box !important;
            display: flex !important; }
        .d-sm-inline-flex {
            display: -webkit-inline-box !important;
            display: inline-flex !important; } }

    @media (min-width: 768px) {
        .d-md-none {
            display: none !important; }
        .d-md-inline {
            display: inline !important; }
        .d-md-inline-block {
            display: inline-block !important; }
        .d-md-block {
            display: block !important; }
        .d-md-table {
            display: table !important; }
        .d-md-table-row {
            display: table-row !important; }
        .d-md-table-cell {
            display: table-cell !important; }
        .d-md-flex {
            display: -webkit-box !important;
            display: flex !important; }
        .d-md-inline-flex {
            display: -webkit-inline-box !important;
            display: inline-flex !important; } }

    @media (min-width: 992px) {
        .d-lg-none {
            display: none !important; }
        .d-lg-inline {
            display: inline !important; }
        .d-lg-inline-block {
            display: inline-block !important; }
        .d-lg-block {
            display: block !important; }
        .d-lg-table {
            display: table !important; }
        .d-lg-table-row {
            display: table-row !important; }
        .d-lg-table-cell {
            display: table-cell !important; }
        .d-lg-flex {
            display: -webkit-box !important;
            display: flex !important; }
        .d-lg-inline-flex {
            display: -webkit-inline-box !important;
            display: inline-flex !important; } }

    @media (min-width: 1200px) {
        .d-xl-none {
            display: none !important; }
        .d-xl-inline {
            display: inline !important; }
        .d-xl-inline-block {
            display: inline-block !important; }
        .d-xl-block {
            display: block !important; }
        .d-xl-table {
            display: table !important; }
        .d-xl-table-row {
            display: table-row !important; }
        .d-xl-table-cell {
            display: table-cell !important; }
        .d-xl-flex {
            display: -webkit-box !important;
            display: flex !important; }
        .d-xl-inline-flex {
            display: -webkit-inline-box !important;
            display: inline-flex !important; } }

    @media print {
        .d-print-none {
            display: none !important; }
        .d-print-inline {
            display: inline !important; }
        .d-print-inline-block {
            display: inline-block !important; }
        .d-print-block {
            display: block !important; }
        .d-print-table {
            display: table !important; }
        .d-print-table-row {
            display: table-row !important; }
        .d-print-table-cell {
            display: table-cell !important; }
        .d-print-flex {
            display: -webkit-box !important;
            display: flex !important; }
        .d-print-inline-flex {
            display: -webkit-inline-box !important;
            display: inline-flex !important; } }

    .embed-responsive {
        position: relative;
        display: block;
        width: 100%;
        padding: 0;
        overflow: hidden; }
    .embed-responsive::before {
        display: block;
        content: ""; }
    .embed-responsive .embed-responsive-item,
    .embed-responsive iframe,
    .embed-responsive embed,
    .embed-responsive object,
    .embed-responsive video {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0; }

    .embed-responsive-21by9::before {
        padding-top: 42.85714%; }

    .embed-responsive-16by9::before {
        padding-top: 56.25%; }

    .embed-responsive-4by3::before {
        padding-top: 75%; }

    .embed-responsive-1by1::before {
        padding-top: 100%; }

    .flex-row {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: normal !important;
        flex-direction: row !important; }

    .flex-column {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: normal !important;
        flex-direction: column !important; }

    .flex-row-reverse {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: reverse !important;
        flex-direction: row-reverse !important; }

    .flex-column-reverse {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: reverse !important;
        flex-direction: column-reverse !important; }

    .flex-wrap {
        flex-wrap: wrap !important; }

    .flex-nowrap {
        flex-wrap: nowrap !important; }

    .flex-wrap-reverse {
        flex-wrap: wrap-reverse !important; }

    .justify-content-start {
        -webkit-box-pack: start !important;
        justify-content: flex-start !important; }

    .justify-content-end {
        -webkit-box-pack: end !important;
        justify-content: flex-end !important; }

    .justify-content-center {
        -webkit-box-pack: center !important;
        justify-content: center !important; }

    .justify-content-between {
        -webkit-box-pack: justify !important;
        justify-content: space-between !important; }

    .justify-content-around {
        justify-content: space-around !important; }

    .align-items-start {
        -webkit-box-align: start !important;
        align-items: flex-start !important; }

    .align-items-end {
        -webkit-box-align: end !important;
        align-items: flex-end !important; }

    .align-items-center {
        -webkit-box-align: center !important;
        align-items: center !important; }

    .align-items-baseline {
        -webkit-box-align: baseline !important;
        align-items: baseline !important; }

    .align-items-stretch {
        -webkit-box-align: stretch !important;
        align-items: stretch !important; }

    .align-content-start {
        align-content: flex-start !important; }

    .align-content-end {
        align-content: flex-end !important; }

    .align-content-center {
        align-content: center !important; }

    .align-content-between {
        align-content: space-between !important; }

    .align-content-around {
        align-content: space-around !important; }

    .align-content-stretch {
        align-content: stretch !important; }

    .align-self-auto {
        align-self: auto !important; }

    .align-self-start {
        align-self: flex-start !important; }

    .align-self-end {
        align-self: flex-end !important; }

    .align-self-center {
        align-self: center !important; }

    .align-self-baseline {
        align-self: baseline !important; }

    .align-self-stretch {
        align-self: stretch !important; }

    @media (min-width: 576px) {
        .flex-sm-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            flex-direction: row !important; }
        .flex-sm-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            flex-direction: column !important; }
        .flex-sm-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            flex-direction: row-reverse !important; }
        .flex-sm-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            flex-direction: column-reverse !important; }
        .flex-sm-wrap {
            flex-wrap: wrap !important; }
        .flex-sm-nowrap {
            flex-wrap: nowrap !important; }
        .flex-sm-wrap-reverse {
            flex-wrap: wrap-reverse !important; }
        .justify-content-sm-start {
            -webkit-box-pack: start !important;
            justify-content: flex-start !important; }
        .justify-content-sm-end {
            -webkit-box-pack: end !important;
            justify-content: flex-end !important; }
        .justify-content-sm-center {
            -webkit-box-pack: center !important;
            justify-content: center !important; }
        .justify-content-sm-between {
            -webkit-box-pack: justify !important;
            justify-content: space-between !important; }
        .justify-content-sm-around {
            justify-content: space-around !important; }
        .align-items-sm-start {
            -webkit-box-align: start !important;
            align-items: flex-start !important; }
        .align-items-sm-end {
            -webkit-box-align: end !important;
            align-items: flex-end !important; }
        .align-items-sm-center {
            -webkit-box-align: center !important;
            align-items: center !important; }
        .align-items-sm-baseline {
            -webkit-box-align: baseline !important;
            align-items: baseline !important; }
        .align-items-sm-stretch {
            -webkit-box-align: stretch !important;
            align-items: stretch !important; }
        .align-content-sm-start {
            align-content: flex-start !important; }
        .align-content-sm-end {
            align-content: flex-end !important; }
        .align-content-sm-center {
            align-content: center !important; }
        .align-content-sm-between {
            align-content: space-between !important; }
        .align-content-sm-around {
            align-content: space-around !important; }
        .align-content-sm-stretch {
            align-content: stretch !important; }
        .align-self-sm-auto {
            align-self: auto !important; }
        .align-self-sm-start {
            align-self: flex-start !important; }
        .align-self-sm-end {
            align-self: flex-end !important; }
        .align-self-sm-center {
            align-self: center !important; }
        .align-self-sm-baseline {
            align-self: baseline !important; }
        .align-self-sm-stretch {
            align-self: stretch !important; } }

    @media (min-width: 768px) {
        .flex-md-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            flex-direction: row !important; }
        .flex-md-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            flex-direction: column !important; }
        .flex-md-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            flex-direction: row-reverse !important; }
        .flex-md-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            flex-direction: column-reverse !important; }
        .flex-md-wrap {
            flex-wrap: wrap !important; }
        .flex-md-nowrap {
            flex-wrap: nowrap !important; }
        .flex-md-wrap-reverse {
            flex-wrap: wrap-reverse !important; }
        .justify-content-md-start {
            -webkit-box-pack: start !important;
            justify-content: flex-start !important; }
        .justify-content-md-end {
            -webkit-box-pack: end !important;
            justify-content: flex-end !important; }
        .justify-content-md-center {
            -webkit-box-pack: center !important;
            justify-content: center !important; }
        .justify-content-md-between {
            -webkit-box-pack: justify !important;
            justify-content: space-between !important; }
        .justify-content-md-around {
            justify-content: space-around !important; }
        .align-items-md-start {
            -webkit-box-align: start !important;
            align-items: flex-start !important; }
        .align-items-md-end {
            -webkit-box-align: end !important;
            align-items: flex-end !important; }
        .align-items-md-center {
            -webkit-box-align: center !important;
            align-items: center !important; }
        .align-items-md-baseline {
            -webkit-box-align: baseline !important;
            align-items: baseline !important; }
        .align-items-md-stretch {
            -webkit-box-align: stretch !important;
            align-items: stretch !important; }
        .align-content-md-start {
            align-content: flex-start !important; }
        .align-content-md-end {
            align-content: flex-end !important; }
        .align-content-md-center {
            align-content: center !important; }
        .align-content-md-between {
            align-content: space-between !important; }
        .align-content-md-around {
            align-content: space-around !important; }
        .align-content-md-stretch {
            align-content: stretch !important; }
        .align-self-md-auto {
            align-self: auto !important; }
        .align-self-md-start {
            align-self: flex-start !important; }
        .align-self-md-end {
            align-self: flex-end !important; }
        .align-self-md-center {
            align-self: center !important; }
        .align-self-md-baseline {
            align-self: baseline !important; }
        .align-self-md-stretch {
            align-self: stretch !important; } }

    @media (min-width: 992px) {
        .flex-lg-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            flex-direction: row !important; }
        .flex-lg-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            flex-direction: column !important; }
        .flex-lg-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            flex-direction: row-reverse !important; }
        .flex-lg-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            flex-direction: column-reverse !important; }
        .flex-lg-wrap {
            flex-wrap: wrap !important; }
        .flex-lg-nowrap {
            flex-wrap: nowrap !important; }
        .flex-lg-wrap-reverse {
            flex-wrap: wrap-reverse !important; }
        .justify-content-lg-start {
            -webkit-box-pack: start !important;
            justify-content: flex-start !important; }
        .justify-content-lg-end {
            -webkit-box-pack: end !important;
            justify-content: flex-end !important; }
        .justify-content-lg-center {
            -webkit-box-pack: center !important;
            justify-content: center !important; }
        .justify-content-lg-between {
            -webkit-box-pack: justify !important;
            justify-content: space-between !important; }
        .justify-content-lg-around {
            justify-content: space-around !important; }
        .align-items-lg-start {
            -webkit-box-align: start !important;
            align-items: flex-start !important; }
        .align-items-lg-end {
            -webkit-box-align: end !important;
            align-items: flex-end !important; }
        .align-items-lg-center {
            -webkit-box-align: center !important;
            align-items: center !important; }
        .align-items-lg-baseline {
            -webkit-box-align: baseline !important;
            align-items: baseline !important; }
        .align-items-lg-stretch {
            -webkit-box-align: stretch !important;
            align-items: stretch !important; }
        .align-content-lg-start {
            align-content: flex-start !important; }
        .align-content-lg-end {
            align-content: flex-end !important; }
        .align-content-lg-center {
            align-content: center !important; }
        .align-content-lg-between {
            align-content: space-between !important; }
        .align-content-lg-around {
            align-content: space-around !important; }
        .align-content-lg-stretch {
            align-content: stretch !important; }
        .align-self-lg-auto {
            align-self: auto !important; }
        .align-self-lg-start {
            align-self: flex-start !important; }
        .align-self-lg-end {
            align-self: flex-end !important; }
        .align-self-lg-center {
            align-self: center !important; }
        .align-self-lg-baseline {
            align-self: baseline !important; }
        .align-self-lg-stretch {
            align-self: stretch !important; } }

    @media (min-width: 1200px) {
        .flex-xl-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            flex-direction: row !important; }
        .flex-xl-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            flex-direction: column !important; }
        .flex-xl-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            flex-direction: row-reverse !important; }
        .flex-xl-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            flex-direction: column-reverse !important; }
        .flex-xl-wrap {
            flex-wrap: wrap !important; }
        .flex-xl-nowrap {
            flex-wrap: nowrap !important; }
        .flex-xl-wrap-reverse {
            flex-wrap: wrap-reverse !important; }
        .justify-content-xl-start {
            -webkit-box-pack: start !important;
            justify-content: flex-start !important; }
        .justify-content-xl-end {
            -webkit-box-pack: end !important;
            justify-content: flex-end !important; }
        .justify-content-xl-center {
            -webkit-box-pack: center !important;
            justify-content: center !important; }
        .justify-content-xl-between {
            -webkit-box-pack: justify !important;
            justify-content: space-between !important; }
        .justify-content-xl-around {
            justify-content: space-around !important; }
        .align-items-xl-start {
            -webkit-box-align: start !important;
            align-items: flex-start !important; }
        .align-items-xl-end {
            -webkit-box-align: end !important;
            align-items: flex-end !important; }
        .align-items-xl-center {
            -webkit-box-align: center !important;
            align-items: center !important; }
        .align-items-xl-baseline {
            -webkit-box-align: baseline !important;
            align-items: baseline !important; }
        .align-items-xl-stretch {
            -webkit-box-align: stretch !important;
            align-items: stretch !important; }
        .align-content-xl-start {
            align-content: flex-start !important; }
        .align-content-xl-end {
            align-content: flex-end !important; }
        .align-content-xl-center {
            align-content: center !important; }
        .align-content-xl-between {
            align-content: space-between !important; }
        .align-content-xl-around {
            align-content: space-around !important; }
        .align-content-xl-stretch {
            align-content: stretch !important; }
        .align-self-xl-auto {
            align-self: auto !important; }
        .align-self-xl-start {
            align-self: flex-start !important; }
        .align-self-xl-end {
            align-self: flex-end !important; }
        .align-self-xl-center {
            align-self: center !important; }
        .align-self-xl-baseline {
            align-self: baseline !important; }
        .align-self-xl-stretch {
            align-self: stretch !important; } }

    .float-left {
        float: left !important; }

    .float-right {
        float: right !important; }

    .float-none {
        float: none !important; }

    @media (min-width: 576px) {
        .float-sm-left {
            float: left !important; }
        .float-sm-right {
            float: right !important; }
        .float-sm-none {
            float: none !important; } }

    @media (min-width: 768px) {
        .float-md-left {
            float: left !important; }
        .float-md-right {
            float: right !important; }
        .float-md-none {
            float: none !important; } }

    @media (min-width: 992px) {
        .float-lg-left {
            float: left !important; }
        .float-lg-right {
            float: right !important; }
        .float-lg-none {
            float: none !important; } }

    @media (min-width: 1200px) {
        .float-xl-left {
            float: left !important; }
        .float-xl-right {
            float: right !important; }
        .float-xl-none {
            float: none !important; } }

    .position-static {
        position: static !important; }

    .position-relative {
        position: relative !important; }

    .position-absolute {
        position: absolute !important; }

    .position-fixed {
        position: fixed !important; }

    .position-sticky {
        position: -webkit-sticky !important;
        position: sticky !important; }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1030; }

    .fixed-bottom {
        position: fixed;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1030; }

    @supports ((position: -webkit-sticky) or (position: sticky)) {
        .sticky-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020; } }

    .sr-only, .bootstrap-datetimepicker-widget .btn[data-action="incrementHours"]::after, .bootstrap-datetimepicker-widget .btn[data-action="incrementMinutes"]::after, .bootstrap-datetimepicker-widget .btn[data-action="decrementHours"]::after, .bootstrap-datetimepicker-widget .btn[data-action="decrementMinutes"]::after, .bootstrap-datetimepicker-widget .btn[data-action="showHours"]::after, .bootstrap-datetimepicker-widget .btn[data-action="showMinutes"]::after, .bootstrap-datetimepicker-widget .btn[data-action="togglePeriod"]::after, .bootstrap-datetimepicker-widget .btn[data-action="clear"]::after, .bootstrap-datetimepicker-widget .btn[data-action="today"]::after, .bootstrap-datetimepicker-widget .picker-switch::after, .bootstrap-datetimepicker-widget table th.prev::after, .bootstrap-datetimepicker-widget table th.next::after {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        -webkit-clip-path: inset(50%);
        clip-path: inset(50%);
        border: 0; }

    .sr-only-focusable:active, .sr-only-focusable:focus {
        position: static;
        width: auto;
        height: auto;
        overflow: visible;
        clip: auto;
        white-space: normal;
        -webkit-clip-path: none;
        clip-path: none; }

    .w-25 {
        width: 25% !important; }

    .w-50 {
        width: 50% !important; }

    .w-75 {
        width: 75% !important; }

    .w-100 {
        width: 100% !important; }

    .h-25 {
        height: 25% !important; }

    .h-50 {
        height: 50% !important; }

    .h-75 {
        height: 75% !important; }

    .h-100 {
        height: 100% !important; }

    .mw-100 {
        max-width: 100% !important; }

    .mh-100 {
        max-height: 100% !important; }

    .m-0 {
        margin: 0 !important; }

    .mt-0,
    .my-0 {
        margin-top: 0 !important; }

    .mr-0,
    .mx-0 {
        margin-right: 0 !important; }

    .mb-0,
    .my-0 {
        margin-bottom: 0 !important; }

    .ml-0,
    .mx-0 {
        margin-left: 0 !important; }

    .m-1 {
        margin: 0.25rem !important; }

    .mt-1,
    .my-1 {
        margin-top: 0.25rem !important; }

    .mr-1,
    .mx-1 {
        margin-right: 0.25rem !important; }

    .mb-1,
    .my-1 {
        margin-bottom: 0.25rem !important; }

    .ml-1,
    .mx-1 {
        margin-left: 0.25rem !important; }

    .m-2 {
        margin: 0.5rem !important; }

    .mt-2,
    .my-2 {
        margin-top: 0.5rem !important; }

    .mr-2,
    .mx-2 {
        margin-right: 0.5rem !important; }

    .mb-2,
    .my-2 {
        margin-bottom: 0.5rem !important; }

    .ml-2,
    .mx-2 {
        margin-left: 0.5rem !important; }

    .m-3 {
        margin: 1rem !important; }

    .mt-3,
    .my-3 {
        margin-top: 1rem !important; }

    .mr-3,
    .mx-3 {
        margin-right: 1rem !important; }

    .mb-3,
    .my-3 {
        margin-bottom: 1rem !important; }

    .ml-3,
    .mx-3 {
        margin-left: 1rem !important; }

    .m-4 {
        margin: 1.5rem !important; }

    .mt-4,
    .my-4 {
        margin-top: 1.5rem !important; }

    .mr-4,
    .mx-4 {
        margin-right: 1.5rem !important; }

    .mb-4,
    .my-4 {
        margin-bottom: 1.5rem !important; }

    .ml-4,
    .mx-4 {
        margin-left: 1.5rem !important; }

    .m-5 {
        margin: 3rem !important; }

    .mt-5,
    .my-5 {
        margin-top: 3rem !important; }

    .mr-5,
    .mx-5 {
        margin-right: 3rem !important; }

    .mb-5,
    .my-5 {
        margin-bottom: 3rem !important; }

    .ml-5,
    .mx-5 {
        margin-left: 3rem !important; }

    .p-0 {
        padding: 0 !important; }

    .pt-0,
    .py-0 {
        padding-top: 0 !important; }

    .pr-0,
    .px-0 {
        padding-right: 0 !important; }

    .pb-0,
    .py-0 {
        padding-bottom: 0 !important; }

    .pl-0,
    .px-0 {
        padding-left: 0 !important; }

    .p-1 {
        padding: 0.25rem !important; }

    .pt-1,
    .py-1 {
        padding-top: 0.25rem !important; }

    .pr-1,
    .px-1 {
        padding-right: 0.25rem !important; }

    .pb-1,
    .py-1 {
        padding-bottom: 0.25rem !important; }

    .pl-1,
    .px-1 {
        padding-left: 0.25rem !important; }

    .p-2 {
        padding: 0.5rem !important; }

    .pt-2,
    .py-2 {
        padding-top: 0.5rem !important; }

    .pr-2,
    .px-2 {
        padding-right: 0.5rem !important; }

    .pb-2,
    .py-2 {
        padding-bottom: 0.5rem !important; }

    .pl-2,
    .px-2 {
        padding-left: 0.5rem !important; }

    .p-3 {
        padding: 1rem !important; }

    .pt-3,
    .py-3 {
        padding-top: 1rem !important; }

    .pr-3,
    .px-3 {
        padding-right: 1rem !important; }

    .pb-3,
    .py-3 {
        padding-bottom: 1rem !important; }

    .pl-3,
    .px-3 {
        padding-left: 1rem !important; }

    .p-4 {
        padding: 1.5rem !important; }

    .pt-4,
    .py-4 {
        padding-top: 1.5rem !important; }

    .pr-4,
    .px-4 {
        padding-right: 1.5rem !important; }

    .pb-4,
    .py-4 {
        padding-bottom: 1.5rem !important; }

    .pl-4,
    .px-4 {
        padding-left: 1.5rem !important; }

    .p-5 {
        padding: 3rem !important; }

    .pt-5,
    .py-5 {
        padding-top: 3rem !important; }

    .pr-5,
    .px-5 {
        padding-right: 3rem !important; }

    .pb-5,
    .py-5 {
        padding-bottom: 3rem !important; }

    .pl-5,
    .px-5 {
        padding-left: 3rem !important; }

    .m-auto {
        margin: auto !important; }

    .mt-auto,
    .my-auto {
        margin-top: auto !important; }

    .mr-auto,
    .mx-auto {
        margin-right: auto !important; }

    .mb-auto,
    .my-auto {
        margin-bottom: auto !important; }

    .ml-auto,
    .mx-auto {
        margin-left: auto !important; }

    @media (min-width: 576px) {
        .m-sm-0 {
            margin: 0 !important; }
        .mt-sm-0,
        .my-sm-0 {
            margin-top: 0 !important; }
        .mr-sm-0,
        .mx-sm-0 {
            margin-right: 0 !important; }
        .mb-sm-0,
        .my-sm-0 {
            margin-bottom: 0 !important; }
        .ml-sm-0,
        .mx-sm-0 {
            margin-left: 0 !important; }
        .m-sm-1 {
            margin: 0.25rem !important; }
        .mt-sm-1,
        .my-sm-1 {
            margin-top: 0.25rem !important; }
        .mr-sm-1,
        .mx-sm-1 {
            margin-right: 0.25rem !important; }
        .mb-sm-1,
        .my-sm-1 {
            margin-bottom: 0.25rem !important; }
        .ml-sm-1,
        .mx-sm-1 {
            margin-left: 0.25rem !important; }
        .m-sm-2 {
            margin: 0.5rem !important; }
        .mt-sm-2,
        .my-sm-2 {
            margin-top: 0.5rem !important; }
        .mr-sm-2,
        .mx-sm-2 {
            margin-right: 0.5rem !important; }
        .mb-sm-2,
        .my-sm-2 {
            margin-bottom: 0.5rem !important; }
        .ml-sm-2,
        .mx-sm-2 {
            margin-left: 0.5rem !important; }
        .m-sm-3 {
            margin: 1rem !important; }
        .mt-sm-3,
        .my-sm-3 {
            margin-top: 1rem !important; }
        .mr-sm-3,
        .mx-sm-3 {
            margin-right: 1rem !important; }
        .mb-sm-3,
        .my-sm-3 {
            margin-bottom: 1rem !important; }
        .ml-sm-3,
        .mx-sm-3 {
            margin-left: 1rem !important; }
        .m-sm-4 {
            margin: 1.5rem !important; }
        .mt-sm-4,
        .my-sm-4 {
            margin-top: 1.5rem !important; }
        .mr-sm-4,
        .mx-sm-4 {
            margin-right: 1.5rem !important; }
        .mb-sm-4,
        .my-sm-4 {
            margin-bottom: 1.5rem !important; }
        .ml-sm-4,
        .mx-sm-4 {
            margin-left: 1.5rem !important; }
        .m-sm-5 {
            margin: 3rem !important; }
        .mt-sm-5,
        .my-sm-5 {
            margin-top: 3rem !important; }
        .mr-sm-5,
        .mx-sm-5 {
            margin-right: 3rem !important; }
        .mb-sm-5,
        .my-sm-5 {
            margin-bottom: 3rem !important; }
        .ml-sm-5,
        .mx-sm-5 {
            margin-left: 3rem !important; }
        .p-sm-0 {
            padding: 0 !important; }
        .pt-sm-0,
        .py-sm-0 {
            padding-top: 0 !important; }
        .pr-sm-0,
        .px-sm-0 {
            padding-right: 0 !important; }
        .pb-sm-0,
        .py-sm-0 {
            padding-bottom: 0 !important; }
        .pl-sm-0,
        .px-sm-0 {
            padding-left: 0 !important; }
        .p-sm-1 {
            padding: 0.25rem !important; }
        .pt-sm-1,
        .py-sm-1 {
            padding-top: 0.25rem !important; }
        .pr-sm-1,
        .px-sm-1 {
            padding-right: 0.25rem !important; }
        .pb-sm-1,
        .py-sm-1 {
            padding-bottom: 0.25rem !important; }
        .pl-sm-1,
        .px-sm-1 {
            padding-left: 0.25rem !important; }
        .p-sm-2 {
            padding: 0.5rem !important; }
        .pt-sm-2,
        .py-sm-2 {
            padding-top: 0.5rem !important; }
        .pr-sm-2,
        .px-sm-2 {
            padding-right: 0.5rem !important; }
        .pb-sm-2,
        .py-sm-2 {
            padding-bottom: 0.5rem !important; }
        .pl-sm-2,
        .px-sm-2 {
            padding-left: 0.5rem !important; }
        .p-sm-3 {
            padding: 1rem !important; }
        .pt-sm-3,
        .py-sm-3 {
            padding-top: 1rem !important; }
        .pr-sm-3,
        .px-sm-3 {
            padding-right: 1rem !important; }
        .pb-sm-3,
        .py-sm-3 {
            padding-bottom: 1rem !important; }
        .pl-sm-3,
        .px-sm-3 {
            padding-left: 1rem !important; }
        .p-sm-4 {
            padding: 1.5rem !important; }
        .pt-sm-4,
        .py-sm-4 {
            padding-top: 1.5rem !important; }
        .pr-sm-4,
        .px-sm-4 {
            padding-right: 1.5rem !important; }
        .pb-sm-4,
        .py-sm-4 {
            padding-bottom: 1.5rem !important; }
        .pl-sm-4,
        .px-sm-4 {
            padding-left: 1.5rem !important; }
        .p-sm-5 {
            padding: 3rem !important; }
        .pt-sm-5,
        .py-sm-5 {
            padding-top: 3rem !important; }
        .pr-sm-5,
        .px-sm-5 {
            padding-right: 3rem !important; }
        .pb-sm-5,
        .py-sm-5 {
            padding-bottom: 3rem !important; }
        .pl-sm-5,
        .px-sm-5 {
            padding-left: 3rem !important; }
        .m-sm-auto {
            margin: auto !important; }
        .mt-sm-auto,
        .my-sm-auto {
            margin-top: auto !important; }
        .mr-sm-auto,
        .mx-sm-auto {
            margin-right: auto !important; }
        .mb-sm-auto,
        .my-sm-auto {
            margin-bottom: auto !important; }
        .ml-sm-auto,
        .mx-sm-auto {
            margin-left: auto !important; } }

    @media (min-width: 768px) {
        .m-md-0 {
            margin: 0 !important; }
        .mt-md-0,
        .my-md-0 {
            margin-top: 0 !important; }
        .mr-md-0,
        .mx-md-0 {
            margin-right: 0 !important; }
        .mb-md-0,
        .my-md-0 {
            margin-bottom: 0 !important; }
        .ml-md-0,
        .mx-md-0 {
            margin-left: 0 !important; }
        .m-md-1 {
            margin: 0.25rem !important; }
        .mt-md-1,
        .my-md-1 {
            margin-top: 0.25rem !important; }
        .mr-md-1,
        .mx-md-1 {
            margin-right: 0.25rem !important; }
        .mb-md-1,
        .my-md-1 {
            margin-bottom: 0.25rem !important; }
        .ml-md-1,
        .mx-md-1 {
            margin-left: 0.25rem !important; }
        .m-md-2 {
            margin: 0.5rem !important; }
        .mt-md-2,
        .my-md-2 {
            margin-top: 0.5rem !important; }
        .mr-md-2,
        .mx-md-2 {
            margin-right: 0.5rem !important; }
        .mb-md-2,
        .my-md-2 {
            margin-bottom: 0.5rem !important; }
        .ml-md-2,
        .mx-md-2 {
            margin-left: 0.5rem !important; }
        .m-md-3 {
            margin: 1rem !important; }
        .mt-md-3,
        .my-md-3 {
            margin-top: 1rem !important; }
        .mr-md-3,
        .mx-md-3 {
            margin-right: 1rem !important; }
        .mb-md-3,
        .my-md-3 {
            margin-bottom: 1rem !important; }
        .ml-md-3,
        .mx-md-3 {
            margin-left: 1rem !important; }
        .m-md-4 {
            margin: 1.5rem !important; }
        .mt-md-4,
        .my-md-4 {
            margin-top: 1.5rem !important; }
        .mr-md-4,
        .mx-md-4 {
            margin-right: 1.5rem !important; }
        .mb-md-4,
        .my-md-4 {
            margin-bottom: 1.5rem !important; }
        .ml-md-4,
        .mx-md-4 {
            margin-left: 1.5rem !important; }
        .m-md-5 {
            margin: 3rem !important; }
        .mt-md-5,
        .my-md-5 {
            margin-top: 3rem !important; }
        .mr-md-5,
        .mx-md-5 {
            margin-right: 3rem !important; }
        .mb-md-5,
        .my-md-5 {
            margin-bottom: 3rem !important; }
        .ml-md-5,
        .mx-md-5 {
            margin-left: 3rem !important; }
        .p-md-0 {
            padding: 0 !important; }
        .pt-md-0,
        .py-md-0 {
            padding-top: 0 !important; }
        .pr-md-0,
        .px-md-0 {
            padding-right: 0 !important; }
        .pb-md-0,
        .py-md-0 {
            padding-bottom: 0 !important; }
        .pl-md-0,
        .px-md-0 {
            padding-left: 0 !important; }
        .p-md-1 {
            padding: 0.25rem !important; }
        .pt-md-1,
        .py-md-1 {
            padding-top: 0.25rem !important; }
        .pr-md-1,
        .px-md-1 {
            padding-right: 0.25rem !important; }
        .pb-md-1,
        .py-md-1 {
            padding-bottom: 0.25rem !important; }
        .pl-md-1,
        .px-md-1 {
            padding-left: 0.25rem !important; }
        .p-md-2 {
            padding: 0.5rem !important; }
        .pt-md-2,
        .py-md-2 {
            padding-top: 0.5rem !important; }
        .pr-md-2,
        .px-md-2 {
            padding-right: 0.5rem !important; }
        .pb-md-2,
        .py-md-2 {
            padding-bottom: 0.5rem !important; }
        .pl-md-2,
        .px-md-2 {
            padding-left: 0.5rem !important; }
        .p-md-3 {
            padding: 1rem !important; }
        .pt-md-3,
        .py-md-3 {
            padding-top: 1rem !important; }
        .pr-md-3,
        .px-md-3 {
            padding-right: 1rem !important; }
        .pb-md-3,
        .py-md-3 {
            padding-bottom: 1rem !important; }
        .pl-md-3,
        .px-md-3 {
            padding-left: 1rem !important; }
        .p-md-4 {
            padding: 1.5rem !important; }
        .pt-md-4,
        .py-md-4 {
            padding-top: 1.5rem !important; }
        .pr-md-4,
        .px-md-4 {
            padding-right: 1.5rem !important; }
        .pb-md-4,
        .py-md-4 {
            padding-bottom: 1.5rem !important; }
        .pl-md-4,
        .px-md-4 {
            padding-left: 1.5rem !important; }
        .p-md-5 {
            padding: 3rem !important; }
        .pt-md-5,
        .py-md-5 {
            padding-top: 3rem !important; }
        .pr-md-5,
        .px-md-5 {
            padding-right: 3rem !important; }
        .pb-md-5,
        .py-md-5 {
            padding-bottom: 3rem !important; }
        .pl-md-5,
        .px-md-5 {
            padding-left: 3rem !important; }
        .m-md-auto {
            margin: auto !important; }
        .mt-md-auto,
        .my-md-auto {
            margin-top: auto !important; }
        .mr-md-auto,
        .mx-md-auto {
            margin-right: auto !important; }
        .mb-md-auto,
        .my-md-auto {
            margin-bottom: auto !important; }
        .ml-md-auto,
        .mx-md-auto {
            margin-left: auto !important; } }

    @media (min-width: 992px) {
        .m-lg-0 {
            margin: 0 !important; }
        .mt-lg-0,
        .my-lg-0 {
            margin-top: 0 !important; }
        .mr-lg-0,
        .mx-lg-0 {
            margin-right: 0 !important; }
        .mb-lg-0,
        .my-lg-0 {
            margin-bottom: 0 !important; }
        .ml-lg-0,
        .mx-lg-0 {
            margin-left: 0 !important; }
        .m-lg-1 {
            margin: 0.25rem !important; }
        .mt-lg-1,
        .my-lg-1 {
            margin-top: 0.25rem !important; }
        .mr-lg-1,
        .mx-lg-1 {
            margin-right: 0.25rem !important; }
        .mb-lg-1,
        .my-lg-1 {
            margin-bottom: 0.25rem !important; }
        .ml-lg-1,
        .mx-lg-1 {
            margin-left: 0.25rem !important; }
        .m-lg-2 {
            margin: 0.5rem !important; }
        .mt-lg-2,
        .my-lg-2 {
            margin-top: 0.5rem !important; }
        .mr-lg-2,
        .mx-lg-2 {
            margin-right: 0.5rem !important; }
        .mb-lg-2,
        .my-lg-2 {
            margin-bottom: 0.5rem !important; }
        .ml-lg-2,
        .mx-lg-2 {
            margin-left: 0.5rem !important; }
        .m-lg-3 {
            margin: 1rem !important; }
        .mt-lg-3,
        .my-lg-3 {
            margin-top: 1rem !important; }
        .mr-lg-3,
        .mx-lg-3 {
            margin-right: 1rem !important; }
        .mb-lg-3,
        .my-lg-3 {
            margin-bottom: 1rem !important; }
        .ml-lg-3,
        .mx-lg-3 {
            margin-left: 1rem !important; }
        .m-lg-4 {
            margin: 1.5rem !important; }
        .mt-lg-4,
        .my-lg-4 {
            margin-top: 1.5rem !important; }
        .mr-lg-4,
        .mx-lg-4 {
            margin-right: 1.5rem !important; }
        .mb-lg-4,
        .my-lg-4 {
            margin-bottom: 1.5rem !important; }
        .ml-lg-4,
        .mx-lg-4 {
            margin-left: 1.5rem !important; }
        .m-lg-5 {
            margin: 3rem !important; }
        .mt-lg-5,
        .my-lg-5 {
            margin-top: 3rem !important; }
        .mr-lg-5,
        .mx-lg-5 {
            margin-right: 3rem !important; }
        .mb-lg-5,
        .my-lg-5 {
            margin-bottom: 3rem !important; }
        .ml-lg-5,
        .mx-lg-5 {
            margin-left: 3rem !important; }
        .p-lg-0 {
            padding: 0 !important; }
        .pt-lg-0,
        .py-lg-0 {
            padding-top: 0 !important; }
        .pr-lg-0,
        .px-lg-0 {
            padding-right: 0 !important; }
        .pb-lg-0,
        .py-lg-0 {
            padding-bottom: 0 !important; }
        .pl-lg-0,
        .px-lg-0 {
            padding-left: 0 !important; }
        .p-lg-1 {
            padding: 0.25rem !important; }
        .pt-lg-1,
        .py-lg-1 {
            padding-top: 0.25rem !important; }
        .pr-lg-1,
        .px-lg-1 {
            padding-right: 0.25rem !important; }
        .pb-lg-1,
        .py-lg-1 {
            padding-bottom: 0.25rem !important; }
        .pl-lg-1,
        .px-lg-1 {
            padding-left: 0.25rem !important; }
        .p-lg-2 {
            padding: 0.5rem !important; }
        .pt-lg-2,
        .py-lg-2 {
            padding-top: 0.5rem !important; }
        .pr-lg-2,
        .px-lg-2 {
            padding-right: 0.5rem !important; }
        .pb-lg-2,
        .py-lg-2 {
            padding-bottom: 0.5rem !important; }
        .pl-lg-2,
        .px-lg-2 {
            padding-left: 0.5rem !important; }
        .p-lg-3 {
            padding: 1rem !important; }
        .pt-lg-3,
        .py-lg-3 {
            padding-top: 1rem !important; }
        .pr-lg-3,
        .px-lg-3 {
            padding-right: 1rem !important; }
        .pb-lg-3,
        .py-lg-3 {
            padding-bottom: 1rem !important; }
        .pl-lg-3,
        .px-lg-3 {
            padding-left: 1rem !important; }
        .p-lg-4 {
            padding: 1.5rem !important; }
        .pt-lg-4,
        .py-lg-4 {
            padding-top: 1.5rem !important; }
        .pr-lg-4,
        .px-lg-4 {
            padding-right: 1.5rem !important; }
        .pb-lg-4,
        .py-lg-4 {
            padding-bottom: 1.5rem !important; }
        .pl-lg-4,
        .px-lg-4 {
            padding-left: 1.5rem !important; }
        .p-lg-5 {
            padding: 3rem !important; }
        .pt-lg-5,
        .py-lg-5 {
            padding-top: 3rem !important; }
        .pr-lg-5,
        .px-lg-5 {
            padding-right: 3rem !important; }
        .pb-lg-5,
        .py-lg-5 {
            padding-bottom: 3rem !important; }
        .pl-lg-5,
        .px-lg-5 {
            padding-left: 3rem !important; }
        .m-lg-auto {
            margin: auto !important; }
        .mt-lg-auto,
        .my-lg-auto {
            margin-top: auto !important; }
        .mr-lg-auto,
        .mx-lg-auto {
            margin-right: auto !important; }
        .mb-lg-auto,
        .my-lg-auto {
            margin-bottom: auto !important; }
        .ml-lg-auto,
        .mx-lg-auto {
            margin-left: auto !important; } }

    @media (min-width: 1200px) {
        .m-xl-0 {
            margin: 0 !important; }
        .mt-xl-0,
        .my-xl-0 {
            margin-top: 0 !important; }
        .mr-xl-0,
        .mx-xl-0 {
            margin-right: 0 !important; }
        .mb-xl-0,
        .my-xl-0 {
            margin-bottom: 0 !important; }
        .ml-xl-0,
        .mx-xl-0 {
            margin-left: 0 !important; }
        .m-xl-1 {
            margin: 0.25rem !important; }
        .mt-xl-1,
        .my-xl-1 {
            margin-top: 0.25rem !important; }
        .mr-xl-1,
        .mx-xl-1 {
            margin-right: 0.25rem !important; }
        .mb-xl-1,
        .my-xl-1 {
            margin-bottom: 0.25rem !important; }
        .ml-xl-1,
        .mx-xl-1 {
            margin-left: 0.25rem !important; }
        .m-xl-2 {
            margin: 0.5rem !important; }
        .mt-xl-2,
        .my-xl-2 {
            margin-top: 0.5rem !important; }
        .mr-xl-2,
        .mx-xl-2 {
            margin-right: 0.5rem !important; }
        .mb-xl-2,
        .my-xl-2 {
            margin-bottom: 0.5rem !important; }
        .ml-xl-2,
        .mx-xl-2 {
            margin-left: 0.5rem !important; }
        .m-xl-3 {
            margin: 1rem !important; }
        .mt-xl-3,
        .my-xl-3 {
            margin-top: 1rem !important; }
        .mr-xl-3,
        .mx-xl-3 {
            margin-right: 1rem !important; }
        .mb-xl-3,
        .my-xl-3 {
            margin-bottom: 1rem !important; }
        .ml-xl-3,
        .mx-xl-3 {
            margin-left: 1rem !important; }
        .m-xl-4 {
            margin: 1.5rem !important; }
        .mt-xl-4,
        .my-xl-4 {
            margin-top: 1.5rem !important; }
        .mr-xl-4,
        .mx-xl-4 {
            margin-right: 1.5rem !important; }
        .mb-xl-4,
        .my-xl-4 {
            margin-bottom: 1.5rem !important; }
        .ml-xl-4,
        .mx-xl-4 {
            margin-left: 1.5rem !important; }
        .m-xl-5 {
            margin: 3rem !important; }
        .mt-xl-5,
        .my-xl-5 {
            margin-top: 3rem !important; }
        .mr-xl-5,
        .mx-xl-5 {
            margin-right: 3rem !important; }
        .mb-xl-5,
        .my-xl-5 {
            margin-bottom: 3rem !important; }
        .ml-xl-5,
        .mx-xl-5 {
            margin-left: 3rem !important; }
        .p-xl-0 {
            padding: 0 !important; }
        .pt-xl-0,
        .py-xl-0 {
            padding-top: 0 !important; }
        .pr-xl-0,
        .px-xl-0 {
            padding-right: 0 !important; }
        .pb-xl-0,
        .py-xl-0 {
            padding-bottom: 0 !important; }
        .pl-xl-0,
        .px-xl-0 {
            padding-left: 0 !important; }
        .p-xl-1 {
            padding: 0.25rem !important; }
        .pt-xl-1,
        .py-xl-1 {
            padding-top: 0.25rem !important; }
        .pr-xl-1,
        .px-xl-1 {
            padding-right: 0.25rem !important; }
        .pb-xl-1,
        .py-xl-1 {
            padding-bottom: 0.25rem !important; }
        .pl-xl-1,
        .px-xl-1 {
            padding-left: 0.25rem !important; }
        .p-xl-2 {
            padding: 0.5rem !important; }
        .pt-xl-2,
        .py-xl-2 {
            padding-top: 0.5rem !important; }
        .pr-xl-2,
        .px-xl-2 {
            padding-right: 0.5rem !important; }
        .pb-xl-2,
        .py-xl-2 {
            padding-bottom: 0.5rem !important; }
        .pl-xl-2,
        .px-xl-2 {
            padding-left: 0.5rem !important; }
        .p-xl-3 {
            padding: 1rem !important; }
        .pt-xl-3,
        .py-xl-3 {
            padding-top: 1rem !important; }
        .pr-xl-3,
        .px-xl-3 {
            padding-right: 1rem !important; }
        .pb-xl-3,
        .py-xl-3 {
            padding-bottom: 1rem !important; }
        .pl-xl-3,
        .px-xl-3 {
            padding-left: 1rem !important; }
        .p-xl-4 {
            padding: 1.5rem !important; }
        .pt-xl-4,
        .py-xl-4 {
            padding-top: 1.5rem !important; }
        .pr-xl-4,
        .px-xl-4 {
            padding-right: 1.5rem !important; }
        .pb-xl-4,
        .py-xl-4 {
            padding-bottom: 1.5rem !important; }
        .pl-xl-4,
        .px-xl-4 {
            padding-left: 1.5rem !important; }
        .p-xl-5 {
            padding: 3rem !important; }
        .pt-xl-5,
        .py-xl-5 {
            padding-top: 3rem !important; }
        .pr-xl-5,
        .px-xl-5 {
            padding-right: 3rem !important; }
        .pb-xl-5,
        .py-xl-5 {
            padding-bottom: 3rem !important; }
        .pl-xl-5,
        .px-xl-5 {
            padding-left: 3rem !important; }
        .m-xl-auto {
            margin: auto !important; }
        .mt-xl-auto,
        .my-xl-auto {
            margin-top: auto !important; }
        .mr-xl-auto,
        .mx-xl-auto {
            margin-right: auto !important; }
        .mb-xl-auto,
        .my-xl-auto {
            margin-bottom: auto !important; }
        .ml-xl-auto,
        .mx-xl-auto {
            margin-left: auto !important; } }

    .text-justify {
        text-align: justify !important; }

    .text-nowrap {
        white-space: nowrap !important; }

    .text-truncate {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap; }

    .text-left {
        text-align: left !important; }

    .text-right {
        text-align: right !important; }

    .text-center {
        text-align: center !important; }

    @media (min-width: 576px) {
        .text-sm-left {
            text-align: left !important; }
        .text-sm-right {
            text-align: right !important; }
        .text-sm-center {
            text-align: center !important; } }

    @media (min-width: 768px) {
        .text-md-left {
            text-align: left !important; }
        .text-md-right {
            text-align: right !important; }
        .text-md-center {
            text-align: center !important; } }

    @media (min-width: 992px) {
        .text-lg-left {
            text-align: left !important; }
        .text-lg-right {
            text-align: right !important; }
        .text-lg-center {
            text-align: center !important; } }

    @media (min-width: 1200px) {
        .text-xl-left {
            text-align: left !important; }
        .text-xl-right {
            text-align: right !important; }
        .text-xl-center {
            text-align: center !important; } }

    .text-lowercase {
        text-transform: lowercase !important; }

    .text-uppercase {
        text-transform: uppercase !important; }

    .text-capitalize {
        text-transform: capitalize !important; }

    .font-weight-light {
        font-weight: 300 !important; }

    .font-weight-normal {
        font-weight: 400 !important; }

    .font-weight-bold {
        font-weight: 500 !important; }

    .font-italic {
        font-style: italic !important; }

    .text-white {
        color: #fff !important; }

    .text-primary {
        color: #2196f3 !important; }

    a.text-primary:hover, a.text-primary:focus {
        color: #0c7cd5 !important; }

    .text-secondary {
        color: #6c757d !important; }

    a.text-secondary:hover, a.text-secondary:focus {
        color: #545b62 !important; }

    .text-success {
        color: #4caf50 !important; }

    a.text-success:hover, a.text-success:focus {
        color: #3d8b40 !important; }

    .text-info {
        color: #00bcd4 !important; }

    a.text-info:hover, a.text-info:focus {
        color: #008fa1 !important; }

    .text-warning {
        color: #ffeb3b !important; }

    a.text-warning:hover, a.text-warning:focus {
        color: #ffe608 !important; }

    .text-danger {
        color: #f44336 !important; }

    a.text-danger:hover, a.text-danger:focus {
        color: #ea1c0d !important; }

    .text-light {
        color: #f8f9fa !important; }

    a.text-light:hover, a.text-light:focus {
        color: #dae0e5 !important; }

    .text-dark {
        color: #343a40 !important; }

    a.text-dark:hover, a.text-dark:focus {
        color: #1d2124 !important; }

    .text-muted, .bmd-help {
        color: #6c757d !important; }

    .text-hide {
        font: 0/0 a;
        color: transparent;
        text-shadow: none;
        background-color: transparent;
        border: 0; }

    .visible {
        visibility: visible !important; }

    .invisible {
        visibility: hidden !important; }

    body {
        background-color: #FFFFFF; }

    a:focus {
        outline: none; }

    button:focus {
        outline: none; }

    .bmd-layout-canvas {
        position: absolute;
        width: 100%;
        height: 100%; }

    .bmd-layout-container {
        position: relative;
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        width: 100%;
        height: 100%;
        overflow-x: hidden;
        overflow-y: auto;
        -webkit-overflow-scrolling: touch; }

    .bmd-layout-header {
        z-index: 3;
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        flex-wrap: nowrap;
        flex-shrink: 0;
        -webkit-box-pack: start;
        justify-content: flex-start;
        width: 100%;
        max-height: 1000px;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        -webkit-transition-duration: 0.2s;
        transition-duration: 0.2s;
        -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); }

    .bmd-layout-content {
        position: relative;
        z-index: 1;
        display: inline-block;
        -webkit-box-flex: 1;
        flex-grow: 1;
        overflow-x: hidden;
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
        -webkit-transition-duration: 0.2s;
        transition-duration: 0.2s;
        -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); }

    .bmd-layout-spacer {
        -webkit-box-flex: 1;
        flex-grow: 1; }

    .bmd-layout-backdrop {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 4;
        width: 100%;
        height: 100%;
        visibility: hidden;
        background-color: transparent;
        -webkit-transition-property: background-color;
        transition-property: background-color;
        -webkit-transition-duration: 0.2s;
        transition-duration: 0.2s;
        -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); }
    @supports (pointer-events: auto) {
        .bmd-layout-backdrop {
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            -webkit-transition-property: opacity;
            transition-property: opacity;
            visibility: visible;
            pointer-events: none; } }

    .btn {
        position: relative;
        padding: 12px 30px;
        margin: 0.3125rem 1px;
        font-size: .75rem;
        font-weight: 400;
        line-height: 1.42857;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 0;
        cursor: pointer;
        background-color: transparent;
        border: 0;
        border-radius: 0.2rem;
        outline: 0;
        -webkit-transition: box-shadow 0.2s cubic-bezier(0.4, 0, 1, 1), background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        transition: box-shadow 0.2s cubic-bezier(0.4, 0, 1, 1), background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        will-change: box-shadow, transform; }
    .btn:focus, .btn.focus, .btn:active:focus, .btn:active.focus, .btn:active:focus:focus, .btn:active:focus.focus, .btn.active:focus, .btn.active.focus {
        outline: 0;
        box-shadow: none !important; }
    .btn.btn-primary {
        color: #fff;
        background-color: #9c27b0;
        border-color: #9c27b0;
        box-shadow: 0 2px 2px 0 rgba(156, 39, 176, 0.14), 0 3px 1px -2px rgba(156, 39, 176, 0.2), 0 1px 5px 0 rgba(156, 39, 176, 0.12); }
    .btn.btn-primary:hover {
        color: #fff;
        background-color: #9124a3;
        border-color: #701c7e; }
    .btn.btn-primary:focus, .btn.btn-primary.focus, .btn.btn-primary:hover {
        color: #fff;
        background-color: #9124a3;
        border-color: #701c7e; }
    .btn.btn-primary:active, .btn.btn-primary.active,
    .open > .btn.btn-primary.dropdown-toggle,
    .show > .btn.btn-primary.dropdown-toggle {
        color: #fff;
        background-color: #9124a3;
        border-color: #701c7e;
        box-shadow: 0 2px 2px 0 rgba(156, 39, 176, 0.14), 0 3px 1px -2px rgba(156, 39, 176, 0.2), 0 1px 5px 0 rgba(156, 39, 176, 0.12); }
    .btn.btn-primary:active:hover, .btn.btn-primary:active:focus, .btn.btn-primary:active.focus, .btn.btn-primary.active:hover, .btn.btn-primary.active:focus, .btn.btn-primary.active.focus,
    .open > .btn.btn-primary.dropdown-toggle:hover,
    .open > .btn.btn-primary.dropdown-toggle:focus,
    .open > .btn.btn-primary.dropdown-toggle.focus,
    .show > .btn.btn-primary.dropdown-toggle:hover,
    .show > .btn.btn-primary.dropdown-toggle:focus,
    .show > .btn.btn-primary.dropdown-toggle.focus {
        color: #fff;
        background-color: #9124a3;
        border-color: #3f1048; }
    .open > .btn.btn-primary.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: #9c27b0; }
    .open > .btn.btn-primary.dropdown-toggle.bmd-btn-icon:hover {
        background-color: #9124a3; }
    .btn.btn-primary.disabled:focus, .btn.btn-primary.disabled.focus, .btn.btn-primary:disabled:focus, .btn.btn-primary:disabled.focus {
        background-color: #9c27b0;
        border-color: #9c27b0; }
    .btn.btn-primary.disabled:hover, .btn.btn-primary:disabled:hover {
        background-color: #9c27b0;
        border-color: #9c27b0; }
    .btn.btn-primary:focus, .btn.btn-primary:active, .btn.btn-primary:hover {
        box-shadow: 0 14px 26px -12px rgba(156, 39, 176, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(156, 39, 176, 0.2); }
    .btn.btn-primary.btn-link {
        background-color: transparent;
        color: #9c27b0;
        box-shadow: none; }
    .btn.btn-primary.btn-link:hover, .btn.btn-primary.btn-link:focus, .btn.btn-primary.btn-link:active {
        background-color: transparent;
        color: #9c27b0; }
    .btn.btn-secondary {
        color: rgba(0, 0, 0, 0.87);
        background-color: #fafafa;
        border-color: #ccc;
        box-shadow: 0 2px 2px 0 rgba(250, 250, 250, 0.14), 0 3px 1px -2px rgba(250, 250, 250, 0.2), 0 1px 5px 0 rgba(250, 250, 250, 0.12); }
    .btn.btn-secondary:hover {
        color: rgba(0, 0, 0, 0.87);
        background-color: #f2f2f2;
        border-color: #adadad; }
    .btn.btn-secondary:focus, .btn.btn-secondary.focus, .btn.btn-secondary:hover {
        color: rgba(0, 0, 0, 0.87);
        background-color: #f2f2f2;
        border-color: #adadad; }
    .btn.btn-secondary:active, .btn.btn-secondary.active,
    .open > .btn.btn-secondary.dropdown-toggle,
    .show > .btn.btn-secondary.dropdown-toggle {
        color: rgba(0, 0, 0, 0.87);
        background-color: #f2f2f2;
        border-color: #adadad;
        box-shadow: 0 2px 2px 0 rgba(250, 250, 250, 0.14), 0 3px 1px -2px rgba(250, 250, 250, 0.2), 0 1px 5px 0 rgba(250, 250, 250, 0.12); }
    .btn.btn-secondary:active:hover, .btn.btn-secondary:active:focus, .btn.btn-secondary:active.focus, .btn.btn-secondary.active:hover, .btn.btn-secondary.active:focus, .btn.btn-secondary.active.focus,
    .open > .btn.btn-secondary.dropdown-toggle:hover,
    .open > .btn.btn-secondary.dropdown-toggle:focus,
    .open > .btn.btn-secondary.dropdown-toggle.focus,
    .show > .btn.btn-secondary.dropdown-toggle:hover,
    .show > .btn.btn-secondary.dropdown-toggle:focus,
    .show > .btn.btn-secondary.dropdown-toggle.focus {
        color: rgba(0, 0, 0, 0.87);
        background-color: #f2f2f2;
        border-color: #8c8c8c; }
    .open > .btn.btn-secondary.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: #fafafa; }
    .open > .btn.btn-secondary.dropdown-toggle.bmd-btn-icon:hover {
        background-color: #f2f2f2; }
    .btn.btn-secondary.disabled:focus, .btn.btn-secondary.disabled.focus, .btn.btn-secondary:disabled:focus, .btn.btn-secondary:disabled.focus {
        background-color: #fafafa;
        border-color: #ccc; }
    .btn.btn-secondary.disabled:hover, .btn.btn-secondary:disabled:hover {
        background-color: #fafafa;
        border-color: #ccc; }
    .btn.btn-secondary:focus, .btn.btn-secondary:active, .btn.btn-secondary:hover {
        box-shadow: 0 14px 26px -12px rgba(250, 250, 250, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(250, 250, 250, 0.2); }
    .btn.btn-secondary.btn-link {
        background-color: transparent;
        color: #fafafa;
        box-shadow: none; }
    .btn.btn-secondary.btn-link:hover, .btn.btn-secondary.btn-link:focus, .btn.btn-secondary.btn-link:active {
        background-color: transparent;
        color: #fafafa; }
    .btn.btn-info {
        color: #fff;
        background-color: #00bcd4;
        border-color: #00bcd4;
        box-shadow: 0 2px 2px 0 rgba(0, 188, 212, 0.14), 0 3px 1px -2px rgba(0, 188, 212, 0.2), 0 1px 5px 0 rgba(0, 188, 212, 0.12); }
    .btn.btn-info:hover {
        color: #fff;
        background-color: #00aec5;
        border-color: #008697; }
    .btn.btn-info:focus, .btn.btn-info.focus, .btn.btn-info:hover {
        color: #fff;
        background-color: #00aec5;
        border-color: #008697; }
    .btn.btn-info:active, .btn.btn-info.active,
    .open > .btn.btn-info.dropdown-toggle,
    .show > .btn.btn-info.dropdown-toggle {
        color: #fff;
        background-color: #00aec5;
        border-color: #008697;
        box-shadow: 0 2px 2px 0 rgba(0, 188, 212, 0.14), 0 3px 1px -2px rgba(0, 188, 212, 0.2), 0 1px 5px 0 rgba(0, 188, 212, 0.12); }
    .btn.btn-info:active:hover, .btn.btn-info:active:focus, .btn.btn-info:active.focus, .btn.btn-info.active:hover, .btn.btn-info.active:focus, .btn.btn-info.active.focus,
    .open > .btn.btn-info.dropdown-toggle:hover,
    .open > .btn.btn-info.dropdown-toggle:focus,
    .open > .btn.btn-info.dropdown-toggle.focus,
    .show > .btn.btn-info.dropdown-toggle:hover,
    .show > .btn.btn-info.dropdown-toggle:focus,
    .show > .btn.btn-info.dropdown-toggle.focus {
        color: #fff;
        background-color: #00aec5;
        border-color: #004b55; }
    .open > .btn.btn-info.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: #00bcd4; }
    .open > .btn.btn-info.dropdown-toggle.bmd-btn-icon:hover {
        background-color: #00aec5; }
    .btn.btn-info.disabled:focus, .btn.btn-info.disabled.focus, .btn.btn-info:disabled:focus, .btn.btn-info:disabled.focus {
        background-color: #00bcd4;
        border-color: #00bcd4; }
    .btn.btn-info.disabled:hover, .btn.btn-info:disabled:hover {
        background-color: #00bcd4;
        border-color: #00bcd4; }
    .btn.btn-info:focus, .btn.btn-info:active, .btn.btn-info:hover {
        box-shadow: 0 14px 26px -12px rgba(0, 188, 212, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 188, 212, 0.2); }
    .btn.btn-info.btn-link {
        background-color: transparent;
        color: #00bcd4;
        box-shadow: none; }
    .btn.btn-info.btn-link:hover, .btn.btn-info.btn-link:focus, .btn.btn-info.btn-link:active {
        background-color: transparent;
        color: #00bcd4; }
    .btn.btn-success {
        color: #fff;
        background-color: #4caf50;
        border-color: #4caf50;
        box-shadow: 0 2px 2px 0 rgba(76, 175, 80, 0.14), 0 3px 1px -2px rgba(76, 175, 80, 0.2), 0 1px 5px 0 rgba(76, 175, 80, 0.12); }
    .btn.btn-success:hover {
        color: #fff;
        background-color: #47a44b;
        border-color: #39843c; }
    .btn.btn-success:focus, .btn.btn-success.focus, .btn.btn-success:hover {
        color: #fff;
        background-color: #47a44b;
        border-color: #39843c; }
    .btn.btn-success:active, .btn.btn-success.active,
    .open > .btn.btn-success.dropdown-toggle,
    .show > .btn.btn-success.dropdown-toggle {
        color: #fff;
        background-color: #47a44b;
        border-color: #39843c;
        box-shadow: 0 2px 2px 0 rgba(76, 175, 80, 0.14), 0 3px 1px -2px rgba(76, 175, 80, 0.2), 0 1px 5px 0 rgba(76, 175, 80, 0.12); }
    .btn.btn-success:active:hover, .btn.btn-success:active:focus, .btn.btn-success:active.focus, .btn.btn-success.active:hover, .btn.btn-success.active:focus, .btn.btn-success.active.focus,
    .open > .btn.btn-success.dropdown-toggle:hover,
    .open > .btn.btn-success.dropdown-toggle:focus,
    .open > .btn.btn-success.dropdown-toggle.focus,
    .show > .btn.btn-success.dropdown-toggle:hover,
    .show > .btn.btn-success.dropdown-toggle:focus,
    .show > .btn.btn-success.dropdown-toggle.focus {
        color: #fff;
        background-color: #47a44b;
        border-color: #255627; }
    .open > .btn.btn-success.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: #4caf50; }
    .open > .btn.btn-success.dropdown-toggle.bmd-btn-icon:hover {
        background-color: #47a44b; }
    .btn.btn-success.disabled:focus, .btn.btn-success.disabled.focus, .btn.btn-success:disabled:focus, .btn.btn-success:disabled.focus {
        background-color: #4caf50;
        border-color: #4caf50; }
    .btn.btn-success.disabled:hover, .btn.btn-success:disabled:hover {
        background-color: #4caf50;
        border-color: #4caf50; }
    .btn.btn-success:focus, .btn.btn-success:active, .btn.btn-success:hover {
        box-shadow: 0 14px 26px -12px rgba(76, 175, 80, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(76, 175, 80, 0.2); }
    .btn.btn-success.btn-link {
        background-color: transparent;
        color: #4caf50;
        box-shadow: none; }
    .btn.btn-success.btn-link:hover, .btn.btn-success.btn-link:focus, .btn.btn-success.btn-link:active {
        background-color: transparent;
        color: #4caf50; }
    .btn.btn-warning {
        color: #fff;
        background-color: #ff9800;
        border-color: #ff9800;
        box-shadow: 0 2px 2px 0 rgba(255, 152, 0, 0.14), 0 3px 1px -2px rgba(255, 152, 0, 0.2), 0 1px 5px 0 rgba(255, 152, 0, 0.12); }
    .btn.btn-warning:hover {
        color: #fff;
        background-color: #f08f00;
        border-color: #c27400; }
    .btn.btn-warning:focus, .btn.btn-warning.focus, .btn.btn-warning:hover {
        color: #fff;
        background-color: #f08f00;
        border-color: #c27400; }
    .btn.btn-warning:active, .btn.btn-warning.active,
    .open > .btn.btn-warning.dropdown-toggle,
    .show > .btn.btn-warning.dropdown-toggle {
        color: #fff;
        background-color: #f08f00;
        border-color: #c27400;
        box-shadow: 0 2px 2px 0 rgba(255, 152, 0, 0.14), 0 3px 1px -2px rgba(255, 152, 0, 0.2), 0 1px 5px 0 rgba(255, 152, 0, 0.12); }
    .btn.btn-warning:active:hover, .btn.btn-warning:active:focus, .btn.btn-warning:active.focus, .btn.btn-warning.active:hover, .btn.btn-warning.active:focus, .btn.btn-warning.active.focus,
    .open > .btn.btn-warning.dropdown-toggle:hover,
    .open > .btn.btn-warning.dropdown-toggle:focus,
    .open > .btn.btn-warning.dropdown-toggle.focus,
    .show > .btn.btn-warning.dropdown-toggle:hover,
    .show > .btn.btn-warning.dropdown-toggle:focus,
    .show > .btn.btn-warning.dropdown-toggle.focus {
        color: #fff;
        background-color: #f08f00;
        border-color: #804c00; }
    .open > .btn.btn-warning.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: #ff9800; }
    .open > .btn.btn-warning.dropdown-toggle.bmd-btn-icon:hover {
        background-color: #f08f00; }
    .btn.btn-warning.disabled:focus, .btn.btn-warning.disabled.focus, .btn.btn-warning:disabled:focus, .btn.btn-warning:disabled.focus {
        background-color: #ff9800;
        border-color: #ff9800; }
    .btn.btn-warning.disabled:hover, .btn.btn-warning:disabled:hover {
        background-color: #ff9800;
        border-color: #ff9800; }
    .btn.btn-warning:focus, .btn.btn-warning:active, .btn.btn-warning:hover {
        box-shadow: 0 14px 26px -12px rgba(255, 152, 0, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(255, 152, 0, 0.2); }
    .btn.btn-warning.btn-link {
        background-color: transparent;
        color: #ff9800;
        box-shadow: none; }
    .btn.btn-warning.btn-link:hover, .btn.btn-warning.btn-link:focus, .btn.btn-warning.btn-link:active {
        background-color: transparent;
        color: #ff9800; }
    .btn.btn-danger {
        color: #fff;
        background-color: #f44336;
        border-color: #f44336;
        box-shadow: 0 2px 2px 0 rgba(244, 67, 54, 0.14), 0 3px 1px -2px rgba(244, 67, 54, 0.2), 0 1px 5px 0 rgba(244, 67, 54, 0.12); }
    .btn.btn-danger:hover {
        color: #fff;
        background-color: #f33527;
        border-color: #e11b0c; }
    .btn.btn-danger:focus, .btn.btn-danger.focus, .btn.btn-danger:hover {
        color: #fff;
        background-color: #f33527;
        border-color: #e11b0c; }
    .btn.btn-danger:active, .btn.btn-danger.active,
    .open > .btn.btn-danger.dropdown-toggle,
    .show > .btn.btn-danger.dropdown-toggle {
        color: #fff;
        background-color: #f33527;
        border-color: #e11b0c;
        box-shadow: 0 2px 2px 0 rgba(244, 67, 54, 0.14), 0 3px 1px -2px rgba(244, 67, 54, 0.2), 0 1px 5px 0 rgba(244, 67, 54, 0.12); }
    .btn.btn-danger:active:hover, .btn.btn-danger:active:focus, .btn.btn-danger:active.focus, .btn.btn-danger.active:hover, .btn.btn-danger.active:focus, .btn.btn-danger.active.focus,
    .open > .btn.btn-danger.dropdown-toggle:hover,
    .open > .btn.btn-danger.dropdown-toggle:focus,
    .open > .btn.btn-danger.dropdown-toggle.focus,
    .show > .btn.btn-danger.dropdown-toggle:hover,
    .show > .btn.btn-danger.dropdown-toggle:focus,
    .show > .btn.btn-danger.dropdown-toggle.focus {
        color: #fff;
        background-color: #f33527;
        border-color: #a21309; }
    .open > .btn.btn-danger.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: #f44336; }
    .open > .btn.btn-danger.dropdown-toggle.bmd-btn-icon:hover {
        background-color: #f33527; }
    .btn.btn-danger.disabled:focus, .btn.btn-danger.disabled.focus, .btn.btn-danger:disabled:focus, .btn.btn-danger:disabled.focus {
        background-color: #f44336;
        border-color: #f44336; }
    .btn.btn-danger.disabled:hover, .btn.btn-danger:disabled:hover {
        background-color: #f44336;
        border-color: #f44336; }
    .btn.btn-danger:focus, .btn.btn-danger:active, .btn.btn-danger:hover {
        box-shadow: 0 14px 26px -12px rgba(244, 67, 54, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(244, 67, 54, 0.2); }
    .btn.btn-danger.btn-link {
        background-color: transparent;
        color: #f44336;
        box-shadow: none; }
    .btn.btn-danger.btn-link:hover, .btn.btn-danger.btn-link:focus, .btn.btn-danger.btn-link:active {
        background-color: transparent;
        color: #f44336; }
    .btn.btn-rose {
        color: #fff;
        background-color: #e91e63;
        border-color: #e91e63;
        box-shadow: 0 2px 2px 0 rgba(233, 30, 99, 0.14), 0 3px 1px -2px rgba(233, 30, 99, 0.2), 0 1px 5px 0 rgba(233, 30, 99, 0.12); }
    .btn.btn-rose:hover {
        color: #fff;
        background-color: #ea2c6d;
        border-color: #b8124a; }
    .btn.btn-rose:focus, .btn.btn-rose.focus, .btn.btn-rose:hover {
        color: #fff;
        background-color: #ea2c6d;
        border-color: #b8124a; }
    .btn.btn-rose:active, .btn.btn-rose.active,
    .open > .btn.btn-rose.dropdown-toggle,
    .show > .btn.btn-rose.dropdown-toggle {
        color: #fff;
        background-color: #ea2c6d;
        border-color: #b8124a;
        box-shadow: 0 2px 2px 0 rgba(233, 30, 99, 0.14), 0 3px 1px -2px rgba(233, 30, 99, 0.2), 0 1px 5px 0 rgba(233, 30, 99, 0.12); }
    .btn.btn-rose:active:hover, .btn.btn-rose:active:focus, .btn.btn-rose:active.focus, .btn.btn-rose.active:hover, .btn.btn-rose.active:focus, .btn.btn-rose.active.focus,
    .open > .btn.btn-rose.dropdown-toggle:hover,
    .open > .btn.btn-rose.dropdown-toggle:focus,
    .open > .btn.btn-rose.dropdown-toggle.focus,
    .show > .btn.btn-rose.dropdown-toggle:hover,
    .show > .btn.btn-rose.dropdown-toggle:focus,
    .show > .btn.btn-rose.dropdown-toggle.focus {
        color: #fff;
        background-color: #ea2c6d;
        border-color: #7b0c32; }
    .open > .btn.btn-rose.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: #e91e63; }
    .open > .btn.btn-rose.dropdown-toggle.bmd-btn-icon:hover {
        background-color: #ea2c6d; }
    .btn.btn-rose.disabled:focus, .btn.btn-rose.disabled.focus, .btn.btn-rose:disabled:focus, .btn.btn-rose:disabled.focus {
        background-color: #e91e63;
        border-color: #e91e63; }
    .btn.btn-rose.disabled:hover, .btn.btn-rose:disabled:hover {
        background-color: #e91e63;
        border-color: #e91e63; }
    .btn.btn-rose:focus, .btn.btn-rose:active, .btn.btn-rose:hover {
        box-shadow: 0 14px 26px -12px rgba(233, 30, 99, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(233, 30, 99, 0.2); }
    .btn.btn-rose.btn-link {
        background-color: transparent;
        color: #e91e63;
        box-shadow: none; }
    .btn.btn-rose.btn-link:hover, .btn.btn-rose.btn-link:focus, .btn.btn-rose.btn-link:active {
        background-color: transparent;
        color: #e91e63; }
    .btn, .btn.btn-default {
        color: #fff;
        background-color: #999999;
        border-color: #999999;
        box-shadow: 0 2px 2px 0 rgba(153, 153, 153, 0.14), 0 3px 1px -2px rgba(153, 153, 153, 0.2), 0 1px 5px 0 rgba(153, 153, 153, 0.12); }
    .btn:hover, .btn.btn-default:hover {
        color: #fff;
        background-color: #919191;
        border-color: #7a7a7a; }
    .btn:focus, .btn.focus, .btn:hover, .btn.btn-default:focus, .btn.btn-default.focus, .btn.btn-default:hover {
        color: #fff;
        background-color: #919191;
        border-color: #7a7a7a; }
    .btn:active, .btn.active,
    .open > .btn.dropdown-toggle,
    .show > .btn.dropdown-toggle, .btn.btn-default:active, .btn.btn-default.active,
    .open > .btn.btn-default.dropdown-toggle,
    .show > .btn.btn-default.dropdown-toggle {
        color: #fff;
        background-color: #919191;
        border-color: #7a7a7a;
        box-shadow: 0 2px 2px 0 rgba(153, 153, 153, 0.14), 0 3px 1px -2px rgba(153, 153, 153, 0.2), 0 1px 5px 0 rgba(153, 153, 153, 0.12); }
    .btn:active:hover, .btn:active:focus, .btn:active.focus, .btn.active:hover, .btn.active:focus, .btn.active.focus,
    .open > .btn.dropdown-toggle:hover,
    .open > .btn.dropdown-toggle:focus,
    .open > .btn.dropdown-toggle.focus,
    .show > .btn.dropdown-toggle:hover,
    .show > .btn.dropdown-toggle:focus,
    .show > .btn.dropdown-toggle.focus, .btn.btn-default:active:hover, .btn.btn-default:active:focus, .btn.btn-default:active.focus, .btn.btn-default.active:hover, .btn.btn-default.active:focus, .btn.btn-default.active.focus,
    .open > .btn.btn-default.dropdown-toggle:hover,
    .open > .btn.btn-default.dropdown-toggle:focus,
    .open > .btn.btn-default.dropdown-toggle.focus,
    .show > .btn.btn-default.dropdown-toggle:hover,
    .show > .btn.btn-default.dropdown-toggle:focus,
    .show > .btn.btn-default.dropdown-toggle.focus {
        color: #fff;
        background-color: #919191;
        border-color: #595959; }
    .open > .btn.dropdown-toggle.bmd-btn-icon, .open > .btn.btn-default.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: #999999; }
    .open > .btn.dropdown-toggle.bmd-btn-icon:hover, .open > .btn.btn-default.dropdown-toggle.bmd-btn-icon:hover {
        background-color: #919191; }
    .btn.disabled:focus, .btn.disabled.focus, .btn:disabled:focus, .btn:disabled.focus, .btn.btn-default.disabled:focus, .btn.btn-default.disabled.focus, .btn.btn-default:disabled:focus, .btn.btn-default:disabled.focus {
        background-color: #999999;
        border-color: #999999; }
    .btn.disabled:hover, .btn:disabled:hover, .btn.btn-default.disabled:hover, .btn.btn-default:disabled:hover {
        background-color: #999999;
        border-color: #999999; }
    .btn:focus, .btn:active, .btn:hover, .btn.btn-default:focus, .btn.btn-default:active, .btn.btn-default:hover {
        box-shadow: 0 14px 26px -12px rgba(153, 153, 153, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(153, 153, 153, 0.2); }
    .btn.btn-link, .btn.btn-default.btn-link {
        background-color: transparent;
        color: #999999;
        box-shadow: none; }
    .btn.btn-link:hover, .btn.btn-link:focus, .btn.btn-link:active, .btn.btn-default.btn-link:hover, .btn.btn-default.btn-link:focus, .btn.btn-default.btn-link:active {
        background-color: transparent;
        color: #999999; }
    .btn.btn-white, .btn.btn-white:focus, .btn.btn-white:hover {
        background-color: #fff;
        color: #999999; }
    .btn.btn-white.btn-link {
        color: #fff;
        background: transparent;
        box-shadow: none; }
    .btn.btn-link:hover, .btn.btn-link:focus, .btn.btn-link:active {
        text-decoration: none !important; }
    .btn.btn-disabled {
        cursor: not-allowed;
        pointer-events: none; }
    .btn.btn-disabled:hover {
        box-shadow: none; }
    .btn.btn-raised.btn-link,
    .btn-group-raised .btn.btn-link {
        box-shadow: none; }
    .btn.btn-raised.btn-link.active,
    .btn-group-raised .btn.btn-link.active {
        box-shadow: none; }
    .btn.btn-raised.btn-link:hover, .btn.btn-raised.btn-link:focus, .btn.btn-raised.btn-link:active,
    .btn-group-raised .btn.btn-link:hover,
    .btn-group-raised .btn.btn-link:focus,
    .btn-group-raised .btn.btn-link:active {
        box-shadow: none; }
    fieldset[disabled][disabled] .btn.btn-raised, .btn.btn-raised.disabled, .btn.btn-raised:disabled, .btn.btn-raised[disabled], fieldset[disabled][disabled]
    .btn-group-raised .btn,
    .btn-group-raised .btn.disabled,
    .btn-group-raised .btn:disabled,
    .btn-group-raised .btn[disabled] {
        box-shadow: none; }
    .btn.btn-outline, .btn.btn-outline-primary, .btn.btn-outline-secondary, .btn.btn-outline-info, .btn.btn-outline-success, .btn.btn-outline-warning, .btn.btn-outline-danger {
        border-color: currentColor;
        border-style: solid;
        border-width: 1px; }
    .btn.btn-outline {
        color: rgba(0, 0, 0, 0.87);
        background-color: transparent;
        border-color: rgba(0, 0, 0, 0.87); }
    .btn.btn-outline:hover {
        color: rgba(0, 0, 0, 0.87);
        background-color: rgba(153, 153, 153, 0.2);
        border-color: rgba(0, 0, 0, 0.87); }
    .btn.btn-outline:focus, .btn.btn-outline.focus, .btn.btn-outline:hover {
        color: rgba(0, 0, 0, 0.87);
        background-color: rgba(153, 153, 153, 0.2);
        border-color: rgba(0, 0, 0, 0.87); }
    .btn.btn-outline:active, .btn.btn-outline.active,
    .open > .btn.btn-outline.dropdown-toggle,
    .show > .btn.btn-outline.dropdown-toggle {
        color: rgba(0, 0, 0, 0.87);
        background-color: rgba(153, 153, 153, 0.2);
        border-color: rgba(0, 0, 0, 0.87);
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }
    .btn.btn-outline:active:hover, .btn.btn-outline:active:focus, .btn.btn-outline:active.focus, .btn.btn-outline.active:hover, .btn.btn-outline.active:focus, .btn.btn-outline.active.focus,
    .open > .btn.btn-outline.dropdown-toggle:hover,
    .open > .btn.btn-outline.dropdown-toggle:focus,
    .open > .btn.btn-outline.dropdown-toggle.focus,
    .show > .btn.btn-outline.dropdown-toggle:hover,
    .show > .btn.btn-outline.dropdown-toggle:focus,
    .show > .btn.btn-outline.dropdown-toggle.focus {
        color: rgba(0, 0, 0, 0.87);
        background-color: rgba(153, 153, 153, 0.4);
        border-color: rgba(0, 0, 0, 0.87); }
    .open > .btn.btn-outline.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: transparent; }
    .open > .btn.btn-outline.dropdown-toggle.bmd-btn-icon:hover {
        background-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-outline.disabled:focus, .btn.btn-outline.disabled.focus, .btn.btn-outline:disabled:focus, .btn.btn-outline:disabled.focus {
        background-color: transparent;
        border-color: rgba(0, 0, 0, 0.87); }
    .btn.btn-outline.disabled:hover, .btn.btn-outline:disabled:hover {
        background-color: transparent;
        border-color: rgba(0, 0, 0, 0.87); }
    .bg-inverse .btn.btn-outline {
        color: rgba(0, 0, 0, 0.87);
        background-color: transparent;
        border-color: rgba(0, 0, 0, 0.87); }
    .bg-inverse .btn.btn-outline:hover {
        color: rgba(0, 0, 0, 0.87);
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
    .bg-inverse .btn.btn-outline:focus, .bg-inverse .btn.btn-outline.focus, .bg-inverse .btn.btn-outline:hover {
        color: rgba(0, 0, 0, 0.87);
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
    .bg-inverse .btn.btn-outline:active, .bg-inverse .btn.btn-outline.active,
    .open > .bg-inverse .btn.btn-outline.dropdown-toggle,
    .show > .bg-inverse .btn.btn-outline.dropdown-toggle {
        color: rgba(0, 0, 0, 0.87);
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15);
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }
    .bg-inverse .btn.btn-outline:active:hover, .bg-inverse .btn.btn-outline:active:focus, .bg-inverse .btn.btn-outline:active.focus, .bg-inverse .btn.btn-outline.active:hover, .bg-inverse .btn.btn-outline.active:focus, .bg-inverse .btn.btn-outline.active.focus,
    .open > .bg-inverse .btn.btn-outline.dropdown-toggle:hover,
    .open > .bg-inverse .btn.btn-outline.dropdown-toggle:focus,
    .open > .bg-inverse .btn.btn-outline.dropdown-toggle.focus,
    .show > .bg-inverse .btn.btn-outline.dropdown-toggle:hover,
    .show > .bg-inverse .btn.btn-outline.dropdown-toggle:focus,
    .show > .bg-inverse .btn.btn-outline.dropdown-toggle.focus {
        color: rgba(0, 0, 0, 0.87);
        background-color: rgba(204, 204, 204, 0.25);
        border-color: rgba(204, 204, 204, 0.25); }
    .open > .bg-inverse .btn.btn-outline.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: transparent; }
    .open > .bg-inverse .btn.btn-outline.dropdown-toggle.bmd-btn-icon:hover {
        background-color: rgba(204, 204, 204, 0.15); }
    .bg-inverse .btn.btn-outline.disabled:focus, .bg-inverse .btn.btn-outline.disabled.focus, .bg-inverse .btn.btn-outline:disabled:focus, .bg-inverse .btn.btn-outline:disabled.focus {
        background-color: transparent;
        border-color: rgba(0, 0, 0, 0.87); }
    .bg-inverse .btn.btn-outline.disabled:hover, .bg-inverse .btn.btn-outline:disabled:hover {
        background-color: transparent;
        border-color: rgba(0, 0, 0, 0.87); }
    .btn.btn-outline.btn-link {
        background-color: transparent; }
    .btn.btn-outline-primary {
        color: #9c27b0;
        background-color: transparent;
        border-color: #9c27b0; }
    .btn.btn-outline-primary:hover {
        color: #9c27b0;
        background-color: rgba(153, 153, 153, 0.2);
        border-color: #9c27b0; }
    .btn.btn-outline-primary:focus, .btn.btn-outline-primary.focus, .btn.btn-outline-primary:hover {
        color: #9c27b0;
        background-color: rgba(153, 153, 153, 0.2);
        border-color: #9c27b0; }
    .btn.btn-outline-primary:active, .btn.btn-outline-primary.active,
    .open > .btn.btn-outline-primary.dropdown-toggle,
    .show > .btn.btn-outline-primary.dropdown-toggle {
        color: #9c27b0;
        background-color: rgba(153, 153, 153, 0.2);
        border-color: #9c27b0;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }
    .btn.btn-outline-primary:active:hover, .btn.btn-outline-primary:active:focus, .btn.btn-outline-primary:active.focus, .btn.btn-outline-primary.active:hover, .btn.btn-outline-primary.active:focus, .btn.btn-outline-primary.active.focus,
    .open > .btn.btn-outline-primary.dropdown-toggle:hover,
    .open > .btn.btn-outline-primary.dropdown-toggle:focus,
    .open > .btn.btn-outline-primary.dropdown-toggle.focus,
    .show > .btn.btn-outline-primary.dropdown-toggle:hover,
    .show > .btn.btn-outline-primary.dropdown-toggle:focus,
    .show > .btn.btn-outline-primary.dropdown-toggle.focus {
        color: #9c27b0;
        background-color: rgba(153, 153, 153, 0.4);
        border-color: #9c27b0; }
    .open > .btn.btn-outline-primary.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: transparent; }
    .open > .btn.btn-outline-primary.dropdown-toggle.bmd-btn-icon:hover {
        background-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-outline-primary.disabled:focus, .btn.btn-outline-primary.disabled.focus, .btn.btn-outline-primary:disabled:focus, .btn.btn-outline-primary:disabled.focus {
        background-color: transparent;
        border-color: #9c27b0; }
    .btn.btn-outline-primary.disabled:hover, .btn.btn-outline-primary:disabled:hover {
        background-color: transparent;
        border-color: #9c27b0; }
    .bg-inverse .btn.btn-outline-primary {
        color: #9c27b0;
        background-color: transparent;
        border-color: #9c27b0; }
    .bg-inverse .btn.btn-outline-primary:hover {
        color: #9c27b0;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
    .bg-inverse .btn.btn-outline-primary:focus, .bg-inverse .btn.btn-outline-primary.focus, .bg-inverse .btn.btn-outline-primary:hover {
        color: #9c27b0;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
    .bg-inverse .btn.btn-outline-primary:active, .bg-inverse .btn.btn-outline-primary.active,
    .open > .bg-inverse .btn.btn-outline-primary.dropdown-toggle,
    .show > .bg-inverse .btn.btn-outline-primary.dropdown-toggle {
        color: #9c27b0;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15);
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }
    .bg-inverse .btn.btn-outline-primary:active:hover, .bg-inverse .btn.btn-outline-primary:active:focus, .bg-inverse .btn.btn-outline-primary:active.focus, .bg-inverse .btn.btn-outline-primary.active:hover, .bg-inverse .btn.btn-outline-primary.active:focus, .bg-inverse .btn.btn-outline-primary.active.focus,
    .open > .bg-inverse .btn.btn-outline-primary.dropdown-toggle:hover,
    .open > .bg-inverse .btn.btn-outline-primary.dropdown-toggle:focus,
    .open > .bg-inverse .btn.btn-outline-primary.dropdown-toggle.focus,
    .show > .bg-inverse .btn.btn-outline-primary.dropdown-toggle:hover,
    .show > .bg-inverse .btn.btn-outline-primary.dropdown-toggle:focus,
    .show > .bg-inverse .btn.btn-outline-primary.dropdown-toggle.focus {
        color: #9c27b0;
        background-color: rgba(204, 204, 204, 0.25);
        border-color: rgba(204, 204, 204, 0.25); }
    .open > .bg-inverse .btn.btn-outline-primary.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: transparent; }
    .open > .bg-inverse .btn.btn-outline-primary.dropdown-toggle.bmd-btn-icon:hover {
        background-color: rgba(204, 204, 204, 0.15); }
    .bg-inverse .btn.btn-outline-primary.disabled:focus, .bg-inverse .btn.btn-outline-primary.disabled.focus, .bg-inverse .btn.btn-outline-primary:disabled:focus, .bg-inverse .btn.btn-outline-primary:disabled.focus {
        background-color: transparent;
        border-color: #9c27b0; }
    .bg-inverse .btn.btn-outline-primary.disabled:hover, .bg-inverse .btn.btn-outline-primary:disabled:hover {
        background-color: transparent;
        border-color: #9c27b0; }
    .btn.btn-outline-primary.btn-link {
        background-color: transparent; }
    .btn.btn-outline-secondary {
        color: rgba(0, 0, 0, 0.87);
        background-color: transparent;
        border-color: rgba(0, 0, 0, 0.87); }
    .btn.btn-outline-secondary:hover {
        color: rgba(0, 0, 0, 0.87);
        background-color: rgba(153, 153, 153, 0.2);
        border-color: rgba(0, 0, 0, 0.87); }
    .btn.btn-outline-secondary:focus, .btn.btn-outline-secondary.focus, .btn.btn-outline-secondary:hover {
        color: rgba(0, 0, 0, 0.87);
        background-color: rgba(153, 153, 153, 0.2);
        border-color: rgba(0, 0, 0, 0.87); }
    .btn.btn-outline-secondary:active, .btn.btn-outline-secondary.active,
    .open > .btn.btn-outline-secondary.dropdown-toggle,
    .show > .btn.btn-outline-secondary.dropdown-toggle {
        color: rgba(0, 0, 0, 0.87);
        background-color: rgba(153, 153, 153, 0.2);
        border-color: rgba(0, 0, 0, 0.87);
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }
    .btn.btn-outline-secondary:active:hover, .btn.btn-outline-secondary:active:focus, .btn.btn-outline-secondary:active.focus, .btn.btn-outline-secondary.active:hover, .btn.btn-outline-secondary.active:focus, .btn.btn-outline-secondary.active.focus,
    .open > .btn.btn-outline-secondary.dropdown-toggle:hover,
    .open > .btn.btn-outline-secondary.dropdown-toggle:focus,
    .open > .btn.btn-outline-secondary.dropdown-toggle.focus,
    .show > .btn.btn-outline-secondary.dropdown-toggle:hover,
    .show > .btn.btn-outline-secondary.dropdown-toggle:focus,
    .show > .btn.btn-outline-secondary.dropdown-toggle.focus {
        color: rgba(0, 0, 0, 0.87);
        background-color: rgba(153, 153, 153, 0.4);
        border-color: rgba(0, 0, 0, 0.87); }
    .open > .btn.btn-outline-secondary.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: transparent; }
    .open > .btn.btn-outline-secondary.dropdown-toggle.bmd-btn-icon:hover {
        background-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-outline-secondary.disabled:focus, .btn.btn-outline-secondary.disabled.focus, .btn.btn-outline-secondary:disabled:focus, .btn.btn-outline-secondary:disabled.focus {
        background-color: transparent;
        border-color: rgba(0, 0, 0, 0.87); }
    .btn.btn-outline-secondary.disabled:hover, .btn.btn-outline-secondary:disabled:hover {
        background-color: transparent;
        border-color: rgba(0, 0, 0, 0.87); }
    .bg-inverse .btn.btn-outline-secondary {
        color: rgba(0, 0, 0, 0.87);
        background-color: transparent;
        border-color: rgba(0, 0, 0, 0.87); }
    .bg-inverse .btn.btn-outline-secondary:hover {
        color: rgba(0, 0, 0, 0.87);
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
    .bg-inverse .btn.btn-outline-secondary:focus, .bg-inverse .btn.btn-outline-secondary.focus, .bg-inverse .btn.btn-outline-secondary:hover {
        color: rgba(0, 0, 0, 0.87);
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
    .bg-inverse .btn.btn-outline-secondary:active, .bg-inverse .btn.btn-outline-secondary.active,
    .open > .bg-inverse .btn.btn-outline-secondary.dropdown-toggle,
    .show > .bg-inverse .btn.btn-outline-secondary.dropdown-toggle {
        color: rgba(0, 0, 0, 0.87);
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15);
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }
    .bg-inverse .btn.btn-outline-secondary:active:hover, .bg-inverse .btn.btn-outline-secondary:active:focus, .bg-inverse .btn.btn-outline-secondary:active.focus, .bg-inverse .btn.btn-outline-secondary.active:hover, .bg-inverse .btn.btn-outline-secondary.active:focus, .bg-inverse .btn.btn-outline-secondary.active.focus,
    .open > .bg-inverse .btn.btn-outline-secondary.dropdown-toggle:hover,
    .open > .bg-inverse .btn.btn-outline-secondary.dropdown-toggle:focus,
    .open > .bg-inverse .btn.btn-outline-secondary.dropdown-toggle.focus,
    .show > .bg-inverse .btn.btn-outline-secondary.dropdown-toggle:hover,
    .show > .bg-inverse .btn.btn-outline-secondary.dropdown-toggle:focus,
    .show > .bg-inverse .btn.btn-outline-secondary.dropdown-toggle.focus {
        color: rgba(0, 0, 0, 0.87);
        background-color: rgba(204, 204, 204, 0.25);
        border-color: rgba(204, 204, 204, 0.25); }
    .open > .bg-inverse .btn.btn-outline-secondary.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: transparent; }
    .open > .bg-inverse .btn.btn-outline-secondary.dropdown-toggle.bmd-btn-icon:hover {
        background-color: rgba(204, 204, 204, 0.15); }
    .bg-inverse .btn.btn-outline-secondary.disabled:focus, .bg-inverse .btn.btn-outline-secondary.disabled.focus, .bg-inverse .btn.btn-outline-secondary:disabled:focus, .bg-inverse .btn.btn-outline-secondary:disabled.focus {
        background-color: transparent;
        border-color: rgba(0, 0, 0, 0.87); }
    .bg-inverse .btn.btn-outline-secondary.disabled:hover, .bg-inverse .btn.btn-outline-secondary:disabled:hover {
        background-color: transparent;
        border-color: rgba(0, 0, 0, 0.87); }
    .btn.btn-outline-secondary.btn-link {
        background-color: transparent; }
    .btn.btn-outline-info {
        color: #00bcd4;
        background-color: transparent;
        border-color: #00bcd4; }
    .btn.btn-outline-info:hover {
        color: #00bcd4;
        background-color: rgba(153, 153, 153, 0.2);
        border-color: #00bcd4; }
    .btn.btn-outline-info:focus, .btn.btn-outline-info.focus, .btn.btn-outline-info:hover {
        color: #00bcd4;
        background-color: rgba(153, 153, 153, 0.2);
        border-color: #00bcd4; }
    .btn.btn-outline-info:active, .btn.btn-outline-info.active,
    .open > .btn.btn-outline-info.dropdown-toggle,
    .show > .btn.btn-outline-info.dropdown-toggle {
        color: #00bcd4;
        background-color: rgba(153, 153, 153, 0.2);
        border-color: #00bcd4;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }
    .btn.btn-outline-info:active:hover, .btn.btn-outline-info:active:focus, .btn.btn-outline-info:active.focus, .btn.btn-outline-info.active:hover, .btn.btn-outline-info.active:focus, .btn.btn-outline-info.active.focus,
    .open > .btn.btn-outline-info.dropdown-toggle:hover,
    .open > .btn.btn-outline-info.dropdown-toggle:focus,
    .open > .btn.btn-outline-info.dropdown-toggle.focus,
    .show > .btn.btn-outline-info.dropdown-toggle:hover,
    .show > .btn.btn-outline-info.dropdown-toggle:focus,
    .show > .btn.btn-outline-info.dropdown-toggle.focus {
        color: #00bcd4;
        background-color: rgba(153, 153, 153, 0.4);
        border-color: #00bcd4; }
    .open > .btn.btn-outline-info.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: transparent; }
    .open > .btn.btn-outline-info.dropdown-toggle.bmd-btn-icon:hover {
        background-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-outline-info.disabled:focus, .btn.btn-outline-info.disabled.focus, .btn.btn-outline-info:disabled:focus, .btn.btn-outline-info:disabled.focus {
        background-color: transparent;
        border-color: #00bcd4; }
    .btn.btn-outline-info.disabled:hover, .btn.btn-outline-info:disabled:hover {
        background-color: transparent;
        border-color: #00bcd4; }
    .bg-inverse .btn.btn-outline-info {
        color: #00bcd4;
        background-color: transparent;
        border-color: #00bcd4; }
    .bg-inverse .btn.btn-outline-info:hover {
        color: #00bcd4;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
    .bg-inverse .btn.btn-outline-info:focus, .bg-inverse .btn.btn-outline-info.focus, .bg-inverse .btn.btn-outline-info:hover {
        color: #00bcd4;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
    .bg-inverse .btn.btn-outline-info:active, .bg-inverse .btn.btn-outline-info.active,
    .open > .bg-inverse .btn.btn-outline-info.dropdown-toggle,
    .show > .bg-inverse .btn.btn-outline-info.dropdown-toggle {
        color: #00bcd4;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15);
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }
    .bg-inverse .btn.btn-outline-info:active:hover, .bg-inverse .btn.btn-outline-info:active:focus, .bg-inverse .btn.btn-outline-info:active.focus, .bg-inverse .btn.btn-outline-info.active:hover, .bg-inverse .btn.btn-outline-info.active:focus, .bg-inverse .btn.btn-outline-info.active.focus,
    .open > .bg-inverse .btn.btn-outline-info.dropdown-toggle:hover,
    .open > .bg-inverse .btn.btn-outline-info.dropdown-toggle:focus,
    .open > .bg-inverse .btn.btn-outline-info.dropdown-toggle.focus,
    .show > .bg-inverse .btn.btn-outline-info.dropdown-toggle:hover,
    .show > .bg-inverse .btn.btn-outline-info.dropdown-toggle:focus,
    .show > .bg-inverse .btn.btn-outline-info.dropdown-toggle.focus {
        color: #00bcd4;
        background-color: rgba(204, 204, 204, 0.25);
        border-color: rgba(204, 204, 204, 0.25); }
    .open > .bg-inverse .btn.btn-outline-info.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: transparent; }
    .open > .bg-inverse .btn.btn-outline-info.dropdown-toggle.bmd-btn-icon:hover {
        background-color: rgba(204, 204, 204, 0.15); }
    .bg-inverse .btn.btn-outline-info.disabled:focus, .bg-inverse .btn.btn-outline-info.disabled.focus, .bg-inverse .btn.btn-outline-info:disabled:focus, .bg-inverse .btn.btn-outline-info:disabled.focus {
        background-color: transparent;
        border-color: #00bcd4; }
    .bg-inverse .btn.btn-outline-info.disabled:hover, .bg-inverse .btn.btn-outline-info:disabled:hover {
        background-color: transparent;
        border-color: #00bcd4; }
    .btn.btn-outline-info.btn-link {
        background-color: transparent; }
    .btn.btn-outline-success {
        color: #4caf50;
        background-color: transparent;
        border-color: #4caf50; }
    .btn.btn-outline-success:hover {
        color: #4caf50;
        background-color: rgba(153, 153, 153, 0.2);
        border-color: #4caf50; }
    .btn.btn-outline-success:focus, .btn.btn-outline-success.focus, .btn.btn-outline-success:hover {
        color: #4caf50;
        background-color: rgba(153, 153, 153, 0.2);
        border-color: #4caf50; }
    .btn.btn-outline-success:active, .btn.btn-outline-success.active,
    .open > .btn.btn-outline-success.dropdown-toggle,
    .show > .btn.btn-outline-success.dropdown-toggle {
        color: #4caf50;
        background-color: rgba(153, 153, 153, 0.2);
        border-color: #4caf50;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }
    .btn.btn-outline-success:active:hover, .btn.btn-outline-success:active:focus, .btn.btn-outline-success:active.focus, .btn.btn-outline-success.active:hover, .btn.btn-outline-success.active:focus, .btn.btn-outline-success.active.focus,
    .open > .btn.btn-outline-success.dropdown-toggle:hover,
    .open > .btn.btn-outline-success.dropdown-toggle:focus,
    .open > .btn.btn-outline-success.dropdown-toggle.focus,
    .show > .btn.btn-outline-success.dropdown-toggle:hover,
    .show > .btn.btn-outline-success.dropdown-toggle:focus,
    .show > .btn.btn-outline-success.dropdown-toggle.focus {
        color: #4caf50;
        background-color: rgba(153, 153, 153, 0.4);
        border-color: #4caf50; }
    .open > .btn.btn-outline-success.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: transparent; }
    .open > .btn.btn-outline-success.dropdown-toggle.bmd-btn-icon:hover {
        background-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-outline-success.disabled:focus, .btn.btn-outline-success.disabled.focus, .btn.btn-outline-success:disabled:focus, .btn.btn-outline-success:disabled.focus {
        background-color: transparent;
        border-color: #4caf50; }
    .btn.btn-outline-success.disabled:hover, .btn.btn-outline-success:disabled:hover {
        background-color: transparent;
        border-color: #4caf50; }
    .bg-inverse .btn.btn-outline-success {
        color: #4caf50;
        background-color: transparent;
        border-color: #4caf50; }
    .bg-inverse .btn.btn-outline-success:hover {
        color: #4caf50;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
    .bg-inverse .btn.btn-outline-success:focus, .bg-inverse .btn.btn-outline-success.focus, .bg-inverse .btn.btn-outline-success:hover {
        color: #4caf50;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
    .bg-inverse .btn.btn-outline-success:active, .bg-inverse .btn.btn-outline-success.active,
    .open > .bg-inverse .btn.btn-outline-success.dropdown-toggle,
    .show > .bg-inverse .btn.btn-outline-success.dropdown-toggle {
        color: #4caf50;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15);
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }
    .bg-inverse .btn.btn-outline-success:active:hover, .bg-inverse .btn.btn-outline-success:active:focus, .bg-inverse .btn.btn-outline-success:active.focus, .bg-inverse .btn.btn-outline-success.active:hover, .bg-inverse .btn.btn-outline-success.active:focus, .bg-inverse .btn.btn-outline-success.active.focus,
    .open > .bg-inverse .btn.btn-outline-success.dropdown-toggle:hover,
    .open > .bg-inverse .btn.btn-outline-success.dropdown-toggle:focus,
    .open > .bg-inverse .btn.btn-outline-success.dropdown-toggle.focus,
    .show > .bg-inverse .btn.btn-outline-success.dropdown-toggle:hover,
    .show > .bg-inverse .btn.btn-outline-success.dropdown-toggle:focus,
    .show > .bg-inverse .btn.btn-outline-success.dropdown-toggle.focus {
        color: #4caf50;
        background-color: rgba(204, 204, 204, 0.25);
        border-color: rgba(204, 204, 204, 0.25); }
    .open > .bg-inverse .btn.btn-outline-success.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: transparent; }
    .open > .bg-inverse .btn.btn-outline-success.dropdown-toggle.bmd-btn-icon:hover {
        background-color: rgba(204, 204, 204, 0.15); }
    .bg-inverse .btn.btn-outline-success.disabled:focus, .bg-inverse .btn.btn-outline-success.disabled.focus, .bg-inverse .btn.btn-outline-success:disabled:focus, .bg-inverse .btn.btn-outline-success:disabled.focus {
        background-color: transparent;
        border-color: #4caf50; }
    .bg-inverse .btn.btn-outline-success.disabled:hover, .bg-inverse .btn.btn-outline-success:disabled:hover {
        background-color: transparent;
        border-color: #4caf50; }
    .btn.btn-outline-success.btn-link {
        background-color: transparent; }
    .btn.btn-outline-warning {
        color: #ff9800;
        background-color: transparent;
        border-color: #ff9800; }
    .btn.btn-outline-warning:hover {
        color: #ff9800;
        background-color: rgba(153, 153, 153, 0.2);
        border-color: #ff9800; }
    .btn.btn-outline-warning:focus, .btn.btn-outline-warning.focus, .btn.btn-outline-warning:hover {
        color: #ff9800;
        background-color: rgba(153, 153, 153, 0.2);
        border-color: #ff9800; }
    .btn.btn-outline-warning:active, .btn.btn-outline-warning.active,
    .open > .btn.btn-outline-warning.dropdown-toggle,
    .show > .btn.btn-outline-warning.dropdown-toggle {
        color: #ff9800;
        background-color: rgba(153, 153, 153, 0.2);
        border-color: #ff9800;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }
    .btn.btn-outline-warning:active:hover, .btn.btn-outline-warning:active:focus, .btn.btn-outline-warning:active.focus, .btn.btn-outline-warning.active:hover, .btn.btn-outline-warning.active:focus, .btn.btn-outline-warning.active.focus,
    .open > .btn.btn-outline-warning.dropdown-toggle:hover,
    .open > .btn.btn-outline-warning.dropdown-toggle:focus,
    .open > .btn.btn-outline-warning.dropdown-toggle.focus,
    .show > .btn.btn-outline-warning.dropdown-toggle:hover,
    .show > .btn.btn-outline-warning.dropdown-toggle:focus,
    .show > .btn.btn-outline-warning.dropdown-toggle.focus {
        color: #ff9800;
        background-color: rgba(153, 153, 153, 0.4);
        border-color: #ff9800; }
    .open > .btn.btn-outline-warning.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: transparent; }
    .open > .btn.btn-outline-warning.dropdown-toggle.bmd-btn-icon:hover {
        background-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-outline-warning.disabled:focus, .btn.btn-outline-warning.disabled.focus, .btn.btn-outline-warning:disabled:focus, .btn.btn-outline-warning:disabled.focus {
        background-color: transparent;
        border-color: #ff9800; }
    .btn.btn-outline-warning.disabled:hover, .btn.btn-outline-warning:disabled:hover {
        background-color: transparent;
        border-color: #ff9800; }
    .bg-inverse .btn.btn-outline-warning {
        color: #ff9800;
        background-color: transparent;
        border-color: #ff9800; }
    .bg-inverse .btn.btn-outline-warning:hover {
        color: #ff9800;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
    .bg-inverse .btn.btn-outline-warning:focus, .bg-inverse .btn.btn-outline-warning.focus, .bg-inverse .btn.btn-outline-warning:hover {
        color: #ff9800;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
    .bg-inverse .btn.btn-outline-warning:active, .bg-inverse .btn.btn-outline-warning.active,
    .open > .bg-inverse .btn.btn-outline-warning.dropdown-toggle,
    .show > .bg-inverse .btn.btn-outline-warning.dropdown-toggle {
        color: #ff9800;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15);
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }
    .bg-inverse .btn.btn-outline-warning:active:hover, .bg-inverse .btn.btn-outline-warning:active:focus, .bg-inverse .btn.btn-outline-warning:active.focus, .bg-inverse .btn.btn-outline-warning.active:hover, .bg-inverse .btn.btn-outline-warning.active:focus, .bg-inverse .btn.btn-outline-warning.active.focus,
    .open > .bg-inverse .btn.btn-outline-warning.dropdown-toggle:hover,
    .open > .bg-inverse .btn.btn-outline-warning.dropdown-toggle:focus,
    .open > .bg-inverse .btn.btn-outline-warning.dropdown-toggle.focus,
    .show > .bg-inverse .btn.btn-outline-warning.dropdown-toggle:hover,
    .show > .bg-inverse .btn.btn-outline-warning.dropdown-toggle:focus,
    .show > .bg-inverse .btn.btn-outline-warning.dropdown-toggle.focus {
        color: #ff9800;
        background-color: rgba(204, 204, 204, 0.25);
        border-color: rgba(204, 204, 204, 0.25); }
    .open > .bg-inverse .btn.btn-outline-warning.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: transparent; }
    .open > .bg-inverse .btn.btn-outline-warning.dropdown-toggle.bmd-btn-icon:hover {
        background-color: rgba(204, 204, 204, 0.15); }
    .bg-inverse .btn.btn-outline-warning.disabled:focus, .bg-inverse .btn.btn-outline-warning.disabled.focus, .bg-inverse .btn.btn-outline-warning:disabled:focus, .bg-inverse .btn.btn-outline-warning:disabled.focus {
        background-color: transparent;
        border-color: #ff9800; }
    .bg-inverse .btn.btn-outline-warning.disabled:hover, .bg-inverse .btn.btn-outline-warning:disabled:hover {
        background-color: transparent;
        border-color: #ff9800; }
    .btn.btn-outline-warning.btn-link {
        background-color: transparent; }
    .btn.btn-outline-danger {
        color: #f44336;
        background-color: transparent;
        border-color: #f44336; }
    .btn.btn-outline-danger:hover {
        color: #f44336;
        background-color: rgba(153, 153, 153, 0.2);
        border-color: #f44336; }
    .btn.btn-outline-danger:focus, .btn.btn-outline-danger.focus, .btn.btn-outline-danger:hover {
        color: #f44336;
        background-color: rgba(153, 153, 153, 0.2);
        border-color: #f44336; }
    .btn.btn-outline-danger:active, .btn.btn-outline-danger.active,
    .open > .btn.btn-outline-danger.dropdown-toggle,
    .show > .btn.btn-outline-danger.dropdown-toggle {
        color: #f44336;
        background-color: rgba(153, 153, 153, 0.2);
        border-color: #f44336;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }
    .btn.btn-outline-danger:active:hover, .btn.btn-outline-danger:active:focus, .btn.btn-outline-danger:active.focus, .btn.btn-outline-danger.active:hover, .btn.btn-outline-danger.active:focus, .btn.btn-outline-danger.active.focus,
    .open > .btn.btn-outline-danger.dropdown-toggle:hover,
    .open > .btn.btn-outline-danger.dropdown-toggle:focus,
    .open > .btn.btn-outline-danger.dropdown-toggle.focus,
    .show > .btn.btn-outline-danger.dropdown-toggle:hover,
    .show > .btn.btn-outline-danger.dropdown-toggle:focus,
    .show > .btn.btn-outline-danger.dropdown-toggle.focus {
        color: #f44336;
        background-color: rgba(153, 153, 153, 0.4);
        border-color: #f44336; }
    .open > .btn.btn-outline-danger.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: transparent; }
    .open > .btn.btn-outline-danger.dropdown-toggle.bmd-btn-icon:hover {
        background-color: rgba(153, 153, 153, 0.2); }
    .btn.btn-outline-danger.disabled:focus, .btn.btn-outline-danger.disabled.focus, .btn.btn-outline-danger:disabled:focus, .btn.btn-outline-danger:disabled.focus {
        background-color: transparent;
        border-color: #f44336; }
    .btn.btn-outline-danger.disabled:hover, .btn.btn-outline-danger:disabled:hover {
        background-color: transparent;
        border-color: #f44336; }
    .bg-inverse .btn.btn-outline-danger {
        color: #f44336;
        background-color: transparent;
        border-color: #f44336; }
    .bg-inverse .btn.btn-outline-danger:hover {
        color: #f44336;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
    .bg-inverse .btn.btn-outline-danger:focus, .bg-inverse .btn.btn-outline-danger.focus, .bg-inverse .btn.btn-outline-danger:hover {
        color: #f44336;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15); }
    .bg-inverse .btn.btn-outline-danger:active, .bg-inverse .btn.btn-outline-danger.active,
    .open > .bg-inverse .btn.btn-outline-danger.dropdown-toggle,
    .show > .bg-inverse .btn.btn-outline-danger.dropdown-toggle {
        color: #f44336;
        background-color: rgba(204, 204, 204, 0.15);
        border-color: rgba(204, 204, 204, 0.15);
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }
    .bg-inverse .btn.btn-outline-danger:active:hover, .bg-inverse .btn.btn-outline-danger:active:focus, .bg-inverse .btn.btn-outline-danger:active.focus, .bg-inverse .btn.btn-outline-danger.active:hover, .bg-inverse .btn.btn-outline-danger.active:focus, .bg-inverse .btn.btn-outline-danger.active.focus,
    .open > .bg-inverse .btn.btn-outline-danger.dropdown-toggle:hover,
    .open > .bg-inverse .btn.btn-outline-danger.dropdown-toggle:focus,
    .open > .bg-inverse .btn.btn-outline-danger.dropdown-toggle.focus,
    .show > .bg-inverse .btn.btn-outline-danger.dropdown-toggle:hover,
    .show > .bg-inverse .btn.btn-outline-danger.dropdown-toggle:focus,
    .show > .bg-inverse .btn.btn-outline-danger.dropdown-toggle.focus {
        color: #f44336;
        background-color: rgba(204, 204, 204, 0.25);
        border-color: rgba(204, 204, 204, 0.25); }
    .open > .bg-inverse .btn.btn-outline-danger.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: transparent; }
    .open > .bg-inverse .btn.btn-outline-danger.dropdown-toggle.bmd-btn-icon:hover {
        background-color: rgba(204, 204, 204, 0.15); }
    .bg-inverse .btn.btn-outline-danger.disabled:focus, .bg-inverse .btn.btn-outline-danger.disabled.focus, .bg-inverse .btn.btn-outline-danger:disabled:focus, .bg-inverse .btn.btn-outline-danger:disabled.focus {
        background-color: transparent;
        border-color: #f44336; }
    .bg-inverse .btn.btn-outline-danger.disabled:hover, .bg-inverse .btn.btn-outline-danger:disabled:hover {
        background-color: transparent;
        border-color: #f44336; }
    .btn.btn-outline-danger.btn-link {
        background-color: transparent; }
    .btn.btn-lg, .btn-group-lg > .btn,
    .btn-group-lg .btn {
        padding: 1.125rem 2.25rem;
        font-size: 0.875rem;
        line-height: 1.33333;
        border-radius: 0.2rem; }
    .btn.btn-sm, .btn-group-sm > .btn,
    .btn-group-sm .btn {
        padding: 0.40625rem 1.25rem;
        font-size: 0.6875rem;
        line-height: 1.5;
        border-radius: 0.2rem; }
    .btn.btn-round {
        border-radius: 30px; }
    .btn.btn-fab, .btn.btn-just-icon {
        font-size: 24px;
        height: 41px;
        min-width: 41px;
        width: 41px;
        padding: 0;
        overflow: hidden;
        position: relative;
        line-height: 41px; }
    .btn.btn-fab.btn-round, .btn.btn-just-icon.btn-round {
        border-radius: 50%; }
    .btn-group-sm .btn.btn-fab, .btn.btn-fab.btn-sm, .btn-group-sm > .btn.btn-fab, .btn.btn-fab.btn-fab-mini, .btn-group-sm .btn.btn-just-icon, .btn.btn-just-icon.btn-sm, .btn-group-sm > .btn.btn-just-icon, .btn.btn-just-icon.btn-fab-mini {
        height: 30px;
        min-width: 30px;
        width: 30px; }
    .btn-group-sm .btn.btn-fab .material-icons,
    .btn-group-sm .btn.btn-fab .fa, .btn.btn-fab.btn-sm .material-icons, .btn-group-sm > .btn.btn-fab .material-icons,
    .btn.btn-fab.btn-sm .fa,
    .btn-group-sm > .btn.btn-fab .fa, .btn.btn-fab.btn-fab-mini .material-icons,
    .btn.btn-fab.btn-fab-mini .fa, .btn-group-sm .btn.btn-just-icon .material-icons,
    .btn-group-sm .btn.btn-just-icon .fa, .btn.btn-just-icon.btn-sm .material-icons, .btn-group-sm > .btn.btn-just-icon .material-icons,
    .btn.btn-just-icon.btn-sm .fa,
    .btn-group-sm > .btn.btn-just-icon .fa, .btn.btn-just-icon.btn-fab-mini .material-icons,
    .btn.btn-just-icon.btn-fab-mini .fa {
        font-size: 17px;
        line-height: 29px; }
    .btn-group-lg .btn.btn-fab, .btn.btn-fab.btn-lg, .btn-group-lg > .btn.btn-fab, .btn-group-lg .btn.btn-just-icon, .btn.btn-just-icon.btn-lg, .btn-group-lg > .btn.btn-just-icon {
        height: 57px;
        min-width: 57px;
        width: 57px;
        line-height: 56px; }
    .btn-group-lg .btn.btn-fab .material-icons,
    .btn-group-lg .btn.btn-fab .fa, .btn.btn-fab.btn-lg .material-icons, .btn-group-lg > .btn.btn-fab .material-icons,
    .btn.btn-fab.btn-lg .fa,
    .btn-group-lg > .btn.btn-fab .fa, .btn-group-lg .btn.btn-just-icon .material-icons,
    .btn-group-lg .btn.btn-just-icon .fa, .btn.btn-just-icon.btn-lg .material-icons, .btn-group-lg > .btn.btn-just-icon .material-icons,
    .btn.btn-just-icon.btn-lg .fa,
    .btn-group-lg > .btn.btn-just-icon .fa {
        font-size: 32px;
        line-height: 56px; }
    .btn.btn-fab .material-icons,
    .btn.btn-fab .fa, .btn.btn-just-icon .material-icons,
    .btn.btn-just-icon .fa {
        margin-top: 0;
        position: absolute;
        width: 100%;
        -webkit-transform: none;
        transform: none;
        left: 0;
        top: 0;
        height: 100%;
        line-height: 41px;
        font-size: 20px; }

    .btn-just-icon.btn-lg, .btn-group-lg > .btn-just-icon.btn {
        font-size: 24px;
        height: 41px;
        min-width: 41px;
        width: 41px; }

    .input-group-btn > .btn {
        border: 0; }

    .btn .material-icons,
    .btn:not(.btn-just-icon):not(.btn-fab) .fa {
        position: relative;
        display: inline-block;
        top: 0;
        margin-top: -1em;
        margin-bottom: -1em;
        font-size: 1.1rem;
        vertical-align: middle; }

    .bg-inverse fieldset[disabled][disabled] .btn, .bg-inverse .btn.disabled, .bg-inverse .btn:disabled, .bg-inverse .btn[disabled], .bg-inverse fieldset[disabled][disabled]
    .input-group-btn .btn, .bg-inverse
    .input-group-btn .btn.disabled, .bg-inverse
    .input-group-btn .btn:disabled, .bg-inverse
    .input-group-btn .btn[disabled], .bg-inverse fieldset[disabled][disabled]
    .btn-group, .bg-inverse
    .btn-group.disabled, .bg-inverse
    .btn-group:disabled, .bg-inverse
    .btn-group[disabled], .bg-inverse fieldset[disabled][disabled]
    .btn-group-vertical, .bg-inverse
    .btn-group-vertical.disabled, .bg-inverse
    .btn-group-vertical:disabled, .bg-inverse
    .btn-group-vertical[disabled] {
        color: rgba(255, 255, 255, 0.3); }

    .btn-group,
    .btn-group-vertical {
        position: relative;
        margin: 10px 1px; }
    .btn-group .dropdown-menu,
    .btn-group-vertical .dropdown-menu {
        border-radius: 0 0 0.25rem 0.25rem; }
    .btn-group.btn-group-raised,
    .btn-group-vertical.btn-group-raised {
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }
    .btn-group .btn + .btn,
    .btn-group .btn,
    .btn-group .btn:active,
    .btn-group .btn-group,
    .btn-group-vertical .btn + .btn,
    .btn-group-vertical .btn,
    .btn-group-vertical .btn:active,
    .btn-group-vertical .btn-group {
        margin: 0; }
    .btn-group > .btn-group,
    .btn-group-vertical > .btn-group {
        margin: 0; }

    body {
        /*background-color: #eee;*/
        color: #3C4858;
        font-weight: 300; }

    legend {
        border-bottom: 0; }

    .serif-font {
        font-family: "Roboto Slab", "Times New Roman", serif; }

    * {
        -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
        -webkit-tap-highlight-color: transparent; }
    *:focus {
        outline: 0; }

    a {
        color: #9c27b0; }
    a:hover, a:focus {
        color: #89229b;
        text-decoration: none; }
    a.text-info:hover, a.text-info:focus {
        color: #00a5bb; }
    a .material-icons {
        vertical-align: middle; }

    .main {
        background: #FFFFFF;
        position: relative;
        z-index: 3; }

    .form-check,
    label {
        font-size: 14px;
        line-height: 1.42857;
        color: #AAAAAA;
        font-weight: 400; }

    .main-raised {
        margin: -60px 30px 0px;
        border-radius: 6px;
        box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); }

    /*           Animations              */
    .animation-transition-general, .carousel .carousel-indicators li {
        -webkit-transition: all 300ms linear;
        transition: all 300ms linear; }

    .animation-transition-slow {
        -webkit-transition: all 370ms linear;
        transition: all 370ms linear; }

    .animation-transition-fast, .bootstrap-datetimepicker-widget table td > div,
    .bootstrap-datetimepicker-widget table th > div, .bootstrap-datetimepicker-widget table th, .bootstrap-datetimepicker-widget table td span, .presentation-page .section-cards .card,
    .index-page .section-cards .card, .product-page .flexi-nav > li a {
        -webkit-transition: all 150ms ease 0s;
        transition: all 150ms ease 0s; }

    .animation-transition-fast, .bootstrap-datetimepicker-widget table td > div,
    .bootstrap-datetimepicker-widget table th > div, .bootstrap-datetimepicker-widget table th, .bootstrap-datetimepicker-widget table td span, .presentation-page .section-cards .card,
    .index-page .section-cards .card, .product-page .flexi-nav > li a,
    .navbar,
    .bootstrap-tagsinput .tag,
    .bootstrap-tagsinput [data-role="remove"],
    .card-collapse .card-header a i {
        -webkit-transition: all 150ms ease 0s;
        transition: all 150ms ease 0s; }

    .signup-page .card-signup form .form-check {
        padding-left: 20px; }
    .signup-page .card-signup form .form-check .form-check-label {
        padding-left: 35px; }

    .section-signup .card-signup .card-header {
        width: auto; }

    .section-signup .card-signup .card-body .input-group {
        padding-bottom: 7px;
        margin: 27px 0 0 0; }

    .offline-doc .page-header,
    .offline-free-doc .page-header {
        height: 100vh !important; }
    .offline-doc .page-header:after,
    .offline-free-doc .page-header:after {
        background: rgba(0, 0, 0, 0.5) !important; }

    .offline-doc .footer,
    .offline-free-doc .footer {
        position: absolute;
        width: 100%;
        background: transparent;
        bottom: 0;
        color: #fff;
        z-index: 1; }
    .offline-doc .footer .copyright a,
    .offline-free-doc .footer .copyright a {
        color: #fff; }

    .offline-doc .navbar .navbar-brand,
    .offline-doc .navbar .navbar-collapse .nav-link,
    .offline-free-doc .navbar .navbar-brand,
    .offline-free-doc .navbar .navbar-collapse .nav-link {
        color: #fff; }

    @-webkit-keyframes hinge {
        0% {
            -webkit-transform-origin: top left;
            transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out; }
        20%, 60% {
            -webkit-transform: rotate3d(0, 0, 1, 80deg);
            transform: rotate3d(0, 0, 1, 80deg);
            -webkit-transform-origin: top left;
            transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out; }
        40%, 80% {
            -webkit-transform: rotate3d(0, 0, 1, 60deg);
            transform: rotate3d(0, 0, 1, 60deg);
            -webkit-transform-origin: top left;
            transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
            opacity: 1; }
        to {
            -webkit-transform: translate3d(0, 700px, 0);
            transform: translate3d(0, 700px, 0);
            opacity: 0; } }

    @keyframes hinge {
        0% {
            -webkit-transform-origin: top left;
            transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out; }
        20%, 60% {
            -webkit-transform: rotate3d(0, 0, 1, 80deg);
            transform: rotate3d(0, 0, 1, 80deg);
            -webkit-transform-origin: top left;
            transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out; }
        40%, 80% {
            -webkit-transform: rotate3d(0, 0, 1, 60deg);
            transform: rotate3d(0, 0, 1, 60deg);
            -webkit-transform-origin: top left;
            transform-origin: top left;
            -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out;
            opacity: 1; }
        to {
            -webkit-transform: translate3d(0, 700px, 0);
            transform: translate3d(0, 700px, 0);
            opacity: 0; } }

    .hinge {
        -webkit-animation-name: hinge;
        animation-name: hinge; }

    .animated.hinge {
        -webkit-animation-duration: 2s;
        animation-duration: 2s; }

    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both; }

    .tim-row {
        margin-bottom: 20px; }

    .tim-white-buttons {
        background-color: #777777; }

    .title {
        margin-top: 30px;
        margin-bottom: 25px;
        min-height: 32px; }

    #map {
        position: relative;
        z-index: 2;
        width: 100%;
        height: calc(100vh - 70px);
        margin-top: 70px; }

    .tim-typo {
        padding-left: 25%;
        margin-bottom: 40px;
        position: relative;
        width: 100%; }

    .tim-typo .tim-note {
        bottom: 5px;
        color: #c0c1c2;
        display: block;
        font-weight: 400;
        font-size: 13px;
        line-height: 15px;
        left: 0;
        margin-left: 20px;
        position: absolute;
        width: 260px; }

    .tim-row {
        padding-top: 50px; }

    .tim-row h3 {
        margin-top: 0; }

    #typography h1, #typography h2, #typography h3,
    #typography h4, #typography h5, #typography h6 {
        margin-bottom: 0; }

    .switch {
        margin-right: 20px; }

    #navbar-full .navbar {
        border-radius: 0 !important;
        margin-bottom: 15px;
        z-index: 2; }

    .space {
        height: 130px;
        display: block; }

    .space-110 {
        height: 110px;
        display: block; }

    .space-50 {
        height: 50px;
        display: block; }

    .space-70 {
        height: 70px;
        display: block; }

    .navigation-example .img-src {
        background-attachment: scroll; }

    .navigation-example {
        background-position: center center;
        background-size: cover;
        margin-top: 0;
        min-height: 740px; }

    #notifications {
        background-color: #fff;
        display: block;
        width: 100%;
        position: relative; }

    #notifications .alert-danger {
        margin-bottom: 0px; }

    .tim-note {
        text-transform: capitalize; }

    #buttons .btn {
        margin: 0 0px 15px; }

    .space-100 {
        height: 100px;
        display: block;
        width: 100%; }

    .parallax {
        width: 100%;
        height: 570px;
        display: block;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center; }

    .parallax .parallax-image {
        width: 100%;
        overflow: hidden;
        position: absolute; }

    .parallax .parallax-image img {
        width: 100%; }

    @media (max-width: 768px) {
        .parallax .parallax-image {
            width: 100%;
            height: 640px;
            overflow: hidden; }
        .parallax .parallax-image img {
            height: 100%;
            width: auto; } }

    .separator {
        content: "Separator";
        color: #FFFFFF;
        display: block;
        width: 100%;
        padding: 20px; }

    .separator-line {
        background-color: #EEE;
        height: 1px;
        width: 100%;
        display: block; }

    .separator.separator-gray {
        background-color: #EEEEEE; }

    .social-buttons-demo .btn {
        margin: 10px 5px 7px 1px; }

    .img-container {
        width: 100%;
        overflow: hidden; }

    .img-container img {
        width: 100%; }

    .section-black {
        background-color: #333; }

    .animate {
        transition: 1.5s ease-in-out;
        -moz-transition: 1.5s ease-in-out;
        -webkit-transition: 1.5s ease-in-out; }

    .sharing-area {
        margin-top: 80px; }

    .sharing-area .btn {
        margin: 15px 4px 0;
        color: #FFFFFF; }

    .sharing-area .btn i {
        font-size: 18px;
        position: relative;
        top: 2px;
        margin-right: 5px; }

    #navbar {
        margin-bottom: -20px; }

    .sharing-area .btn-twitter {
        background-color: #55acee; }

    .sharing-area .btn-facebook {
        background-color: #3b5998; }

    .sharing-area .btn-google-plus {
        background-color: #dd4b39; }

    .sharing-area .btn-github {
        background-color: #333333; }

    #navbar .navbar {
        border-radius: 0; }

    @media (max-width: 830px) {
        .main-raised {
            margin-left: 10px;
            margin-right: 10px; } }

    @media (max-width: 767px) {
        .tab-pane#schedule-2 {
            padding-top: 20px; } }

    .bd-docs .bd-example.bd-example-popover-static .popover,
    .bd-docs .bd-example.bd-example-tooltip-static .tooltip {
        z-index: 3 !important; }

    @media all and (max-width: 375px) {
        .page-header {
            height: calc(100vh + 270px); }
        .index-page {
            overflow-x: hidden; }
        .pagination.pagination-primary .page-item:nth-of-type(3),
        .pagination.pagination-primary .page-item:nth-of-type(7) {
            display: none; }
        .pagination.pagination-info .page-item:nth-of-type(2) {
            display: none; }
        .main.main-raised {
            margin-top: -30px; }
        .form-group.is-focused .bootstrap-datetimepicker-widget {
            left: -32px !important; } }

    .show.modal .dropdown-toggle:after {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg); }

    .bootstrap-datetimepicker-widget .timepicker .table-condesed .btn .ripple-container {
        width: 40px;
        height: 40px;
        margin: -11px 3px; }

    .bd-docs .bd-toc-item .bd-sidenav a span {
        float: right;
        margin-top: 5px;
        padding: 3px 7px;
        font-size: 8px;
        line-height: 9px;
        background-color: #9c27b0; }

    .bd-docs .bd-content .bd-title .btn {
        padding: 7px 20px;
        margin-bottom: 10px; }

    .dropdown .dropdown-menu .dropdown-item.dropdown-toggle + .dropdown-menu {
        -webkit-transform: scale(0);
        transform: scale(0);
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
        display: block; }

    .dropdown .dropdown-menu.show .dropdown-item.dropdown-toggle + .dropdown-menu.show {
        left: 101% !important;
        -webkit-transform: scale(1);
        transform: scale(1); }

    .navbar.navbar-transparent .logo-big {
        width: 150px;
        height: 50px;
        overflow: hidden;
        margin-top: -10px;
        display: block; }
    .navbar.navbar-transparent .logo-big img {
        height: 100%; }

    .navbar.navbar-transparent .logo-small {
        display: none; }

    .navbar:not(.navbar-transparent) .logo-big {
        display: none; }

    .navbar:not(.navbar-transparent) .logo-small {
        width: 46px;
        height: 46px;
        overflow: hidden;
        margin-top: -6px;
        display: block; }

    @media all and (max-width: 375px) {
        .page-header {
            height: calc(100vh + 270px); }
        .media-area .media-body {
            width: 190px; }
        .media-area .media-body .media,
        .media-area .media-body .media.media-post {
            margin-left: -50px; }
        .index-page {
            overflow-x: hidden; }
        #social-buttons .social-buttons-demo:last-of-type {
            margin-left: -25px; }
        .pagination.pagination-primary .page-item:nth-of-type(3),
        .pagination.pagination-primary .page-item:nth-of-type(7) {
            display: none; }
        .pagination.pagination-info .page-item:nth-of-type(2) {
            display: none; }
        .main.main-raised {
            margin-top: -30px; } }

    .bd-docs .bd-example .social-buttons-demo .btn {
        margin-bottom: 10px; }

    .bd-docs .bd-example.bd-example-popover-static .popover,
    .bd-docs .bd-example.bd-example-tooltip-static .tooltip {
        z-index: 3 !important; }

    .bd-docs .bd-example .alert-dismissible .close {
        top: 7px; }

    .offline-doc .page-header,
    .offline-free-doc .page-header {
        height: 100vh !important; }
    .offline-doc .page-header:after,
    .offline-free-doc .page-header:after {
        background: rgba(0, 0, 0, 0.5) !important; }

    .offline-doc .footer,
    .offline-free-doc .footer {
        position: absolute;
        width: 100%;
        background: transparent;
        bottom: 0;
        color: #fff;
        z-index: 1; }
    .offline-doc .footer .copyright a,
    .offline-free-doc .footer .copyright a {
        color: #fff; }

    .offline-doc .navbar .navbar-brand,
    .offline-doc .navbar .navbar-collapse .nav-link,
    .offline-free-doc .navbar .navbar-brand,
    .offline-free-doc .navbar .navbar-collapse .nav-link {
        color: #fff; }

    .offline-doc .page-header:after,
    .offline-free-doc .page-header:after {
        background: rgba(0, 0, 0, 0.5) !important;
        content: "";
        display: block;
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 1; }

    .form-check {
        margin-bottom: .5rem;
        padding-left: 0; }
    .form-check .form-check-label {
        cursor: pointer;
        padding-left: 0; }
    .form-group.is-focused .form-check .form-check-label {
        color: rgba(0,0,0, 0.26); }
    .form-group.is-focused .form-check .form-check-label:hover, .form-group.is-focused .form-check .form-check-label:focus {
        color: rgba(0,0,0, .54); }
    fieldset[disabled] .form-group.is-focused .form-check .form-check-label {
        color: rgba(0,0,0, 0.26); }
    .form-check .form-check-input {
        opacity: 0;
        position: absolute;
        margin: 0;
        z-index: -1;
        width: 0;
        height: 0;
        overflow: hidden;
        left: 0;
        pointer-events: none; }
    .form-check .form-check-sign {
        vertical-align: middle;
        position: relative;
        top: -2px;
        float: left;
        padding-right: 10px;
        display: inline-block; }
    .form-check .form-check-sign:before {
        display: block;
        position: absolute;
        left: 0;
        content: "";
        background-color: rgba(0, 0, 0, 0.84);
        height: 20px;
        width: 20px;
        border-radius: 100%;
        z-index: 1;
        opacity: 0;
        margin: 0;
        top: 0;
        -webkit-transform: scale3d(2.3,2.3,1);
        transform: scale3d(2.3,2.3,1); }
    .form-check .form-check-sign .check {
        position: relative;
        display: inline-block;
        width: 20px;
        height: 20px;
        border: 1px solid rgba(0,0,0, .54);
        overflow: hidden;
        z-index: 1;
        border-radius: 3px; }
    .form-check .form-check-sign .check:before {
        position: absolute;
        content: "";
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        display: block;
        margin-top: -3px;
        margin-left: 7px;
        width: 0;
        color: #fff;
        height: 0;
        box-shadow: 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0 inset;
        -webkit-animation: checkbox-off 0.3s forwards;
        animation: checkbox-off 0.3s forwards; }
    .form-check .form-check-input:focus + .form-check-sign .check:after {
        opacity: 0.2; }
    .form-check .form-check-input:checked ~ .form-check-sign .check {
        background: #9c27b0; }
    .form-check .form-check-input:checked ~ .form-check-sign .check:before {
        color: #FFFFFF;
        box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px -12px 0 11px;
        -webkit-animation: checkbox-on 0.3s forwards;
        animation: checkbox-on 0.3s forwards; }
    .form-check .form-check-input:checked ~ .form-check-sign:before {
        -webkit-animation: rippleOn 500ms;
        animation: rippleOn 500ms; }
    .form-check .form-check-input:checked ~ .form-check-sign .check:after {
        -webkit-animation: rippleOn 500ms forwards;
        animation: rippleOn 500ms forwards; }
    .form-check .form-check-input:not(:checked) + .form-check-sign:before {
        -webkit-animation: rippleOff 500ms;
        animation: rippleOff 500ms; }
    .form-check .form-check-input:not(:checked) + .form-check-sign .check:after {
        -webkit-animation: rippleOff 500ms;
        animation: rippleOff 500ms; }
    fieldset[disabled] .form-check,
    fieldset[disabled] .form-check .form-check-input,
    .form-check .form-check-input[disabled] ~ .form-check-sign .check,
    .form-check .form-check-input[disabled] + .circle {
        opacity: 0.5; }
    .form-check .form-check-input[disabled] ~ .form-check-sign .check {
        border-color: #000000;
        opacity: .26; }
    .form-check .form-check-input[disabled] + .form-check-sign .check:after {
        background-color: rgba(0,0,0, 0.87);
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg); }
    .form-check .form-check-input[disabled][checked] + .form-check-sign .check {
        background-color: #000000; }

    @-webkit-keyframes checkbox-on {
        0% {
            box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 15px 2px 0 11px; }
        50% {
            box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px 2px 0 11px; }
        100% {
            box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px -12px 0 11px; } }

    @keyframes checkbox-on {
        0% {
            box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 15px 2px 0 11px; }
        50% {
            box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px 2px 0 11px; }
        100% {
            box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px -12px 0 11px; } }

    @-webkit-keyframes rippleOn {
        0% {
            opacity: 0; }
        50% {
            opacity: 0.2; }
        100% {
            opacity: 0; } }

    @keyframes rippleOn {
        0% {
            opacity: 0; }
        50% {
            opacity: 0.2; }
        100% {
            opacity: 0; } }

    @-webkit-keyframes rippleOff {
        0% {
            opacity: 0; }
        50% {
            opacity: 0.2; }
        100% {
            opacity: 0; } }

    @keyframes rippleOff {
        0% {
            opacity: 0; }
        50% {
            opacity: 0.2; }
        100% {
            opacity: 0; } }

    .switch label {
        position: relative;
        padding-left: 2.4375rem; }
    .switch label .bmd-switch-track {
        position: absolute;
        top: 0.3125rem;
        left: 0;
        display: inline-block;
        width: 2.125rem;
        height: 0.875rem;
        cursor: pointer;
        background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, 0.12)), color-stop(50%, rgba(0, 0, 0, 0.12)), color-stop(50%, #c49bcb), to(#c49bcb));
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0.12) 0%, rgba(0, 0, 0, 0.12) 50%, #c49bcb 50%, #c49bcb 100%);
        background-position: 0%;
        background-size: 4.25rem 0.875rem;
        border-radius: 2.125rem;
        -webkit-transition: background-position 0.2s ease-in;
        transition: background-position 0.2s ease-in; }
    .switch label .bmd-switch-track::after {
        position: absolute;
        top: 50%;
        left: 0;
        display: block;
        align-self: center;
        width: 1.25rem;
        height: 1.25rem;
        content: "";
        background: #f1f1f1;
        border-radius: 100%;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
        -webkit-transition: left 0.2s ease-in, background-color 0.2s ease-in, -webkit-transform 0.3s ease;
        transition: left 0.2s ease-in, background-color 0.2s ease-in, -webkit-transform 0.3s ease;
        transition: left 0.2s ease-in, background-color 0.2s ease-in, transform 0.3s ease;
        transition: left 0.2s ease-in, background-color 0.2s ease-in, transform 0.3s ease, -webkit-transform 0.3s ease;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%); }
    .switch label .bmd-switch-track:active::after {
        -webkit-transform: translateY(-50%) scale3d(1.15, 0.85, 1);
        transform: translateY(-50%) scale3d(1.15, 0.85, 1); }
    .switch label input {
        position: absolute;
        display: block;
        width: 0;
        height: 0;
        opacity: 0; }
    .switch label input:checked + .bmd-switch-track {
        background-position: -100%; }
    .switch label input:checked + .bmd-switch-track::after {
        left: calc(100% - 1.25rem);
        background-color: #9c27b0; }
    .switch label input:disabled + .bmd-switch-track:active::after {
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%); }
    .switch label input:disabled + .bmd-switch-track {
        cursor: default;
        background: rgba(0, 0, 0, 0.12); }
    .switch label input:disabled + .bmd-switch-track::after {
        background: #bdbdbd; }

    .form-check .form-check-label {
        cursor: pointer;
        padding-left: 25px;
        position: relative; }
    .form-group.is-focused .form-check .form-check-label {
        color: rgba(0,0,0, 0.26); }
    .form-group.is-focused .form-check .form-check-label:hover, .form-group.is-focused .form-check .form-check-label:focus {
        color: rgba(0,0,0, .54); }
    fieldset[disabled] .form-group.is-focused .form-check .form-check-label {
        color: rgba(0,0,0, 0.26); }
    .form-check .form-check-label span {
        display: block;
        position: absolute;
        left: -1px;
        top: -1px;
        -webkit-transition-duration: 0.2s;
        transition-duration: 0.2s; }
    .form-check .form-check-label .circle {
        border: 1px solid rgba(0,0,0, .54);
        height: 15px;
        width: 15px;
        border-radius: 100%;
        top: 1px; }
    .form-check .form-check-label .circle .check {
        height: 15px;
        width: 15px;
        border-radius: 100%;
        background-color: #9c27b0;
        -webkit-transform: scale3d(0,0,0);
        transform: scale3d(0,0,0); }

    .form-check .form-check-input {
        opacity: 0;
        height: 0;
        width: 0;
        overflow: hidden; }
    .form-check .form-check-input:checked ~ .check,
    .form-check .form-check-input:checked ~ .circle {
        opacity: 1; }
    .form-check .form-check-input:checked ~ .check {
        background-color: #9c27b0; }
    .form-check .form-check-input:checked ~ .circle {
        border-color: #9c27b0; }
    .form-check .form-check-input:checked .check:before {
        -webkit-animation: checkboxOn .5s forwards;
        animation: checkboxOn .5s forwards; }
    .form-check .form-check-input:checked ~ .circle .check {
        -webkit-transform: scale3d(0.65, 0.65, 1);
        transform: scale3d(0.65, 0.65, 1); }

    .form-check .form-check-input[disabled] ~ .check,
    .form-check .form-check-input[disabled] ~ .circle {
        opacity: 0.26; }

    .form-check .form-check-input[disabled] ~ .check {
        background-color: #000000; }

    .form-check .form-check-input[disabled] ~ .circle {
        border-color: #000000; }

    .form-check .form-check-input[disabled] + .circle .check {
        background-color: #000000; }

    .form-check .form-check-sign {
        vertical-align: middle;
        position: relative;
        top: -2px;
        float: left;
        padding-right: 10px;
        display: inline-block; }

    .form-check .form-check-label .circle:before {
        display: block;
        position: absolute;
        left: -1px;
        content: "";
        background-color: rgba(0, 0, 0, 0.84);
        height: 15px;
        width: 15px;
        border-radius: 100%;
        z-index: 1;
        opacity: 0;
        margin: 0;
        top: -1px;
        -webkit-transform: scale3d(2.3, 2.3, 1);
        transform: scale3d(2.3, 2.3, 1); }

    .form-check .form-check-label .form-check-input:checked + .circle:before {
        -webkit-animation: rippleOn .5s;
        animation: rippleOn .5s; }

    .form-check .form-check-label .form-check-input:checked + .circle .check:before {
        color: #FFFFFF;
        box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px -12px 0 11px;
        -webkit-animation: checkboxOn 0.3s forwards;
        animation: checkboxOn 0.3s forwards; }

    .form-check + .form-check {
        margin-top: 0; }

    @-webkit-keyframes checkboxOn {
        0% {
            box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 15px 2px 0 11px; }
        50% {
            box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px 2px 0 11px; }
        100% {
            box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px -12px 0 11px; } }

    @keyframes checkboxOn {
        0% {
            box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 15px 2px 0 11px; }
        50% {
            box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px 2px 0 11px; }
        100% {
            box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0px 32px 0 20px, -5px 5px 0 10px, 20px -12px 0 11px; } }

    @keyframes rippleOn {
        0% {
            opacity: 0; }
        50% {
            opacity: 0.2; }
        100% {
            opacity: 0; } }

    @keyframes rippleOff {
        0% {
            opacity: 0; }
        50% {
            opacity: 0.2; }
        100% {
            opacity: 0; } }

    .carousel .carousel-control.left, .carousel .carousel-control.right {
        background-image: none; }

    .carousel .carousel-control.right i {
        right: 0; }

    .carousel .card {
        margin-top: 0; }

    .carousel .item {
        text-align: center; }

    .carousel.carousel-full-nagivation .carousel-control {
        width: 50%; }
    .carousel.carousel-full-nagivation .carousel-control.left, .carousel.carousel-full-nagivation .carousel-control.right {
        background-image: none; }
    .carousel.carousel-full-nagivation .carousel-control .material-icons,
    .carousel.carousel-full-nagivation .carousel-control .fa {
        display: none; }

    .carousel .carousel-control {
        height: 15%;
        margin: auto; }

    .carousel .carousel-control-prev .material-icons,
    .carousel .carousel-control-next .material-icons {
        z-index: 5;
        display: inline-block;
        font-size: 50px;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        height: 50px;
        margin: auto; }

    .carousel .carousel-indicators {
        bottom: 5px; }
    .carousel .carousel-indicators li,
    .carousel .carousel-indicators .active {
        margin: 11px 10px; }
    .carousel .carousel-indicators li {
        display: inline-block;
        width: 10px;
        height: 10px;
        text-indent: -999px;
        cursor: pointer;
        border: 1px solid #fff;
        border-radius: 10px;
        background: #FFFFFF;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
        border-radius: 2px; }
    .carousel .carousel-indicators .active {
        margin-top: 10px;
        -webkit-transform: scale(1.5);
        transform: scale(1.5);
        box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12), 0 2px 4px -1px rgba(0, 0, 0, 0.2); }

    .carousel .carousel-caption {
        padding-bottom: 45px; }
    .carousel .carousel-caption .material-icons {
        position: relative;
        top: 5px; }

    form {
        margin-bottom: 1.125rem; }
    .card form {
        margin: 0; }
    .navbar form {
        margin-bottom: 0; }
    .navbar form .bmd-form-group {
        display: inline-block;
        padding-top: 0; }
    .navbar form .btn {
        margin-bottom: 0; }

    .form-control {
        background: no-repeat center bottom, center calc(100% - 1px);
        background-size: 0 100%, 100% 100%;
        border: 0;
        height: 36px;
        -webkit-transition: background 0s ease-out;
        transition: background 0s ease-out;
        padding-left: 0;
        padding-right: 0;
        border-radius: 0;
        font-size: 14px; }
    .form-control:focus,
    .bmd-form-group.is-focused .form-control {
        background-size: 100% 100%, 100% 100%;
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
        box-shadow: none; }
    .form-control::-moz-placeholder {
        color: #AAAAAA;
        font-weight: 400;
        font-size: 14px; }
    .form-control:-ms-input-placeholder {
        color: #AAAAAA;
        font-weight: 400;
        font-size: 14px; }
    .form-control::-webkit-input-placeholder {
        color: #AAAAAA;
        font-weight: 400;
        font-size: 14px; }
    .has-white .form-control::-moz-placeholder {
        color: #fff; }
    .has-white .form-control:-ms-input-placeholder {
        color: #fff; }
    .has-white .form-control::-webkit-input-placeholder {
        color: #fff; }

    .bmd-help {
        position: absolute;
        display: none;
        font-size: .8rem;
        font-weight: normal; }
    .bmd-form-group.is-focused .bmd-help {
        display: block; }
    .bmd-help:nth-of-type(2) {
        padding-top: 1rem; }
    .bmd-help + .bmd-help {
        position: relative;
        margin-bottom: 0; }

    .radio label,
    .is-focused .radio label,
    .radio-inline,
    .is-focused
    .radio-inline,
    .checkbox label,
    .is-focused
    .checkbox label,
    .checkbox-inline,
    .is-focused
    .checkbox-inline,
    .switch label,
    .is-focused
    .switch label {
        color: #999999; }
    .radio label label:has(input[type=radio][disabled]), .radio label label:has(input[type=radio][disabled]):hover, .radio label label:has(input[type=radio][disabled]):focus,
    .radio label label:has(input[type=checkbox][disabled]),
    .radio label label:has(input[type=checkbox][disabled]):hover,
    .radio label label:has(input[type=checkbox][disabled]):focus,
    fieldset[disabled] .radio label,
    fieldset[disabled] .radio label:hover,
    fieldset[disabled] .radio label:focus,
    .is-focused .radio label label:has(input[type=radio][disabled]),
    .is-focused .radio label label:has(input[type=radio][disabled]):hover,
    .is-focused .radio label label:has(input[type=radio][disabled]):focus,
    .is-focused .radio label label:has(input[type=checkbox][disabled]),
    .is-focused .radio label label:has(input[type=checkbox][disabled]):hover,
    .is-focused .radio label label:has(input[type=checkbox][disabled]):focus,
    fieldset[disabled]
    .is-focused .radio label,
    fieldset[disabled]
    .is-focused .radio label:hover,
    fieldset[disabled]
    .is-focused .radio label:focus,
    .radio-inline label:has(input[type=radio][disabled]),
    .radio-inline label:has(input[type=radio][disabled]):hover,
    .radio-inline label:has(input[type=radio][disabled]):focus,
    .radio-inline label:has(input[type=checkbox][disabled]),
    .radio-inline label:has(input[type=checkbox][disabled]):hover,
    .radio-inline label:has(input[type=checkbox][disabled]):focus,
    fieldset[disabled]
    .radio-inline,
    fieldset[disabled]
    .radio-inline:hover,
    fieldset[disabled]
    .radio-inline:focus,
    .is-focused
    .radio-inline label:has(input[type=radio][disabled]),
    .is-focused
    .radio-inline label:has(input[type=radio][disabled]):hover,
    .is-focused
    .radio-inline label:has(input[type=radio][disabled]):focus,
    .is-focused
    .radio-inline label:has(input[type=checkbox][disabled]),
    .is-focused
    .radio-inline label:has(input[type=checkbox][disabled]):hover,
    .is-focused
    .radio-inline label:has(input[type=checkbox][disabled]):focus,
    fieldset[disabled]
    .is-focused
    .radio-inline,
    fieldset[disabled]
    .is-focused
    .radio-inline:hover,
    fieldset[disabled]
    .is-focused
    .radio-inline:focus,
    .checkbox label label:has(input[type=radio][disabled]),
    .checkbox label label:has(input[type=radio][disabled]):hover,
    .checkbox label label:has(input[type=radio][disabled]):focus,
    .checkbox label label:has(input[type=checkbox][disabled]),
    .checkbox label label:has(input[type=checkbox][disabled]):hover,
    .checkbox label label:has(input[type=checkbox][disabled]):focus,
    fieldset[disabled]
    .checkbox label,
    fieldset[disabled]
    .checkbox label:hover,
    fieldset[disabled]
    .checkbox label:focus,
    .is-focused
    .checkbox label label:has(input[type=radio][disabled]),
    .is-focused
    .checkbox label label:has(input[type=radio][disabled]):hover,
    .is-focused
    .checkbox label label:has(input[type=radio][disabled]):focus,
    .is-focused
    .checkbox label label:has(input[type=checkbox][disabled]),
    .is-focused
    .checkbox label label:has(input[type=checkbox][disabled]):hover,
    .is-focused
    .checkbox label label:has(input[type=checkbox][disabled]):focus,
    fieldset[disabled]
    .is-focused
    .checkbox label,
    fieldset[disabled]
    .is-focused
    .checkbox label:hover,
    fieldset[disabled]
    .is-focused
    .checkbox label:focus,
    .checkbox-inline label:has(input[type=radio][disabled]),
    .checkbox-inline label:has(input[type=radio][disabled]):hover,
    .checkbox-inline label:has(input[type=radio][disabled]):focus,
    .checkbox-inline label:has(input[type=checkbox][disabled]),
    .checkbox-inline label:has(input[type=checkbox][disabled]):hover,
    .checkbox-inline label:has(input[type=checkbox][disabled]):focus,
    fieldset[disabled]
    .checkbox-inline,
    fieldset[disabled]
    .checkbox-inline:hover,
    fieldset[disabled]
    .checkbox-inline:focus,
    .is-focused
    .checkbox-inline label:has(input[type=radio][disabled]),
    .is-focused
    .checkbox-inline label:has(input[type=radio][disabled]):hover,
    .is-focused
    .checkbox-inline label:has(input[type=radio][disabled]):focus,
    .is-focused
    .checkbox-inline label:has(input[type=checkbox][disabled]),
    .is-focused
    .checkbox-inline label:has(input[type=checkbox][disabled]):hover,
    .is-focused
    .checkbox-inline label:has(input[type=checkbox][disabled]):focus,
    fieldset[disabled]
    .is-focused
    .checkbox-inline,
    fieldset[disabled]
    .is-focused
    .checkbox-inline:hover,
    fieldset[disabled]
    .is-focused
    .checkbox-inline:focus,
    .switch label label:has(input[type=radio][disabled]),
    .switch label label:has(input[type=radio][disabled]):hover,
    .switch label label:has(input[type=radio][disabled]):focus,
    .switch label label:has(input[type=checkbox][disabled]),
    .switch label label:has(input[type=checkbox][disabled]):hover,
    .switch label label:has(input[type=checkbox][disabled]):focus,
    fieldset[disabled]
    .switch label,
    fieldset[disabled]
    .switch label:hover,
    fieldset[disabled]
    .switch label:focus,
    .is-focused
    .switch label label:has(input[type=radio][disabled]),
    .is-focused
    .switch label label:has(input[type=radio][disabled]):hover,
    .is-focused
    .switch label label:has(input[type=radio][disabled]):focus,
    .is-focused
    .switch label label:has(input[type=checkbox][disabled]),
    .is-focused
    .switch label label:has(input[type=checkbox][disabled]):hover,
    .is-focused
    .switch label label:has(input[type=checkbox][disabled]):focus,
    fieldset[disabled]
    .is-focused
    .switch label,
    fieldset[disabled]
    .is-focused
    .switch label:hover,
    fieldset[disabled]
    .is-focused
    .switch label:focus {
        color: #999999; }

    [class^='bmd-label'],
    [class*=' bmd-label'] {
        color: #999999; }

    .form-control,
    .is-focused .form-control {
        background-image: linear-gradient(to top, #9c27b0 2px, rgba(156, 39, 176, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

    .form-control:invalid {
        background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

    .form-control:-moz-read-only {
        background-image: linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

    .form-control:read-only {
        background-image: linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

    fieldset[disabled][disabled] .form-control, .form-control.disabled, .form-control:disabled, .form-control[disabled] {
        background-image: -webkit-gradient(linear, left top, right top, from(#d2d2d2), color-stop(30%, #d2d2d2), color-stop(30%, transparent), to(transparent));
        background-image: linear-gradient(to right, #d2d2d2 0%, #d2d2d2 30%, transparent 30%, transparent 100%);
        background-repeat: repeat-x;
        background-size: 3px 1px; }

    .form-control.form-control-success,
    .is-focused .form-control.form-control-success {
        background-image: linear-gradient(to top, #9c27b0 2px, rgba(156, 39, 176, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjNWNiODVjIiBkPSJNMjMzLjggNjEwYy0xMy4zIDAtMjYtNi0zNC0xNi44TDkwLjUgNDQ4LjhDNzYuMyA0MzAgODAgNDAzLjMgOTguOCAzODljMTguOC0xNC4yIDQ1LjUtMTAuNCA1OS44IDguNGw3MiA5NUw0NTEuMyAyNDJjMTIuNS0yMCAzOC44LTI2LjIgNTguOC0xMy43IDIwIDEyLjQgMjYgMzguNyAxMy43IDU4LjhMMjcwIDU5MGMtNy40IDEyLTIwLjIgMTkuNC0zNC4zIDIwaC0yeiIvPjwvc3ZnPg=="; }

    .form-control.form-control-warning,
    .is-focused .form-control.form-control-warning {
        background-image: linear-gradient(to top, #9c27b0 2px, rgba(156, 39, 176, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZjBhZDRlIiBkPSJNNjAzIDY0MC4ybC0yNzguNS01MDljLTMuOC02LjYtMTAuOC0xMC42LTE4LjUtMTAuNnMtMTQuNyA0LTE4LjUgMTAuNkw5IDY0MC4yYy0zLjcgNi41LTMuNiAxNC40LjIgMjAuOCAzLjggNi41IDEwLjggMTAuNCAxOC4zIDEwLjRoNTU3YzcuNiAwIDE0LjYtNCAxOC40LTEwLjQgMy41LTYuNCAzLjYtMTQuNCAwLTIwLjh6bS0yNjYuNC0zMGgtNjEuMlY1NDloNjEuMnY2MS4yem0wLTEwN2gtNjEuMlYzMDRoNjEuMnYxOTl6Ii8+PC9zdmc+"; }

    .form-control.form-control-danger,
    .is-focused .form-control.form-control-danger {
        background-image: linear-gradient(to top, #9c27b0 2px, rgba(156, 39, 176, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZDk1MzRmIiBkPSJNNDQ3IDU0NC40Yy0xNC40IDE0LjQtMzcuNiAxNC40LTUyIDBsLTg5LTkyLjctODkgOTIuN2MtMTQuNSAxNC40LTM3LjcgMTQuNC01MiAwLTE0LjQtMTQuNC0xNC40LTM3LjYgMC01Mmw5Mi40LTk2LjMtOTIuNC05Ni4zYy0xNC40LTE0LjQtMTQuNC0zNy42IDAtNTJzMzcuNi0xNC4zIDUyIDBsODkgOTIuOCA4OS4yLTkyLjdjMTQuNC0xNC40IDM3LjYtMTQuNCA1MiAwIDE0LjMgMTQuNCAxNC4zIDM3LjYgMCA1MkwzNTQuNiAzOTZsOTIuNCA5Ni40YzE0LjQgMTQuNCAxNC40IDM3LjYgMCA1MnoiLz48L3N2Zz4="; }

    .is-focused .valid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #999999; }

    .is-focused .valid-tooltip {
        position: absolute;
        top: 100%;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: .5rem;
        margin-top: .1rem;
        font-size: .875rem;
        line-height: 1;
        color: #fff;
        background-color: rgba(153, 153, 153, 0.8);
        border-radius: .2rem; }

    .was-validated .is-focused .form-control:valid, .is-focused .form-control.is-valid, .was-validated
    .is-focused .custom-select:valid,
    .is-focused .custom-select.is-valid {
        border-color: #999999; }
    .was-validated .is-focused .form-control:valid:focus, .is-focused .form-control.is-valid:focus, .was-validated
    .is-focused .custom-select:valid:focus,
    .is-focused .custom-select.is-valid:focus {
        border-color: #999999;
        box-shadow: 0 0 0 0.2rem rgba(153, 153, 153, 0.25); }
    .was-validated .is-focused .form-control:valid ~ .valid-feedback,
    .was-validated .is-focused .form-control:valid ~ .valid-tooltip, .is-focused .form-control.is-valid ~ .valid-feedback,
    .is-focused .form-control.is-valid ~ .valid-tooltip, .was-validated
    .is-focused .custom-select:valid ~ .valid-feedback,
    .was-validated
    .is-focused .custom-select:valid ~ .valid-tooltip,
    .is-focused .custom-select.is-valid ~ .valid-feedback,
    .is-focused .custom-select.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .is-focused .form-check-input:valid ~ .form-check-label, .is-focused .form-check-input.is-valid ~ .form-check-label {
        color: #999999; }

    .was-validated .is-focused .form-check-input:valid ~ .valid-feedback,
    .was-validated .is-focused .form-check-input:valid ~ .valid-tooltip, .is-focused .form-check-input.is-valid ~ .valid-feedback,
    .is-focused .form-check-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .is-focused .custom-control-input:valid ~ .custom-control-label, .is-focused .custom-control-input.is-valid ~ .custom-control-label {
        color: #999999; }
    .was-validated .is-focused .custom-control-input:valid ~ .custom-control-label::before, .is-focused .custom-control-input.is-valid ~ .custom-control-label::before {
        background-color: #d9d9d9; }

    .was-validated .is-focused .custom-control-input:valid ~ .valid-feedback,
    .was-validated .is-focused .custom-control-input:valid ~ .valid-tooltip, .is-focused .custom-control-input.is-valid ~ .valid-feedback,
    .is-focused .custom-control-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .is-focused .custom-control-input:valid:checked ~ .custom-control-label::before, .is-focused .custom-control-input.is-valid:checked ~ .custom-control-label::before {
        background-color: #b3b3b3; }

    .was-validated .is-focused .custom-control-input:valid:focus ~ .custom-control-label::before, .is-focused .custom-control-input.is-valid:focus ~ .custom-control-label::before {
        box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(153, 153, 153, 0.25); }

    .was-validated .is-focused .custom-file-input:valid ~ .custom-file-label, .is-focused .custom-file-input.is-valid ~ .custom-file-label {
        border-color: #999999; }
    .was-validated .is-focused .custom-file-input:valid ~ .custom-file-label::before, .is-focused .custom-file-input.is-valid ~ .custom-file-label::before {
        border-color: inherit; }

    .was-validated .is-focused .custom-file-input:valid ~ .valid-feedback,
    .was-validated .is-focused .custom-file-input:valid ~ .valid-tooltip, .is-focused .custom-file-input.is-valid ~ .valid-feedback,
    .is-focused .custom-file-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .is-focused .custom-file-input:valid:focus ~ .custom-file-label, .is-focused .custom-file-input.is-valid:focus ~ .custom-file-label {
        box-shadow: 0 0 0 0.2rem rgba(153, 153, 153, 0.25); }

    .is-focused [class^='bmd-label'],
    .is-focused [class*=' bmd-label'] {
        color: #9c27b0; }

    .is-focused .bmd-label-placeholder {
        color: #999999; }

    .is-focused .form-control {
        border-color: #d2d2d2; }

    .is-focused .bmd-help {
        color: #555; }

    .has-success [class^='bmd-label'],
    .has-success [class*=' bmd-label'] {
        color: #4caf50; }

    .has-success .form-control,
    .is-focused .has-success .form-control {
        background-image: linear-gradient(to top, #4caf50 2px, rgba(76, 175, 80, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

    .has-success .form-control:invalid {
        background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

    .has-success .form-control:-moz-read-only {
        background-image: linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

    .has-success .form-control:read-only {
        background-image: linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

    fieldset[disabled][disabled] .has-success .form-control, .has-success .form-control.disabled, .has-success .form-control:disabled, .has-success .form-control[disabled] {
        background-image: -webkit-gradient(linear, left top, right top, from(#d2d2d2), color-stop(30%, #d2d2d2), color-stop(30%, transparent), to(transparent));
        background-image: linear-gradient(to right, #d2d2d2 0%, #d2d2d2 30%, transparent 30%, transparent 100%);
        background-repeat: repeat-x;
        background-size: 3px 1px; }

    .has-success .form-control.form-control-success,
    .is-focused .has-success .form-control.form-control-success {
        background-image: linear-gradient(to top, #4caf50 2px, rgba(76, 175, 80, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjNWNiODVjIiBkPSJNMjMzLjggNjEwYy0xMy4zIDAtMjYtNi0zNC0xNi44TDkwLjUgNDQ4LjhDNzYuMyA0MzAgODAgNDAzLjMgOTguOCAzODljMTguOC0xNC4yIDQ1LjUtMTAuNCA1OS44IDguNGw3MiA5NUw0NTEuMyAyNDJjMTIuNS0yMCAzOC44LTI2LjIgNTguOC0xMy43IDIwIDEyLjQgMjYgMzguNyAxMy43IDU4LjhMMjcwIDU5MGMtNy40IDEyLTIwLjIgMTkuNC0zNC4zIDIwaC0yeiIvPjwvc3ZnPg=="; }

    .has-success .form-control.form-control-warning,
    .is-focused .has-success .form-control.form-control-warning {
        background-image: linear-gradient(to top, #4caf50 2px, rgba(76, 175, 80, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZjBhZDRlIiBkPSJNNjAzIDY0MC4ybC0yNzguNS01MDljLTMuOC02LjYtMTAuOC0xMC42LTE4LjUtMTAuNnMtMTQuNyA0LTE4LjUgMTAuNkw5IDY0MC4yYy0zLjcgNi41LTMuNiAxNC40LjIgMjAuOCAzLjggNi41IDEwLjggMTAuNCAxOC4zIDEwLjRoNTU3YzcuNiAwIDE0LjYtNCAxOC40LTEwLjQgMy41LTYuNCAzLjYtMTQuNCAwLTIwLjh6bS0yNjYuNC0zMGgtNjEuMlY1NDloNjEuMnY2MS4yem0wLTEwN2gtNjEuMlYzMDRoNjEuMnYxOTl6Ii8+PC9zdmc+"; }

    .has-success .form-control.form-control-danger,
    .is-focused .has-success .form-control.form-control-danger {
        background-image: linear-gradient(to top, #4caf50 2px, rgba(76, 175, 80, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZDk1MzRmIiBkPSJNNDQ3IDU0NC40Yy0xNC40IDE0LjQtMzcuNiAxNC40LTUyIDBsLTg5LTkyLjctODkgOTIuN2MtMTQuNSAxNC40LTM3LjcgMTQuNC01MiAwLTE0LjQtMTQuNC0xNC40LTM3LjYgMC01Mmw5Mi40LTk2LjMtOTIuNC05Ni4zYy0xNC40LTE0LjQtMTQuNC0zNy42IDAtNTJzMzcuNi0xNC4zIDUyIDBsODkgOTIuOCA4OS4yLTkyLjdjMTQuNC0xNC40IDM3LjYtMTQuNCA1MiAwIDE0LjMgMTQuNCAxNC4zIDM3LjYgMCA1MkwzNTQuNiAzOTZsOTIuNCA5Ni40YzE0LjQgMTQuNCAxNC40IDM3LjYgMCA1MnoiLz48L3N2Zz4="; }

    .has-success .is-focused .valid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #4caf50; }

    .has-success .is-focused .valid-tooltip {
        position: absolute;
        top: 100%;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: .5rem;
        margin-top: .1rem;
        font-size: .875rem;
        line-height: 1;
        color: #fff;
        background-color: rgba(76, 175, 80, 0.8);
        border-radius: .2rem; }

    .was-validated .has-success .is-focused .form-control:valid, .has-success .is-focused .form-control.is-valid, .was-validated
    .has-success .is-focused .custom-select:valid,
    .has-success .is-focused .custom-select.is-valid {
        border-color: #4caf50; }
    .was-validated .has-success .is-focused .form-control:valid:focus, .has-success .is-focused .form-control.is-valid:focus, .was-validated
    .has-success .is-focused .custom-select:valid:focus,
    .has-success .is-focused .custom-select.is-valid:focus {
        border-color: #4caf50;
        box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25); }
    .was-validated .has-success .is-focused .form-control:valid ~ .valid-feedback,
    .was-validated .has-success .is-focused .form-control:valid ~ .valid-tooltip, .has-success .is-focused .form-control.is-valid ~ .valid-feedback,
    .has-success .is-focused .form-control.is-valid ~ .valid-tooltip, .was-validated
    .has-success .is-focused .custom-select:valid ~ .valid-feedback,
    .was-validated
    .has-success .is-focused .custom-select:valid ~ .valid-tooltip,
    .has-success .is-focused .custom-select.is-valid ~ .valid-feedback,
    .has-success .is-focused .custom-select.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .has-success .is-focused .form-check-input:valid ~ .form-check-label, .has-success .is-focused .form-check-input.is-valid ~ .form-check-label {
        color: #4caf50; }

    .was-validated .has-success .is-focused .form-check-input:valid ~ .valid-feedback,
    .was-validated .has-success .is-focused .form-check-input:valid ~ .valid-tooltip, .has-success .is-focused .form-check-input.is-valid ~ .valid-feedback,
    .has-success .is-focused .form-check-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .has-success .is-focused .custom-control-input:valid ~ .custom-control-label, .has-success .is-focused .custom-control-input.is-valid ~ .custom-control-label {
        color: #4caf50; }
    .was-validated .has-success .is-focused .custom-control-input:valid ~ .custom-control-label::before, .has-success .is-focused .custom-control-input.is-valid ~ .custom-control-label::before {
        background-color: #a3d7a5; }

    .was-validated .has-success .is-focused .custom-control-input:valid ~ .valid-feedback,
    .was-validated .has-success .is-focused .custom-control-input:valid ~ .valid-tooltip, .has-success .is-focused .custom-control-input.is-valid ~ .valid-feedback,
    .has-success .is-focused .custom-control-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .has-success .is-focused .custom-control-input:valid:checked ~ .custom-control-label::before, .has-success .is-focused .custom-control-input.is-valid:checked ~ .custom-control-label::before {
        background-color: #6ec071; }

    .was-validated .has-success .is-focused .custom-control-input:valid:focus ~ .custom-control-label::before, .has-success .is-focused .custom-control-input.is-valid:focus ~ .custom-control-label::before {
        box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(76, 175, 80, 0.25); }

    .was-validated .has-success .is-focused .custom-file-input:valid ~ .custom-file-label, .has-success .is-focused .custom-file-input.is-valid ~ .custom-file-label {
        border-color: #4caf50; }
    .was-validated .has-success .is-focused .custom-file-input:valid ~ .custom-file-label::before, .has-success .is-focused .custom-file-input.is-valid ~ .custom-file-label::before {
        border-color: inherit; }

    .was-validated .has-success .is-focused .custom-file-input:valid ~ .valid-feedback,
    .was-validated .has-success .is-focused .custom-file-input:valid ~ .valid-tooltip, .has-success .is-focused .custom-file-input.is-valid ~ .valid-feedback,
    .has-success .is-focused .custom-file-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .has-success .is-focused .custom-file-input:valid:focus ~ .custom-file-label, .has-success .is-focused .custom-file-input.is-valid:focus ~ .custom-file-label {
        box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25); }

    .has-success .is-focused [class^='bmd-label'],
    .has-success .is-focused [class*=' bmd-label'] {
        color: #4caf50; }

    .has-success .is-focused .bmd-label-placeholder {
        color: #4caf50; }

    .has-success .is-focused .form-control {
        border-color: #4caf50; }

    .has-success .is-focused .bmd-help {
        color: #555; }

    .has-info [class^='bmd-label'],
    .has-info [class*=' bmd-label'] {
        color: #00bcd4; }

    .has-info .form-control,
    .is-focused .has-info .form-control {
        background-image: linear-gradient(to top, #00bcd4 2px, rgba(0, 188, 212, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

    .has-info .form-control:invalid {
        background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

    .has-info .form-control:-moz-read-only {
        background-image: linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

    .has-info .form-control:read-only {
        background-image: linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

    fieldset[disabled][disabled] .has-info .form-control, .has-info .form-control.disabled, .has-info .form-control:disabled, .has-info .form-control[disabled] {
        background-image: -webkit-gradient(linear, left top, right top, from(#d2d2d2), color-stop(30%, #d2d2d2), color-stop(30%, transparent), to(transparent));
        background-image: linear-gradient(to right, #d2d2d2 0%, #d2d2d2 30%, transparent 30%, transparent 100%);
        background-repeat: repeat-x;
        background-size: 3px 1px; }

    .has-info .form-control.form-control-success,
    .is-focused .has-info .form-control.form-control-success {
        background-image: linear-gradient(to top, #00bcd4 2px, rgba(0, 188, 212, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjNWNiODVjIiBkPSJNMjMzLjggNjEwYy0xMy4zIDAtMjYtNi0zNC0xNi44TDkwLjUgNDQ4LjhDNzYuMyA0MzAgODAgNDAzLjMgOTguOCAzODljMTguOC0xNC4yIDQ1LjUtMTAuNCA1OS44IDguNGw3MiA5NUw0NTEuMyAyNDJjMTIuNS0yMCAzOC44LTI2LjIgNTguOC0xMy43IDIwIDEyLjQgMjYgMzguNyAxMy43IDU4LjhMMjcwIDU5MGMtNy40IDEyLTIwLjIgMTkuNC0zNC4zIDIwaC0yeiIvPjwvc3ZnPg=="; }

    .has-info .form-control.form-control-warning,
    .is-focused .has-info .form-control.form-control-warning {
        background-image: linear-gradient(to top, #00bcd4 2px, rgba(0, 188, 212, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZjBhZDRlIiBkPSJNNjAzIDY0MC4ybC0yNzguNS01MDljLTMuOC02LjYtMTAuOC0xMC42LTE4LjUtMTAuNnMtMTQuNyA0LTE4LjUgMTAuNkw5IDY0MC4yYy0zLjcgNi41LTMuNiAxNC40LjIgMjAuOCAzLjggNi41IDEwLjggMTAuNCAxOC4zIDEwLjRoNTU3YzcuNiAwIDE0LjYtNCAxOC40LTEwLjQgMy41LTYuNCAzLjYtMTQuNCAwLTIwLjh6bS0yNjYuNC0zMGgtNjEuMlY1NDloNjEuMnY2MS4yem0wLTEwN2gtNjEuMlYzMDRoNjEuMnYxOTl6Ii8+PC9zdmc+"; }

    .has-info .form-control.form-control-danger,
    .is-focused .has-info .form-control.form-control-danger {
        background-image: linear-gradient(to top, #00bcd4 2px, rgba(0, 188, 212, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZDk1MzRmIiBkPSJNNDQ3IDU0NC40Yy0xNC40IDE0LjQtMzcuNiAxNC40LTUyIDBsLTg5LTkyLjctODkgOTIuN2MtMTQuNSAxNC40LTM3LjcgMTQuNC01MiAwLTE0LjQtMTQuNC0xNC40LTM3LjYgMC01Mmw5Mi40LTk2LjMtOTIuNC05Ni4zYy0xNC40LTE0LjQtMTQuNC0zNy42IDAtNTJzMzcuNi0xNC4zIDUyIDBsODkgOTIuOCA4OS4yLTkyLjdjMTQuNC0xNC40IDM3LjYtMTQuNCA1MiAwIDE0LjMgMTQuNCAxNC4zIDM3LjYgMCA1MkwzNTQuNiAzOTZsOTIuNCA5Ni40YzE0LjQgMTQuNCAxNC40IDM3LjYgMCA1MnoiLz48L3N2Zz4="; }

    .has-info .is-focused .valid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #00bcd4; }

    .has-info .is-focused .valid-tooltip {
        position: absolute;
        top: 100%;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: .5rem;
        margin-top: .1rem;
        font-size: .875rem;
        line-height: 1;
        color: #fff;
        background-color: rgba(0, 188, 212, 0.8);
        border-radius: .2rem; }

    .was-validated .has-info .is-focused .form-control:valid, .has-info .is-focused .form-control.is-valid, .was-validated
    .has-info .is-focused .custom-select:valid,
    .has-info .is-focused .custom-select.is-valid {
        border-color: #00bcd4; }
    .was-validated .has-info .is-focused .form-control:valid:focus, .has-info .is-focused .form-control.is-valid:focus, .was-validated
    .has-info .is-focused .custom-select:valid:focus,
    .has-info .is-focused .custom-select.is-valid:focus {
        border-color: #00bcd4;
        box-shadow: 0 0 0 0.2rem rgba(0, 188, 212, 0.25); }
    .was-validated .has-info .is-focused .form-control:valid ~ .valid-feedback,
    .was-validated .has-info .is-focused .form-control:valid ~ .valid-tooltip, .has-info .is-focused .form-control.is-valid ~ .valid-feedback,
    .has-info .is-focused .form-control.is-valid ~ .valid-tooltip, .was-validated
    .has-info .is-focused .custom-select:valid ~ .valid-feedback,
    .was-validated
    .has-info .is-focused .custom-select:valid ~ .valid-tooltip,
    .has-info .is-focused .custom-select.is-valid ~ .valid-feedback,
    .has-info .is-focused .custom-select.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .has-info .is-focused .form-check-input:valid ~ .form-check-label, .has-info .is-focused .form-check-input.is-valid ~ .form-check-label {
        color: #00bcd4; }

    .was-validated .has-info .is-focused .form-check-input:valid ~ .valid-feedback,
    .was-validated .has-info .is-focused .form-check-input:valid ~ .valid-tooltip, .has-info .is-focused .form-check-input.is-valid ~ .valid-feedback,
    .has-info .is-focused .form-check-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .has-info .is-focused .custom-control-input:valid ~ .custom-control-label, .has-info .is-focused .custom-control-input.is-valid ~ .custom-control-label {
        color: #00bcd4; }
    .was-validated .has-info .is-focused .custom-control-input:valid ~ .custom-control-label::before, .has-info .is-focused .custom-control-input.is-valid ~ .custom-control-label::before {
        background-color: #55ecff; }

    .was-validated .has-info .is-focused .custom-control-input:valid ~ .valid-feedback,
    .was-validated .has-info .is-focused .custom-control-input:valid ~ .valid-tooltip, .has-info .is-focused .custom-control-input.is-valid ~ .valid-feedback,
    .has-info .is-focused .custom-control-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .has-info .is-focused .custom-control-input:valid:checked ~ .custom-control-label::before, .has-info .is-focused .custom-control-input.is-valid:checked ~ .custom-control-label::before {
        background-color: #08e3ff; }

    .was-validated .has-info .is-focused .custom-control-input:valid:focus ~ .custom-control-label::before, .has-info .is-focused .custom-control-input.is-valid:focus ~ .custom-control-label::before {
        box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(0, 188, 212, 0.25); }

    .was-validated .has-info .is-focused .custom-file-input:valid ~ .custom-file-label, .has-info .is-focused .custom-file-input.is-valid ~ .custom-file-label {
        border-color: #00bcd4; }
    .was-validated .has-info .is-focused .custom-file-input:valid ~ .custom-file-label::before, .has-info .is-focused .custom-file-input.is-valid ~ .custom-file-label::before {
        border-color: inherit; }

    .was-validated .has-info .is-focused .custom-file-input:valid ~ .valid-feedback,
    .was-validated .has-info .is-focused .custom-file-input:valid ~ .valid-tooltip, .has-info .is-focused .custom-file-input.is-valid ~ .valid-feedback,
    .has-info .is-focused .custom-file-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .has-info .is-focused .custom-file-input:valid:focus ~ .custom-file-label, .has-info .is-focused .custom-file-input.is-valid:focus ~ .custom-file-label {
        box-shadow: 0 0 0 0.2rem rgba(0, 188, 212, 0.25); }

    .has-info .is-focused [class^='bmd-label'],
    .has-info .is-focused [class*=' bmd-label'] {
        color: #00bcd4; }

    .has-info .is-focused .bmd-label-placeholder {
        color: #00bcd4; }

    .has-info .is-focused .form-control {
        border-color: #00bcd4; }

    .has-info .is-focused .bmd-help {
        color: #555; }

    .has-white [class^='bmd-label'],
    .has-white [class*=' bmd-label'] {
        color: #fff; }

    .has-white .form-control,
    .is-focused .has-white .form-control {
        background-image: linear-gradient(to top, #fff 2px, rgba(255, 255, 255, 0) 2px), linear-gradient(to top, #FFFFFF 1px, rgba(255, 255, 255, 0) 1px); }

    .has-white .form-control:invalid {
        background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #FFFFFF 1px, rgba(255, 255, 255, 0) 1px); }

    .has-white .form-control:-moz-read-only {
        background-image: linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), linear-gradient(to top, #FFFFFF 1px, rgba(255, 255, 255, 0) 1px); }

    .has-white .form-control:read-only {
        background-image: linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), linear-gradient(to top, #FFFFFF 1px, rgba(255, 255, 255, 0) 1px); }

    fieldset[disabled][disabled] .has-white .form-control, .has-white .form-control.disabled, .has-white .form-control:disabled, .has-white .form-control[disabled] {
        background-image: -webkit-gradient(linear, left top, right top, from(#FFFFFF), color-stop(30%, #FFFFFF), color-stop(30%, transparent), to(transparent));
        background-image: linear-gradient(to right, #FFFFFF 0%, #FFFFFF 30%, transparent 30%, transparent 100%);
        background-repeat: repeat-x;
        background-size: 3px 1px; }

    .has-white .form-control.form-control-success,
    .is-focused .has-white .form-control.form-control-success {
        background-image: linear-gradient(to top, #fff 2px, rgba(255, 255, 255, 0) 2px), linear-gradient(to top, #FFFFFF 1px, rgba(255, 255, 255, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjNWNiODVjIiBkPSJNMjMzLjggNjEwYy0xMy4zIDAtMjYtNi0zNC0xNi44TDkwLjUgNDQ4LjhDNzYuMyA0MzAgODAgNDAzLjMgOTguOCAzODljMTguOC0xNC4yIDQ1LjUtMTAuNCA1OS44IDguNGw3MiA5NUw0NTEuMyAyNDJjMTIuNS0yMCAzOC44LTI2LjIgNTguOC0xMy43IDIwIDEyLjQgMjYgMzguNyAxMy43IDU4LjhMMjcwIDU5MGMtNy40IDEyLTIwLjIgMTkuNC0zNC4zIDIwaC0yeiIvPjwvc3ZnPg=="; }

    .has-white .form-control.form-control-warning,
    .is-focused .has-white .form-control.form-control-warning {
        background-image: linear-gradient(to top, #fff 2px, rgba(255, 255, 255, 0) 2px), linear-gradient(to top, #FFFFFF 1px, rgba(255, 255, 255, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZjBhZDRlIiBkPSJNNjAzIDY0MC4ybC0yNzguNS01MDljLTMuOC02LjYtMTAuOC0xMC42LTE4LjUtMTAuNnMtMTQuNyA0LTE4LjUgMTAuNkw5IDY0MC4yYy0zLjcgNi41LTMuNiAxNC40LjIgMjAuOCAzLjggNi41IDEwLjggMTAuNCAxOC4zIDEwLjRoNTU3YzcuNiAwIDE0LjYtNCAxOC40LTEwLjQgMy41LTYuNCAzLjYtMTQuNCAwLTIwLjh6bS0yNjYuNC0zMGgtNjEuMlY1NDloNjEuMnY2MS4yem0wLTEwN2gtNjEuMlYzMDRoNjEuMnYxOTl6Ii8+PC9zdmc+"; }

    .has-white .form-control.form-control-danger,
    .is-focused .has-white .form-control.form-control-danger {
        background-image: linear-gradient(to top, #fff 2px, rgba(255, 255, 255, 0) 2px), linear-gradient(to top, #FFFFFF 1px, rgba(255, 255, 255, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZDk1MzRmIiBkPSJNNDQ3IDU0NC40Yy0xNC40IDE0LjQtMzcuNiAxNC40LTUyIDBsLTg5LTkyLjctODkgOTIuN2MtMTQuNSAxNC40LTM3LjcgMTQuNC01MiAwLTE0LjQtMTQuNC0xNC40LTM3LjYgMC01Mmw5Mi40LTk2LjMtOTIuNC05Ni4zYy0xNC40LTE0LjQtMTQuNC0zNy42IDAtNTJzMzcuNi0xNC4zIDUyIDBsODkgOTIuOCA4OS4yLTkyLjdjMTQuNC0xNC40IDM3LjYtMTQuNCA1MiAwIDE0LjMgMTQuNCAxNC4zIDM3LjYgMCA1MkwzNTQuNiAzOTZsOTIuNCA5Ni40YzE0LjQgMTQuNCAxNC40IDM3LjYgMCA1MnoiLz48L3N2Zz4="; }

    .has-white .is-focused .valid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #fff; }

    .has-white .is-focused .valid-tooltip {
        position: absolute;
        top: 100%;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: .5rem;
        margin-top: .1rem;
        font-size: .875rem;
        line-height: 1;
        color: #fff;
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: .2rem; }

    .was-validated .has-white .is-focused .form-control:valid, .has-white .is-focused .form-control.is-valid, .was-validated
    .has-white .is-focused .custom-select:valid,
    .has-white .is-focused .custom-select.is-valid {
        border-color: #fff; }
    .was-validated .has-white .is-focused .form-control:valid:focus, .has-white .is-focused .form-control.is-valid:focus, .was-validated
    .has-white .is-focused .custom-select:valid:focus,
    .has-white .is-focused .custom-select.is-valid:focus {
        border-color: #fff;
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.25); }
    .was-validated .has-white .is-focused .form-control:valid ~ .valid-feedback,
    .was-validated .has-white .is-focused .form-control:valid ~ .valid-tooltip, .has-white .is-focused .form-control.is-valid ~ .valid-feedback,
    .has-white .is-focused .form-control.is-valid ~ .valid-tooltip, .was-validated
    .has-white .is-focused .custom-select:valid ~ .valid-feedback,
    .was-validated
    .has-white .is-focused .custom-select:valid ~ .valid-tooltip,
    .has-white .is-focused .custom-select.is-valid ~ .valid-feedback,
    .has-white .is-focused .custom-select.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .has-white .is-focused .form-check-input:valid ~ .form-check-label, .has-white .is-focused .form-check-input.is-valid ~ .form-check-label {
        color: #fff; }

    .was-validated .has-white .is-focused .form-check-input:valid ~ .valid-feedback,
    .was-validated .has-white .is-focused .form-check-input:valid ~ .valid-tooltip, .has-white .is-focused .form-check-input.is-valid ~ .valid-feedback,
    .has-white .is-focused .form-check-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .has-white .is-focused .custom-control-input:valid ~ .custom-control-label, .has-white .is-focused .custom-control-input.is-valid ~ .custom-control-label {
        color: #fff; }
    .was-validated .has-white .is-focused .custom-control-input:valid ~ .custom-control-label::before, .has-white .is-focused .custom-control-input.is-valid ~ .custom-control-label::before {
        background-color: white; }

    .was-validated .has-white .is-focused .custom-control-input:valid ~ .valid-feedback,
    .was-validated .has-white .is-focused .custom-control-input:valid ~ .valid-tooltip, .has-white .is-focused .custom-control-input.is-valid ~ .valid-feedback,
    .has-white .is-focused .custom-control-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .has-white .is-focused .custom-control-input:valid:checked ~ .custom-control-label::before, .has-white .is-focused .custom-control-input.is-valid:checked ~ .custom-control-label::before {
        background-color: white; }

    .was-validated .has-white .is-focused .custom-control-input:valid:focus ~ .custom-control-label::before, .has-white .is-focused .custom-control-input.is-valid:focus ~ .custom-control-label::before {
        box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(255, 255, 255, 0.25); }

    .was-validated .has-white .is-focused .custom-file-input:valid ~ .custom-file-label, .has-white .is-focused .custom-file-input.is-valid ~ .custom-file-label {
        border-color: #fff; }
    .was-validated .has-white .is-focused .custom-file-input:valid ~ .custom-file-label::before, .has-white .is-focused .custom-file-input.is-valid ~ .custom-file-label::before {
        border-color: inherit; }

    .was-validated .has-white .is-focused .custom-file-input:valid ~ .valid-feedback,
    .was-validated .has-white .is-focused .custom-file-input:valid ~ .valid-tooltip, .has-white .is-focused .custom-file-input.is-valid ~ .valid-feedback,
    .has-white .is-focused .custom-file-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .has-white .is-focused .custom-file-input:valid:focus ~ .custom-file-label, .has-white .is-focused .custom-file-input.is-valid:focus ~ .custom-file-label {
        box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.25); }

    .has-white .is-focused [class^='bmd-label'],
    .has-white .is-focused [class*=' bmd-label'] {
        color: #fff; }

    .has-white .is-focused .bmd-label-placeholder {
        color: #fff; }

    .has-white .is-focused .form-control {
        border-color: #fff; }

    .has-white .is-focused .bmd-help {
        color: #555; }

    .has-white .form-control:focus {
        color: #fff; }

    .has-warning [class^='bmd-label'],
    .has-warning [class*=' bmd-label'] {
        color: #ff9800; }

    .has-warning .form-control,
    .is-focused .has-warning .form-control {
        background-image: linear-gradient(to top, #ff9800 2px, rgba(255, 152, 0, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

    .has-warning .form-control:invalid {
        background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

    .has-warning .form-control:-moz-read-only {
        background-image: linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

    .has-warning .form-control:read-only {
        background-image: linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

    fieldset[disabled][disabled] .has-warning .form-control, .has-warning .form-control.disabled, .has-warning .form-control:disabled, .has-warning .form-control[disabled] {
        background-image: -webkit-gradient(linear, left top, right top, from(#d2d2d2), color-stop(30%, #d2d2d2), color-stop(30%, transparent), to(transparent));
        background-image: linear-gradient(to right, #d2d2d2 0%, #d2d2d2 30%, transparent 30%, transparent 100%);
        background-repeat: repeat-x;
        background-size: 3px 1px; }

    .has-warning .form-control.form-control-success,
    .is-focused .has-warning .form-control.form-control-success {
        background-image: linear-gradient(to top, #ff9800 2px, rgba(255, 152, 0, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjNWNiODVjIiBkPSJNMjMzLjggNjEwYy0xMy4zIDAtMjYtNi0zNC0xNi44TDkwLjUgNDQ4LjhDNzYuMyA0MzAgODAgNDAzLjMgOTguOCAzODljMTguOC0xNC4yIDQ1LjUtMTAuNCA1OS44IDguNGw3MiA5NUw0NTEuMyAyNDJjMTIuNS0yMCAzOC44LTI2LjIgNTguOC0xMy43IDIwIDEyLjQgMjYgMzguNyAxMy43IDU4LjhMMjcwIDU5MGMtNy40IDEyLTIwLjIgMTkuNC0zNC4zIDIwaC0yeiIvPjwvc3ZnPg=="; }

    .has-warning .form-control.form-control-warning,
    .is-focused .has-warning .form-control.form-control-warning {
        background-image: linear-gradient(to top, #ff9800 2px, rgba(255, 152, 0, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZjBhZDRlIiBkPSJNNjAzIDY0MC4ybC0yNzguNS01MDljLTMuOC02LjYtMTAuOC0xMC42LTE4LjUtMTAuNnMtMTQuNyA0LTE4LjUgMTAuNkw5IDY0MC4yYy0zLjcgNi41LTMuNiAxNC40LjIgMjAuOCAzLjggNi41IDEwLjggMTAuNCAxOC4zIDEwLjRoNTU3YzcuNiAwIDE0LjYtNCAxOC40LTEwLjQgMy41LTYuNCAzLjYtMTQuNCAwLTIwLjh6bS0yNjYuNC0zMGgtNjEuMlY1NDloNjEuMnY2MS4yem0wLTEwN2gtNjEuMlYzMDRoNjEuMnYxOTl6Ii8+PC9zdmc+"; }

    .has-warning .form-control.form-control-danger,
    .is-focused .has-warning .form-control.form-control-danger {
        background-image: linear-gradient(to top, #ff9800 2px, rgba(255, 152, 0, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZDk1MzRmIiBkPSJNNDQ3IDU0NC40Yy0xNC40IDE0LjQtMzcuNiAxNC40LTUyIDBsLTg5LTkyLjctODkgOTIuN2MtMTQuNSAxNC40LTM3LjcgMTQuNC01MiAwLTE0LjQtMTQuNC0xNC40LTM3LjYgMC01Mmw5Mi40LTk2LjMtOTIuNC05Ni4zYy0xNC40LTE0LjQtMTQuNC0zNy42IDAtNTJzMzcuNi0xNC4zIDUyIDBsODkgOTIuOCA4OS4yLTkyLjdjMTQuNC0xNC40IDM3LjYtMTQuNCA1MiAwIDE0LjMgMTQuNCAxNC4zIDM3LjYgMCA1MkwzNTQuNiAzOTZsOTIuNCA5Ni40YzE0LjQgMTQuNCAxNC40IDM3LjYgMCA1MnoiLz48L3N2Zz4="; }

    .has-warning .is-focused .valid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #ff9800; }

    .has-warning .is-focused .valid-tooltip {
        position: absolute;
        top: 100%;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: .5rem;
        margin-top: .1rem;
        font-size: .875rem;
        line-height: 1;
        color: #fff;
        background-color: rgba(255, 152, 0, 0.8);
        border-radius: .2rem; }

    .was-validated .has-warning .is-focused .form-control:valid, .has-warning .is-focused .form-control.is-valid, .was-validated
    .has-warning .is-focused .custom-select:valid,
    .has-warning .is-focused .custom-select.is-valid {
        border-color: #ff9800; }
    .was-validated .has-warning .is-focused .form-control:valid:focus, .has-warning .is-focused .form-control.is-valid:focus, .was-validated
    .has-warning .is-focused .custom-select:valid:focus,
    .has-warning .is-focused .custom-select.is-valid:focus {
        border-color: #ff9800;
        box-shadow: 0 0 0 0.2rem rgba(255, 152, 0, 0.25); }
    .was-validated .has-warning .is-focused .form-control:valid ~ .valid-feedback,
    .was-validated .has-warning .is-focused .form-control:valid ~ .valid-tooltip, .has-warning .is-focused .form-control.is-valid ~ .valid-feedback,
    .has-warning .is-focused .form-control.is-valid ~ .valid-tooltip, .was-validated
    .has-warning .is-focused .custom-select:valid ~ .valid-feedback,
    .was-validated
    .has-warning .is-focused .custom-select:valid ~ .valid-tooltip,
    .has-warning .is-focused .custom-select.is-valid ~ .valid-feedback,
    .has-warning .is-focused .custom-select.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .has-warning .is-focused .form-check-input:valid ~ .form-check-label, .has-warning .is-focused .form-check-input.is-valid ~ .form-check-label {
        color: #ff9800; }

    .was-validated .has-warning .is-focused .form-check-input:valid ~ .valid-feedback,
    .was-validated .has-warning .is-focused .form-check-input:valid ~ .valid-tooltip, .has-warning .is-focused .form-check-input.is-valid ~ .valid-feedback,
    .has-warning .is-focused .form-check-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .has-warning .is-focused .custom-control-input:valid ~ .custom-control-label, .has-warning .is-focused .custom-control-input.is-valid ~ .custom-control-label {
        color: #ff9800; }
    .was-validated .has-warning .is-focused .custom-control-input:valid ~ .custom-control-label::before, .has-warning .is-focused .custom-control-input.is-valid ~ .custom-control-label::before {
        background-color: #ffcc80; }

    .was-validated .has-warning .is-focused .custom-control-input:valid ~ .valid-feedback,
    .was-validated .has-warning .is-focused .custom-control-input:valid ~ .valid-tooltip, .has-warning .is-focused .custom-control-input.is-valid ~ .valid-feedback,
    .has-warning .is-focused .custom-control-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .has-warning .is-focused .custom-control-input:valid:checked ~ .custom-control-label::before, .has-warning .is-focused .custom-control-input.is-valid:checked ~ .custom-control-label::before {
        background-color: #ffad33; }

    .was-validated .has-warning .is-focused .custom-control-input:valid:focus ~ .custom-control-label::before, .has-warning .is-focused .custom-control-input.is-valid:focus ~ .custom-control-label::before {
        box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(255, 152, 0, 0.25); }

    .was-validated .has-warning .is-focused .custom-file-input:valid ~ .custom-file-label, .has-warning .is-focused .custom-file-input.is-valid ~ .custom-file-label {
        border-color: #ff9800; }
    .was-validated .has-warning .is-focused .custom-file-input:valid ~ .custom-file-label::before, .has-warning .is-focused .custom-file-input.is-valid ~ .custom-file-label::before {
        border-color: inherit; }

    .was-validated .has-warning .is-focused .custom-file-input:valid ~ .valid-feedback,
    .was-validated .has-warning .is-focused .custom-file-input:valid ~ .valid-tooltip, .has-warning .is-focused .custom-file-input.is-valid ~ .valid-feedback,
    .has-warning .is-focused .custom-file-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .has-warning .is-focused .custom-file-input:valid:focus ~ .custom-file-label, .has-warning .is-focused .custom-file-input.is-valid:focus ~ .custom-file-label {
        box-shadow: 0 0 0 0.2rem rgba(255, 152, 0, 0.25); }

    .has-warning .is-focused [class^='bmd-label'],
    .has-warning .is-focused [class*=' bmd-label'] {
        color: #ff9800; }

    .has-warning .is-focused .bmd-label-placeholder {
        color: #ff9800; }

    .has-warning .is-focused .form-control {
        border-color: #ff9800; }

    .has-warning .is-focused .bmd-help {
        color: #555; }

    .has-danger [class^='bmd-label'],
    .has-danger [class*=' bmd-label'] {
        color: #f44336; }

    .has-danger .form-control,
    .is-focused .has-danger .form-control {
        background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

    .has-danger .form-control:invalid {
        background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

    .has-danger .form-control:-moz-read-only {
        background-image: linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

    .has-danger .form-control:read-only {
        background-image: linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

    fieldset[disabled][disabled] .has-danger .form-control, .has-danger .form-control.disabled, .has-danger .form-control:disabled, .has-danger .form-control[disabled] {
        background-image: -webkit-gradient(linear, left top, right top, from(#d2d2d2), color-stop(30%, #d2d2d2), color-stop(30%, transparent), to(transparent));
        background-image: linear-gradient(to right, #d2d2d2 0%, #d2d2d2 30%, transparent 30%, transparent 100%);
        background-repeat: repeat-x;
        background-size: 3px 1px; }

    .has-danger .form-control.form-control-success,
    .is-focused .has-danger .form-control.form-control-success {
        background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjNWNiODVjIiBkPSJNMjMzLjggNjEwYy0xMy4zIDAtMjYtNi0zNC0xNi44TDkwLjUgNDQ4LjhDNzYuMyA0MzAgODAgNDAzLjMgOTguOCAzODljMTguOC0xNC4yIDQ1LjUtMTAuNCA1OS44IDguNGw3MiA5NUw0NTEuMyAyNDJjMTIuNS0yMCAzOC44LTI2LjIgNTguOC0xMy43IDIwIDEyLjQgMjYgMzguNyAxMy43IDU4LjhMMjcwIDU5MGMtNy40IDEyLTIwLjIgMTkuNC0zNC4zIDIwaC0yeiIvPjwvc3ZnPg=="; }

    .has-danger .form-control.form-control-warning,
    .is-focused .has-danger .form-control.form-control-warning {
        background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZjBhZDRlIiBkPSJNNjAzIDY0MC4ybC0yNzguNS01MDljLTMuOC02LjYtMTAuOC0xMC42LTE4LjUtMTAuNnMtMTQuNyA0LTE4LjUgMTAuNkw5IDY0MC4yYy0zLjcgNi41LTMuNiAxNC40LjIgMjAuOCAzLjggNi41IDEwLjggMTAuNCAxOC4zIDEwLjRoNTU3YzcuNiAwIDE0LjYtNCAxOC40LTEwLjQgMy41LTYuNCAzLjYtMTQuNCAwLTIwLjh6bS0yNjYuNC0zMGgtNjEuMlY1NDloNjEuMnY2MS4yem0wLTEwN2gtNjEuMlYzMDRoNjEuMnYxOTl6Ii8+PC9zdmc+"; }

    .has-danger .form-control.form-control-danger,
    .is-focused .has-danger .form-control.form-control-danger {
        background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZDk1MzRmIiBkPSJNNDQ3IDU0NC40Yy0xNC40IDE0LjQtMzcuNiAxNC40LTUyIDBsLTg5LTkyLjctODkgOTIuN2MtMTQuNSAxNC40LTM3LjcgMTQuNC01MiAwLTE0LjQtMTQuNC0xNC40LTM3LjYgMC01Mmw5Mi40LTk2LjMtOTIuNC05Ni4zYy0xNC40LTE0LjQtMTQuNC0zNy42IDAtNTJzMzcuNi0xNC4zIDUyIDBsODkgOTIuOCA4OS4yLTkyLjdjMTQuNC0xNC40IDM3LjYtMTQuNCA1MiAwIDE0LjMgMTQuNCAxNC4zIDM3LjYgMCA1MkwzNTQuNiAzOTZsOTIuNCA5Ni40YzE0LjQgMTQuNCAxNC40IDM3LjYgMCA1MnoiLz48L3N2Zz4="; }

    .has-danger .is-focused .valid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #f44336; }

    .has-danger .is-focused .valid-tooltip {
        position: absolute;
        top: 100%;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: .5rem;
        margin-top: .1rem;
        font-size: .875rem;
        line-height: 1;
        color: #fff;
        background-color: rgba(244, 67, 54, 0.8);
        border-radius: .2rem; }

    .was-validated .has-danger .is-focused .form-control:valid, .has-danger .is-focused .form-control.is-valid, .was-validated
    .has-danger .is-focused .custom-select:valid,
    .has-danger .is-focused .custom-select.is-valid {
        border-color: #f44336; }
    .was-validated .has-danger .is-focused .form-control:valid:focus, .has-danger .is-focused .form-control.is-valid:focus, .was-validated
    .has-danger .is-focused .custom-select:valid:focus,
    .has-danger .is-focused .custom-select.is-valid:focus {
        border-color: #f44336;
        box-shadow: 0 0 0 0.2rem rgba(244, 67, 54, 0.25); }
    .was-validated .has-danger .is-focused .form-control:valid ~ .valid-feedback,
    .was-validated .has-danger .is-focused .form-control:valid ~ .valid-tooltip, .has-danger .is-focused .form-control.is-valid ~ .valid-feedback,
    .has-danger .is-focused .form-control.is-valid ~ .valid-tooltip, .was-validated
    .has-danger .is-focused .custom-select:valid ~ .valid-feedback,
    .was-validated
    .has-danger .is-focused .custom-select:valid ~ .valid-tooltip,
    .has-danger .is-focused .custom-select.is-valid ~ .valid-feedback,
    .has-danger .is-focused .custom-select.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .has-danger .is-focused .form-check-input:valid ~ .form-check-label, .has-danger .is-focused .form-check-input.is-valid ~ .form-check-label {
        color: #f44336; }

    .was-validated .has-danger .is-focused .form-check-input:valid ~ .valid-feedback,
    .was-validated .has-danger .is-focused .form-check-input:valid ~ .valid-tooltip, .has-danger .is-focused .form-check-input.is-valid ~ .valid-feedback,
    .has-danger .is-focused .form-check-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .has-danger .is-focused .custom-control-input:valid ~ .custom-control-label, .has-danger .is-focused .custom-control-input.is-valid ~ .custom-control-label {
        color: #f44336; }
    .was-validated .has-danger .is-focused .custom-control-input:valid ~ .custom-control-label::before, .has-danger .is-focused .custom-control-input.is-valid ~ .custom-control-label::before {
        background-color: #fbb4af; }

    .was-validated .has-danger .is-focused .custom-control-input:valid ~ .valid-feedback,
    .was-validated .has-danger .is-focused .custom-control-input:valid ~ .valid-tooltip, .has-danger .is-focused .custom-control-input.is-valid ~ .valid-feedback,
    .has-danger .is-focused .custom-control-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .has-danger .is-focused .custom-control-input:valid:checked ~ .custom-control-label::before, .has-danger .is-focused .custom-control-input.is-valid:checked ~ .custom-control-label::before {
        background-color: #f77066; }

    .was-validated .has-danger .is-focused .custom-control-input:valid:focus ~ .custom-control-label::before, .has-danger .is-focused .custom-control-input.is-valid:focus ~ .custom-control-label::before {
        box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(244, 67, 54, 0.25); }

    .was-validated .has-danger .is-focused .custom-file-input:valid ~ .custom-file-label, .has-danger .is-focused .custom-file-input.is-valid ~ .custom-file-label {
        border-color: #f44336; }
    .was-validated .has-danger .is-focused .custom-file-input:valid ~ .custom-file-label::before, .has-danger .is-focused .custom-file-input.is-valid ~ .custom-file-label::before {
        border-color: inherit; }

    .was-validated .has-danger .is-focused .custom-file-input:valid ~ .valid-feedback,
    .was-validated .has-danger .is-focused .custom-file-input:valid ~ .valid-tooltip, .has-danger .is-focused .custom-file-input.is-valid ~ .valid-feedback,
    .has-danger .is-focused .custom-file-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .has-danger .is-focused .custom-file-input:valid:focus ~ .custom-file-label, .has-danger .is-focused .custom-file-input.is-valid:focus ~ .custom-file-label {
        box-shadow: 0 0 0 0.2rem rgba(244, 67, 54, 0.25); }

    .has-danger .is-focused [class^='bmd-label'],
    .has-danger .is-focused [class*=' bmd-label'] {
        color: #f44336; }

    .has-danger .is-focused .bmd-label-placeholder {
        color: #f44336; }

    .has-danger .is-focused .form-control {
        border-color: #f44336; }

    .has-danger .is-focused .bmd-help {
        color: #555; }

    .has-rose [class^='bmd-label'],
    .has-rose [class*=' bmd-label'] {
        color: #e91e63; }

    .has-rose .form-control,
    .is-focused .has-rose .form-control {
        background-image: linear-gradient(to top, #e91e63 2px, rgba(233, 30, 99, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

    .has-rose .form-control:invalid {
        background-image: linear-gradient(to top, #f44336 2px, rgba(244, 67, 54, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

    .has-rose .form-control:-moz-read-only {
        background-image: linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

    .has-rose .form-control:read-only {
        background-image: linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px); }

    fieldset[disabled][disabled] .has-rose .form-control, .has-rose .form-control.disabled, .has-rose .form-control:disabled, .has-rose .form-control[disabled] {
        background-image: -webkit-gradient(linear, left top, right top, from(#d2d2d2), color-stop(30%, #d2d2d2), color-stop(30%, transparent), to(transparent));
        background-image: linear-gradient(to right, #d2d2d2 0%, #d2d2d2 30%, transparent 30%, transparent 100%);
        background-repeat: repeat-x;
        background-size: 3px 1px; }

    .has-rose .form-control.form-control-success,
    .is-focused .has-rose .form-control.form-control-success {
        background-image: linear-gradient(to top, #e91e63 2px, rgba(233, 30, 99, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjNWNiODVjIiBkPSJNMjMzLjggNjEwYy0xMy4zIDAtMjYtNi0zNC0xNi44TDkwLjUgNDQ4LjhDNzYuMyA0MzAgODAgNDAzLjMgOTguOCAzODljMTguOC0xNC4yIDQ1LjUtMTAuNCA1OS44IDguNGw3MiA5NUw0NTEuMyAyNDJjMTIuNS0yMCAzOC44LTI2LjIgNTguOC0xMy43IDIwIDEyLjQgMjYgMzguNyAxMy43IDU4LjhMMjcwIDU5MGMtNy40IDEyLTIwLjIgMTkuNC0zNC4zIDIwaC0yeiIvPjwvc3ZnPg=="; }

    .has-rose .form-control.form-control-warning,
    .is-focused .has-rose .form-control.form-control-warning {
        background-image: linear-gradient(to top, #e91e63 2px, rgba(233, 30, 99, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZjBhZDRlIiBkPSJNNjAzIDY0MC4ybC0yNzguNS01MDljLTMuOC02LjYtMTAuOC0xMC42LTE4LjUtMTAuNnMtMTQuNyA0LTE4LjUgMTAuNkw5IDY0MC4yYy0zLjcgNi41LTMuNiAxNC40LjIgMjAuOCAzLjggNi41IDEwLjggMTAuNCAxOC4zIDEwLjRoNTU3YzcuNiAwIDE0LjYtNCAxOC40LTEwLjQgMy41LTYuNCAzLjYtMTQuNCAwLTIwLjh6bS0yNjYuNC0zMGgtNjEuMlY1NDloNjEuMnY2MS4yem0wLTEwN2gtNjEuMlYzMDRoNjEuMnYxOTl6Ii8+PC9zdmc+"; }

    .has-rose .form-control.form-control-danger,
    .is-focused .has-rose .form-control.form-control-danger {
        background-image: linear-gradient(to top, #e91e63 2px, rgba(233, 30, 99, 0) 2px), linear-gradient(to top, #d2d2d2 1px, rgba(210, 210, 210, 0) 1px), "data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MTIgNzkyIj48cGF0aCBmaWxsPSIjZDk1MzRmIiBkPSJNNDQ3IDU0NC40Yy0xNC40IDE0LjQtMzcuNiAxNC40LTUyIDBsLTg5LTkyLjctODkgOTIuN2MtMTQuNSAxNC40LTM3LjcgMTQuNC01MiAwLTE0LjQtMTQuNC0xNC40LTM3LjYgMC01Mmw5Mi40LTk2LjMtOTIuNC05Ni4zYy0xNC40LTE0LjQtMTQuNC0zNy42IDAtNTJzMzcuNi0xNC4zIDUyIDBsODkgOTIuOCA4OS4yLTkyLjdjMTQuNC0xNC40IDM3LjYtMTQuNCA1MiAwIDE0LjMgMTQuNCAxNC4zIDM3LjYgMCA1MkwzNTQuNiAzOTZsOTIuNCA5Ni40YzE0LjQgMTQuNCAxNC40IDM3LjYgMCA1MnoiLz48L3N2Zz4="; }

    .has-rose .is-focused .valid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #e91e63; }

    .has-rose .is-focused .valid-tooltip {
        position: absolute;
        top: 100%;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: .5rem;
        margin-top: .1rem;
        font-size: .875rem;
        line-height: 1;
        color: #fff;
        background-color: rgba(233, 30, 99, 0.8);
        border-radius: .2rem; }

    .was-validated .has-rose .is-focused .form-control:valid, .has-rose .is-focused .form-control.is-valid, .was-validated
    .has-rose .is-focused .custom-select:valid,
    .has-rose .is-focused .custom-select.is-valid {
        border-color: #e91e63; }
    .was-validated .has-rose .is-focused .form-control:valid:focus, .has-rose .is-focused .form-control.is-valid:focus, .was-validated
    .has-rose .is-focused .custom-select:valid:focus,
    .has-rose .is-focused .custom-select.is-valid:focus {
        border-color: #e91e63;
        box-shadow: 0 0 0 0.2rem rgba(233, 30, 99, 0.25); }
    .was-validated .has-rose .is-focused .form-control:valid ~ .valid-feedback,
    .was-validated .has-rose .is-focused .form-control:valid ~ .valid-tooltip, .has-rose .is-focused .form-control.is-valid ~ .valid-feedback,
    .has-rose .is-focused .form-control.is-valid ~ .valid-tooltip, .was-validated
    .has-rose .is-focused .custom-select:valid ~ .valid-feedback,
    .was-validated
    .has-rose .is-focused .custom-select:valid ~ .valid-tooltip,
    .has-rose .is-focused .custom-select.is-valid ~ .valid-feedback,
    .has-rose .is-focused .custom-select.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .has-rose .is-focused .form-check-input:valid ~ .form-check-label, .has-rose .is-focused .form-check-input.is-valid ~ .form-check-label {
        color: #e91e63; }

    .was-validated .has-rose .is-focused .form-check-input:valid ~ .valid-feedback,
    .was-validated .has-rose .is-focused .form-check-input:valid ~ .valid-tooltip, .has-rose .is-focused .form-check-input.is-valid ~ .valid-feedback,
    .has-rose .is-focused .form-check-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .has-rose .is-focused .custom-control-input:valid ~ .custom-control-label, .has-rose .is-focused .custom-control-input.is-valid ~ .custom-control-label {
        color: #e91e63; }
    .was-validated .has-rose .is-focused .custom-control-input:valid ~ .custom-control-label::before, .has-rose .is-focused .custom-control-input.is-valid ~ .custom-control-label::before {
        background-color: #f492b4; }

    .was-validated .has-rose .is-focused .custom-control-input:valid ~ .valid-feedback,
    .was-validated .has-rose .is-focused .custom-control-input:valid ~ .valid-tooltip, .has-rose .is-focused .custom-control-input.is-valid ~ .valid-feedback,
    .has-rose .is-focused .custom-control-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .has-rose .is-focused .custom-control-input:valid:checked ~ .custom-control-label::before, .has-rose .is-focused .custom-control-input.is-valid:checked ~ .custom-control-label::before {
        background-color: #ee4c83; }

    .was-validated .has-rose .is-focused .custom-control-input:valid:focus ~ .custom-control-label::before, .has-rose .is-focused .custom-control-input.is-valid:focus ~ .custom-control-label::before {
        box-shadow: 0 0 0 1px #fafafa, 0 0 0 0.2rem rgba(233, 30, 99, 0.25); }

    .was-validated .has-rose .is-focused .custom-file-input:valid ~ .custom-file-label, .has-rose .is-focused .custom-file-input.is-valid ~ .custom-file-label {
        border-color: #e91e63; }
    .was-validated .has-rose .is-focused .custom-file-input:valid ~ .custom-file-label::before, .has-rose .is-focused .custom-file-input.is-valid ~ .custom-file-label::before {
        border-color: inherit; }

    .was-validated .has-rose .is-focused .custom-file-input:valid ~ .valid-feedback,
    .was-validated .has-rose .is-focused .custom-file-input:valid ~ .valid-tooltip, .has-rose .is-focused .custom-file-input.is-valid ~ .valid-feedback,
    .has-rose .is-focused .custom-file-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .has-rose .is-focused .custom-file-input:valid:focus ~ .custom-file-label, .has-rose .is-focused .custom-file-input.is-valid:focus ~ .custom-file-label {
        box-shadow: 0 0 0 0.2rem rgba(233, 30, 99, 0.25); }

    .has-rose .is-focused [class^='bmd-label'],
    .has-rose .is-focused [class*=' bmd-label'] {
        color: #e91e63; }

    .has-rose .is-focused .bmd-label-placeholder {
        color: #e91e63; }

    .has-rose .is-focused .form-control {
        border-color: #e91e63; }

    .has-rose .is-focused .bmd-help {
        color: #555; }

    .bmd-form-group {
        position: relative;
        padding-top: 27px; }
    .bmd-form-group:not(.has-success):not(.has-danger) [class^='bmd-label'].bmd-label-floating,
    .bmd-form-group:not(.has-success):not(.has-danger) [class*=' bmd-label'].bmd-label-floating {
        color: #AAAAAA; }
    .bmd-form-group [class^='bmd-label'],
    .bmd-form-group [class*=' bmd-label'] {
        position: absolute;
        pointer-events: none;
        -webkit-transition: 0.3s ease all;
        transition: 0.3s ease all; }
    .bmd-form-group [class^='bmd-label'].bmd-label-floating,
    .bmd-form-group [class*=' bmd-label'].bmd-label-floating {
        will-change: left, top, contents;
        margin: 0;
        line-height: 1.4;
        font-weight: 400; }
    .bmd-form-group.is-filled .bmd-label-placeholder {
        display: none; }
    .bmd-form-group.bmd-collapse-inline {
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        padding: 0;
        min-height: 2.1em; }
    .bmd-form-group.bmd-collapse-inline .collapse {
        -webkit-box-flex: 1;
        flex: 1;
        display: none; }
    .bmd-form-group.bmd-collapse-inline .collapse.show {
        max-width: 1200px; }
    .bmd-form-group.bmd-collapse-inline .collapsing,
    .bmd-form-group.bmd-collapse-inline .width:not(.collapse),
    .bmd-form-group.bmd-collapse-inline .collapse.show {
        display: block; }
    .bmd-form-group.bmd-collapse-inline .collapsing {
        -webkit-transition-duration: 0.2s;
        transition-duration: 0.2s;
        -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); }
    .bmd-form-group input::-webkit-input-placeholder {
        line-height: 1.1; }
    .bmd-form-group input::-moz-placeholder {
        line-height: 1.1; }
    .bmd-form-group input:-ms-input-placeholder {
        line-height: 1.1; }
    .bmd-form-group input::-ms-input-placeholder {
        line-height: 1.1; }
    .bmd-form-group .form-control,
    .bmd-form-group label,
    .bmd-form-group input::placeholder {
        line-height: 1.1; }
    .bmd-form-group label {
        color: #AAAAAA; }
    .bmd-form-group .radio label,
    .bmd-form-group label.radio-inline,
    .bmd-form-group .checkbox label,
    .bmd-form-group label.checkbox-inline,
    .bmd-form-group .switch label {
        line-height: 1.5; }
    .bmd-form-group .checkbox label,
    .bmd-form-group .radio label,
    .bmd-form-group label {
        font-size: 0.875rem; }
    .bmd-form-group .bmd-label-floating,
    .bmd-form-group .bmd-label-placeholder {
        top: 2.3125rem; }
    .bmd-form-group .is-focused .bmd-label-floating,
    .bmd-form-group .is-filled .bmd-label-floating {
        top: 1rem;
        left: 0;
        font-size: 0.6875rem; }
    .bmd-form-group .bmd-label-static {
        top: 0.35rem;
        left: 0;
        font-size: 0.875rem; }
    .bmd-form-group .bmd-help {
        margin-top: 0;
        font-size: 0.75rem; }
    .bmd-form-group .form-control.form-control-success, .bmd-form-group .form-control.form-control-warning, .bmd-form-group .form-control.form-control-danger {
        background-size: 0 100%, 100% 100%, 0.9375rem 0.9375rem; }
    .bmd-form-group .form-control.form-control-success, .bmd-form-group .form-control.form-control-success:focus,
    .bmd-form-group.is-focused .bmd-form-group .form-control.form-control-success, .bmd-form-group .form-control.form-control-warning, .bmd-form-group .form-control.form-control-warning:focus,
    .bmd-form-group.is-focused .bmd-form-group .form-control.form-control-warning, .bmd-form-group .form-control.form-control-danger, .bmd-form-group .form-control.form-control-danger:focus,
    .bmd-form-group.is-focused .bmd-form-group .form-control.form-control-danger {
        padding-right: 0;
        background-repeat: no-repeat, no-repeat;
        background-position: center bottom, center calc(100% - 1px), center right 0.46875rem; }
    .bmd-form-group .form-control.form-control-success:focus,
    .bmd-form-group.is-focused .bmd-form-group .form-control.form-control-success, .bmd-form-group .form-control.form-control-warning:focus,
    .bmd-form-group.is-focused .bmd-form-group .form-control.form-control-warning, .bmd-form-group .form-control.form-control-danger:focus,
    .bmd-form-group.is-focused .bmd-form-group .form-control.form-control-danger {
        background-size: 100% 100%, 100% 100%, 0.9375rem 0.9375rem; }
    .bmd-form-group.bmd-form-group-sm input::-webkit-input-placeholder {
        line-height: 1.1; }
    .bmd-form-group.bmd-form-group-sm input::-moz-placeholder {
        line-height: 1.1; }
    .bmd-form-group.bmd-form-group-sm input:-ms-input-placeholder {
        line-height: 1.1; }
    .bmd-form-group.bmd-form-group-sm input::-ms-input-placeholder {
        line-height: 1.1; }
    .bmd-form-group.bmd-form-group-sm .form-control,
    .bmd-form-group.bmd-form-group-sm label,
    .bmd-form-group.bmd-form-group-sm input::placeholder {
        line-height: 1.1; }
    .bmd-form-group.bmd-form-group-sm label {
        color: #AAAAAA; }
    .bmd-form-group.bmd-form-group-sm .radio label,
    .bmd-form-group.bmd-form-group-sm label.radio-inline,
    .bmd-form-group.bmd-form-group-sm .checkbox label,
    .bmd-form-group.bmd-form-group-sm label.checkbox-inline,
    .bmd-form-group.bmd-form-group-sm .switch label {
        line-height: 1.5; }
    .bmd-form-group.bmd-form-group-sm .checkbox label,
    .bmd-form-group.bmd-form-group-sm .radio label,
    .bmd-form-group.bmd-form-group-sm label {
        font-size: 0.875rem; }
    .bmd-form-group.bmd-form-group-sm .bmd-label-floating,
    .bmd-form-group.bmd-form-group-sm .bmd-label-placeholder {
        top: 1.875rem; }
    .bmd-form-group.bmd-form-group-sm .is-focused .bmd-label-floating,
    .bmd-form-group.bmd-form-group-sm .is-filled .bmd-label-floating {
        top: 0.75rem;
        left: 0;
        font-size: 0.6875rem; }
    .bmd-form-group.bmd-form-group-sm .bmd-label-static {
        top: 0.1rem;
        left: 0;
        font-size: 0.875rem; }
    .bmd-form-group.bmd-form-group-sm .bmd-help {
        margin-top: 0;
        font-size: 0.65625rem; }
    .bmd-form-group.bmd-form-group-sm .form-control.form-control-success, .bmd-form-group.bmd-form-group-sm .form-control.form-control-warning, .bmd-form-group.bmd-form-group-sm .form-control.form-control-danger {
        background-size: 0 100%, 100% 100%, 0.6875rem 0.6875rem; }
    .bmd-form-group.bmd-form-group-sm .form-control.form-control-success, .bmd-form-group.bmd-form-group-sm .form-control.form-control-success:focus,
    .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-sm .form-control.form-control-success, .bmd-form-group.bmd-form-group-sm .form-control.form-control-warning, .bmd-form-group.bmd-form-group-sm .form-control.form-control-warning:focus,
    .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-sm .form-control.form-control-warning, .bmd-form-group.bmd-form-group-sm .form-control.form-control-danger, .bmd-form-group.bmd-form-group-sm .form-control.form-control-danger:focus,
    .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-sm .form-control.form-control-danger {
        padding-right: 0;
        background-repeat: no-repeat, no-repeat;
        background-position: center bottom, center calc(100% - 1px), center right 0.34375rem; }
    .bmd-form-group.bmd-form-group-sm .form-control.form-control-success:focus,
    .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-sm .form-control.form-control-success, .bmd-form-group.bmd-form-group-sm .form-control.form-control-warning:focus,
    .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-sm .form-control.form-control-warning, .bmd-form-group.bmd-form-group-sm .form-control.form-control-danger:focus,
    .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-sm .form-control.form-control-danger {
        background-size: 100% 100%, 100% 100%, 0.6875rem 0.6875rem; }
    .bmd-form-group.bmd-form-group-lg input::-webkit-input-placeholder {
        line-height: 1.1; }
    .bmd-form-group.bmd-form-group-lg input::-moz-placeholder {
        line-height: 1.1; }
    .bmd-form-group.bmd-form-group-lg input:-ms-input-placeholder {
        line-height: 1.1; }
    .bmd-form-group.bmd-form-group-lg input::-ms-input-placeholder {
        line-height: 1.1; }
    .bmd-form-group.bmd-form-group-lg .form-control,
    .bmd-form-group.bmd-form-group-lg label,
    .bmd-form-group.bmd-form-group-lg input::placeholder {
        line-height: 1.1; }
    .bmd-form-group.bmd-form-group-lg label {
        color: #AAAAAA; }
    .bmd-form-group.bmd-form-group-lg .radio label,
    .bmd-form-group.bmd-form-group-lg label.radio-inline,
    .bmd-form-group.bmd-form-group-lg .checkbox label,
    .bmd-form-group.bmd-form-group-lg label.checkbox-inline,
    .bmd-form-group.bmd-form-group-lg .switch label {
        line-height: 1.5; }
    .bmd-form-group.bmd-form-group-lg .checkbox label,
    .bmd-form-group.bmd-form-group-lg .radio label,
    .bmd-form-group.bmd-form-group-lg label {
        font-size: 0.875rem; }
    .bmd-form-group.bmd-form-group-lg .bmd-label-floating,
    .bmd-form-group.bmd-form-group-lg .bmd-label-placeholder {
        top: 2.4375rem; }
    .bmd-form-group.bmd-form-group-lg .is-focused .bmd-label-floating,
    .bmd-form-group.bmd-form-group-lg .is-filled .bmd-label-floating {
        top: 1rem;
        left: 0;
        font-size: 0.6875rem; }
    .bmd-form-group.bmd-form-group-lg .bmd-label-static {
        top: 0.35rem;
        left: 0;
        font-size: 0.875rem; }
    .bmd-form-group.bmd-form-group-lg .bmd-help {
        margin-top: 0;
        font-size: 0.9375rem; }
    .bmd-form-group.bmd-form-group-lg .form-control.form-control-success, .bmd-form-group.bmd-form-group-lg .form-control.form-control-warning, .bmd-form-group.bmd-form-group-lg .form-control.form-control-danger {
        background-size: 0 100%, 100% 100%, 1.1875rem 1.1875rem; }
    .bmd-form-group.bmd-form-group-lg .form-control.form-control-success, .bmd-form-group.bmd-form-group-lg .form-control.form-control-success:focus,
    .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-lg .form-control.form-control-success, .bmd-form-group.bmd-form-group-lg .form-control.form-control-warning, .bmd-form-group.bmd-form-group-lg .form-control.form-control-warning:focus,
    .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-lg .form-control.form-control-warning, .bmd-form-group.bmd-form-group-lg .form-control.form-control-danger, .bmd-form-group.bmd-form-group-lg .form-control.form-control-danger:focus,
    .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-lg .form-control.form-control-danger {
        padding-right: 0;
        background-repeat: no-repeat, no-repeat;
        background-position: center bottom, center calc(100% - 1px), center right 0.59375rem; }
    .bmd-form-group.bmd-form-group-lg .form-control.form-control-success:focus,
    .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-lg .form-control.form-control-success, .bmd-form-group.bmd-form-group-lg .form-control.form-control-warning:focus,
    .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-lg .form-control.form-control-warning, .bmd-form-group.bmd-form-group-lg .form-control.form-control-danger:focus,
    .bmd-form-group.is-focused .bmd-form-group.bmd-form-group-lg .form-control.form-control-danger {
        background-size: 100% 100%, 100% 100%, 1.1875rem 1.1875rem; }

    input::-webkit-input-placeholder {
        line-height: 1.1; }

    input::-moz-placeholder {
        line-height: 1.1; }

    input:-ms-input-placeholder {
        line-height: 1.1; }

    input::-ms-input-placeholder {
        line-height: 1.1; }

    .form-control,
    label,
    input::placeholder {
        line-height: 1.1; }

    label {
        color: #AAAAAA; }

    .radio label,
    label.radio-inline,
    .checkbox label,
    label.checkbox-inline,
    .switch label {
        line-height: 1.5; }

    .checkbox label,
    .radio label,
    label {
        font-size: 0.875rem; }

    .bmd-label-floating,
    .bmd-label-placeholder {
        top: 2.3125rem; }

    .is-focused .bmd-label-floating,
    .is-filled .bmd-label-floating {
        top: 1rem;
        left: 0;
        font-size: 0.6875rem; }

    .bmd-label-static {
        top: 0.35rem;
        left: 0;
        font-size: 0.875rem; }

    .bmd-help {
        margin-top: 0;
        font-size: 0.75rem; }

    .form-control.form-control-success, .form-control.form-control-warning, .form-control.form-control-danger {
        background-size: 0 100%, 100% 100%, 0.9375rem 0.9375rem; }
    .form-control.form-control-success, .form-control.form-control-success:focus,
    .bmd-form-group.is-focused .form-control.form-control-success, .form-control.form-control-warning, .form-control.form-control-warning:focus,
    .bmd-form-group.is-focused .form-control.form-control-warning, .form-control.form-control-danger, .form-control.form-control-danger:focus,
    .bmd-form-group.is-focused .form-control.form-control-danger {
        padding-right: 0;
        background-repeat: no-repeat, no-repeat;
        background-position: center bottom, center calc(100% - 1px), center right 0.46875rem; }
    .form-control.form-control-success:focus,
    .bmd-form-group.is-focused .form-control.form-control-success, .form-control.form-control-warning:focus,
    .bmd-form-group.is-focused .form-control.form-control-warning, .form-control.form-control-danger:focus,
    .bmd-form-group.is-focused .form-control.form-control-danger {
        background-size: 100% 100%, 100% 100%, 0.9375rem 0.9375rem; }

    select, select.form-control {
        -moz-appearance: none;
        -webkit-appearance: none; }

    @media (min-width: 576px) {
        .form-inline .input-group {
            display: -webkit-inline-box;
            display: inline-flex;
            -webkit-box-align: center;
            align-items: center; } }

    .form-control-feedback {
        position: absolute;
        top: 33px;
        right: 0;
        z-index: 2;
        display: block;
        width: 34px;
        height: 34px;
        line-height: 34px;
        text-align: center;
        pointer-events: none;
        opacity: 0; }
    .has-success .form-control-feedback {
        color: #4caf50;
        opacity: 1; }
    .has-danger .form-control-feedback {
        color: #f44336;
        opacity: 1; }

    .form-group {
        margin-bottom: 17px;
        position: relative; }

    textarea {
        height: auto !important;
        resize: none;
        line-height: 1.42857 !important; }

    .form-group input[type=file] {
        opacity: 0;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1; }

    .form-newsletter .input-group,
    .form-newsletter .form-group {
        float: left;
        width: 78%;
        margin-right: 2%;
        margin-top: 9px;
        padding-top: 5px; }

    .form-newsletter .btn {
        float: left;
        width: 20%;
        margin: 9px 0 0; }

    .form-file-upload .input-group-btn:last-child > .btn-round {
        border-radius: 30px; }

    .form-file-upload .input-group-btn .btn {
        margin: 0; }

    .form-file-upload .input-group {
        width: 100%; }

    .input-group .input-group-btn {
        padding: 0 12px; }

    .input-group .input-group-text {
        display: -webkit-box;
        display: flex;
        -webkit-box-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        align-items: center;
        padding: 0 15px 0 15px;
        background-color: transparent;
        border-color: transparent; }

    .input-group .input-group-btn {
        position: absolute;
        right: 0;
        bottom: 0;
        padding-right: 0; }

    .list-group {
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        -webkit-box-flex: 1;
        flex-grow: 1;
        padding: .5rem 0; }
    .list-group.bmd-list-group-sm {
        padding: .25rem 0; }
    .list-group.bmd-list-group-sm .list-group-item {
        padding: .5rem 1rem; }

    .bmd-list-group-col {
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        min-width: 0; }

    .list-group-item {
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        flex-flow: row wrap;
        -webkit-box-align: center;
        align-items: center;
        padding: 1rem;
        line-height: 1; }
    .list-group-item .list-group-item-text {
        min-width: 0;
        max-height: 2.188rem;
        overflow: hidden;
        text-overflow: ellipsis; }
    .list-group-item :first-child {
        margin-right: 2rem; }
    .list-group-item > .pull-xs-right,
    .list-group-item > .pull-sm-right,
    .list-group-item > .pull-md-right,
    .list-group-item > .pull-lg-right,
    .list-group-item > .pull-xl-right,
    .list-group-item > * ~ .label:last-child,
    .list-group-item > * ~ .material-icons:last-child {
        margin-right: 0;
        margin-left: auto; }
    .list-group-item .material-icons.pull-xs-right,
    .list-group-item .material-icons.pull-sm-right,
    .list-group-item .material-icons.pull-md-right,
    .list-group-item .material-icons.pull-lg-right,
    .list-group-item .material-icons.pull-xl-right,
    .list-group-item .material-icons ~ .material-icons:last-child {
        padding-left: 1rem; }
    .list-group-item .list-group-item-text {
        font-size: .875rem;
        color: #555; }

    .nav-link {
        text-transform: uppercase; }

    .navbar-nav .nav-link {
        padding: 0.5321rem;
        font-size: 0.875rem;
        font-weight: 400; }

    .nav-tabs,
    .nav-pills {
        border: 0;
        border-radius: 3px;
        padding: 0 15px; }
    .nav-tabs .nav-link,
    .nav-pills .nav-link {
        padding: 1.4286em 0.8575em;
        font-size: 0.875rem;
        font-weight: 500;
        border: 0; }

    .nav .nav-item {
        position: relative; }

    .page-header {
        height: 100vh;
        background-position: center center;
        background-size: cover;
        margin: 0;
        padding: 0;
        border: 0;
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
        align-items: center; }
    .page-header .page-header-image {
        position: absolute;
        background-size: cover;
        background-position: center center;
        width: 100%;
        height: 100%;
        z-index: -1; }
    .page-header .content-center {
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 2;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
        color: #FFFFFF;
        padding: 0 15px;
        width: 100%;
        max-width: 880px; }
    .page-header .carousel .carousel-indicators {
        bottom: 60px; }
    .page-header > .container {
        color: #fff; }
    .page-header .title {
        color: #fff; }
    .page-header.header-small {
        height: 65vh;
        min-height: 65vh; }
    .page-header .iframe-container iframe {
        width: 100%;
        box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); }

    .header-filter {
        position: relative; }
    .header-filter:before, .header-filter:after {
        position: absolute;
        z-index: 1;
        width: 100%;
        height: 100%;
        display: block;
        left: 0;
        top: 0;
        content: ""; }
    .header-filter::before {
        background: rgba(0, 0, 0, 0.5); }
    .header-filter .container {
        z-index: 2;
        position: relative; }

    .clear-filter::before {
        background: none; }

    .purple-filter:after {
        background: rgba(101, 47, 142, 0.64);
        background: linear-gradient(45deg, rgba(101, 47, 142, 0.88) 0%, rgba(125, 46, 185, 0.45) 100%);
        background: -webkit-linear-gradient(135deg, rgba(101, 47, 142, 0.88) 0%, rgba(125, 46, 185, 0.45) 100%); }

    footer {
        padding: 0.9375rem 0;
        text-align: center;
        /* Safari */
        /* Safari 6.1+ */
        display: -webkit-box;
        display: flex; }
    footer ul {
        margin-bottom: 0;
        padding: 0;
        list-style: none; }
    footer ul li {
        display: inline-block; }
    footer ul li a {
        color: inherit;
        padding: 0.9375rem;
        font-weight: 500;
        font-size: 12px;
        text-transform: uppercase;
        border-radius: 3px;
        text-decoration: none;
        position: relative;
        display: block; }
    footer ul li a:hover {
        text-decoration: none; }
    footer ul li .btn {
        margin: 0; }
    footer ul.links-horizontal:first-child a {
        padding-left: 0; }
    footer ul.links-horizontal:last-child a {
        padding-right: 0; }
    footer ul.links-vertical li {
        display: block;
        margin-left: -5px;
        margin-right: -5px; }
    footer ul.links-vertical li a {
        padding: 5px; }
    footer .social-buttons a,
    footer .social-buttons .btn {
        margin-top: 5px;
        margin-bottom: 5px; }
    footer .footer-brand {
        float: left;
        height: 50px;
        padding: 15px 15px;
        font-size: 18px;
        line-height: 20px;
        margin-left: -15px; }
    footer .footer-brand:hover, footer .footer-brand:focus {
        color: #3C4858; }
    footer .copyright {
        padding: 15px 0; }
    footer .copyright .material-icons {
        font-size: 18px;
        position: relative;
        top: 3px; }
    footer .pull-center {
        display: inline-block;
        float: none; }

    .img-thumbnail {
        border-radius: 16px; }

    .img-raised {
        box-shadow: 0 5px 15px -8px rgba(0, 0, 0, 0.24), 0 8px 10px -5px rgba(0, 0, 0, 0.2); }

    .rounded {
        border-radius: 6px !important; }

    .navbar {
        border: 0;
        border-radius: 3px;
        padding: 0.625rem 0;
        margin-bottom: 20px;
        color: #555;
        background-color: #fff !important;
        box-shadow: 0 4px 18px 0px rgba(0, 0, 0, 0.12), 0 7px 10px -5px rgba(0, 0, 0, 0.15); }
    .navbar .dropdown-item:hover,
    .navbar .dropdown-item:focus {
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 255, 255, 0.4);
        background-color: #fff;
        color: #555; }
    .navbar .navbar-toggler .navbar-toggler-icon {
        background-color: #555; }
    .navbar.fixed-top {
        border-radius: 0; }
    .navbar .navbar-nav .nav-item .nav-link {
        position: relative;
        color: inherit;
        padding: 0.9375rem;
        font-weight: 400;
        font-size: 12px;
        text-transform: uppercase;
        border-radius: 3px;
        line-height: 20px; }
    .navbar .navbar-nav .nav-item .nav-link:not(.btn-just-icon) .fa {
        position: relative;
        top: 2px;
        margin-top: -4px;
        margin-right: 4px; }
    .navbar .navbar-nav .nav-item .nav-link .material-icons,
    .navbar .navbar-nav .nav-item .nav-link .fa {
        font-size: 1.25rem;
        max-width: 24px;
        margin-top: -1.1em; }
    .navbar .navbar-nav .nav-item .nav-link:not(.btn) .material-icons {
        margin-top: -7px;
        top: 3px;
        position: relative;
        margin-right: 3px; }
    .navbar .navbar-nav .nav-item .nav-link.profile-photo {
        padding: 0;
        margin: 0 3px; }
    .navbar .navbar-nav .nav-item .nav-link.profile-photo:after {
        display: none; }
    .navbar .navbar-nav .nav-item .nav-link.profile-photo .profile-photo-small {
        height: 40px;
        width: 40px; }
    .navbar .navbar-nav .nav-item .nav-link.profile-photo .ripple-container {
        border-radius: 50%; }
    .navbar .navbar-nav .dropdown-menu-right {
        -webkit-transform-origin: 100% 0;
        transform-origin: 100% 0; }
    .navbar .navbar-nav .nav-item.active .nav-link, .navbar .navbar-nav .nav-item.active .nav-link:hover, .navbar .navbar-nav .nav-item.active .nav-link:focus {
        background-color: rgba(255, 255, 255, 0.1); }
    .navbar .btn,
    .navbar .navbar-nav .nav-item .btn {
        margin-top: 0;
        margin-bottom: 0; }
    .navbar .navbar-toggler {
        cursor: pointer; }
    .navbar .navbar-toggler .navbar-toggler-icon {
        position: relative;
        width: 22px;
        height: 2px;
        vertical-align: middle;
        outline: 0;
        display: block;
        border-radius: 1px; }
    .navbar .navbar-toggler .navbar-toggler-icon + .navbar-toggler-icon {
        margin-top: 4px; }
    .navbar.navbar-absolute {
        position: absolute;
        width: 100%;
        padding-top: 10px;
        z-index: 1029; }
    .navbar .navbar-wrapper {
        display: -webkit-inline-box;
        display: inline-flex;
        -webkit-box-align: center;
        align-items: center; }
    .navbar .navbar-brand {
        position: relative;
        color: inherit;
        height: 50px;
        font-size: 1.125rem;
        line-height: 30px;
        padding: 0.625rem 0; }
    .navbar.bg-primary {
        color: #fff;
        background-color: #9c27b0 !important;
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 12px -5px rgba(156, 39, 176, 0.46); }
    .navbar.bg-primary .dropdown-item:hover,
    .navbar.bg-primary .dropdown-item:focus {
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4);
        background-color: #9c27b0;
        color: #fff; }
    .navbar.bg-primary .navbar-toggler .navbar-toggler-icon {
        background-color: #fff; }
    .navbar.bg-info {
        color: #fff;
        background-color: #00bcd4 !important;
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 12px -5px rgba(0, 188, 212, 0.46); }
    .navbar.bg-info .dropdown-item:hover,
    .navbar.bg-info .dropdown-item:focus {
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(0, 188, 212, 0.4);
        background-color: #00bcd4;
        color: #fff; }
    .navbar.bg-info .navbar-toggler .navbar-toggler-icon {
        background-color: #fff; }
    .navbar.bg-warning {
        color: #fff;
        background-color: #ff9800 !important;
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 12px -5px rgba(255, 152, 0, 0.46); }
    .navbar.bg-warning .dropdown-item:hover,
    .navbar.bg-warning .dropdown-item:focus {
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 152, 0, 0.4);
        background-color: #ff9800;
        color: #fff; }
    .navbar.bg-warning .navbar-toggler .navbar-toggler-icon {
        background-color: #fff; }
    .navbar.bg-rose {
        color: #fff;
        background-color: #e91e63 !important;
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 12px -5px rgba(233, 30, 99, 0.46); }
    .navbar.bg-rose .dropdown-item:hover,
    .navbar.bg-rose .dropdown-item:focus {
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(233, 30, 99, 0.4);
        background-color: #e91e63;
        color: #fff; }
    .navbar.bg-rose .navbar-toggler .navbar-toggler-icon {
        background-color: #fff; }
    .navbar.bg-danger {
        color: #fff;
        background-color: #f44336 !important;
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 12px -5px rgba(244, 67, 54, 0.46); }
    .navbar.bg-danger .dropdown-item:hover,
    .navbar.bg-danger .dropdown-item:focus {
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(244, 67, 54, 0.4);
        background-color: #f44336;
        color: #fff; }
    .navbar.bg-danger .navbar-toggler .navbar-toggler-icon {
        background-color: #fff; }
    .navbar.bg-success {
        color: #fff;
        background-color: #4caf50 !important;
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 12px -5px rgba(76, 175, 80, 0.46); }
    .navbar.bg-success .dropdown-item:hover,
    .navbar.bg-success .dropdown-item:focus {
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(76, 175, 80, 0.4);
        background-color: #4caf50;
        color: #fff; }
    .navbar.bg-success .navbar-toggler .navbar-toggler-icon {
        background-color: #fff; }
    .navbar.bg-dark {
        color: #fff;
        background-color: #212121 !important;
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 12px -5px rgba(33, 33, 33, 0.46); }
    .navbar.bg-dark .dropdown-item:hover,
    .navbar.bg-dark .dropdown-item:focus {
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(33, 33, 33, 0.4);
        background-color: #212121;
        color: #fff; }
    .navbar.bg-dark .navbar-toggler .navbar-toggler-icon {
        background-color: #fff; }
    .navbar.navbar-transparent {
        background-color: transparent !important;
        box-shadow: none;
        padding-top: 25px;
        color: #fff; }

    #navbar .navbar {
        border-radius: 0; }

    .badge {
        padding: 5px 12px;
        text-transform: uppercase;
        font-size: 10px;
        color: #fff; }
    .badge.badge-primary {
        background-color: #9c27b0; }
    .badge.badge-info {
        background-color: #00bcd4; }
    .badge.badge-success {
        background-color: #4caf50; }
    .badge.badge-warning {
        background-color: #ff9800; }
    .badge.badge-danger {
        background-color: #f44336; }
    .badge.badge-rose {
        background-color: #e91e63; }
    .badge.badge-default {
        background-color: #999; }

    .badge-default[href]:hover,
    .badge-default[href]:focus {
        background-color: #c1c1c1; }

    .badge-primary[href]:hover, .badge-primary[href]:focus {
        background-color: #89229b; }

    .badge-info[href]:hover, .badge-info[href]:focus {
        background-color: #00a5bb; }

    .badge-success[href]:hover, .badge-success[href]:focus {
        background-color: #449d48; }

    .badge-warning[href]:hover, .badge-warning[href]:focus {
        background-color: #e68900;
        color: #fff; }

    .badge-danger[href]:hover, .badge-danger[href]:focus {
        background-color: #f32c1e; }

    .badge-rose[href]:hover,
    .badge-rose[href]:focus {
        background-color: #d81558; }

    .alert {
        border: 0;
        border-radius: 0;
        padding: 20px 15px;
        line-height: 20px; }
    .alert b {
        font-weight: 500;
        text-transform: uppercase;
        font-size: 12px; }
    .alert, .alert.alert-default {
        background-color: white;
        color: #555; }
    .alert a, .alert .alert-link, .alert.alert-default a, .alert.alert-default .alert-link {
        color: #555; }
    .alert.alert-inverse {
        background-color: #292929;
        color: #fff; }
    .alert.alert-inverse a, .alert.alert-inverse .alert-link {
        color: #fff; }
    .alert.alert-primary {
        background-color: #a72abd;
        color: #ffffff; }
    .alert.alert-primary a, .alert.alert-primary .alert-link {
        color: #ffffff; }
    .alert.alert-success {
        background-color: #55b559;
        color: #ffffff; }
    .alert.alert-success a, .alert.alert-success .alert-link {
        color: #ffffff; }
    .alert.alert-info {
        background-color: #00cae3;
        color: #ffffff; }
    .alert.alert-info a, .alert.alert-info .alert-link {
        color: #ffffff; }
    .alert.alert-warning {
        background-color: #ff9e0f;
        color: #ffffff; }
    .alert.alert-warning a, .alert.alert-warning .alert-link {
        color: #ffffff; }
    .alert.alert-danger {
        background-color: #f55145;
        color: #ffffff; }
    .alert.alert-danger a, .alert.alert-danger .alert-link {
        color: #ffffff; }
    .alert.alert-rose {
        background-color: #ea2c6d;
        color: #ffffff; }
    .alert.alert-rose a, .alert.alert-rose .alert-link {
        color: #ffffff; }
    .alert-info, .alert-danger, .alert-warning, .alert-success {
        color: #ffffff; }
    .alert-default a, .alert-default .alert-link {
        color: rgba(0,0,0, 0.87); }
    .alert .alert-icon {
        display: block;
        float: left;
        margin-right: 1.071rem; }
    .alert .alert-icon i {
        margin-top: -7px;
        top: 5px;
        position: relative; }
    .alert .close {
        color: #fff;
        text-shadow: none;
        opacity: .9; }
    .alert .close i {
        font-size: 20px; }
    .alert .close:hover, .alert .close:focus {
        opacity: 1; }

    .pagination > .page-item > .page-link,
    .pagination > .page-item > span {
        border: 0;
        border-radius: 30px !important;
        -webkit-transition: all .3s;
        transition: all .3s;
        padding: 0px 11px;
        margin: 0 3px;
        min-width: 30px;
        height: 30px;
        line-height: 30px;
        color: #999999;
        font-weight: 400;
        font-size: 12px;
        text-transform: uppercase;
        background: transparent;
        text-align: center; }
    .pagination > .page-item > .page-link:hover, .pagination > .page-item > .page-link:focus,
    .pagination > .page-item > span:hover,
    .pagination > .page-item > span:focus {
        color: #999999; }

    .pagination > .page-item.active > a,
    .pagination > .page-item.active > span {
        color: #999999; }
    .pagination > .page-item.active > a, .pagination > .page-item.active > a:focus, .pagination > .page-item.active > a:hover,
    .pagination > .page-item.active > span,
    .pagination > .page-item.active > span:focus,
    .pagination > .page-item.active > span:hover {
        background-color: #9c27b0;
        border-color: #9c27b0;
        color: #fff;
        box-shadow: 0 4px 5px 0 rgba(156, 39, 176, 0.14), 0 1px 10px 0 rgba(156, 39, 176, 0.12), 0 2px 4px -1px rgba(156, 39, 176, 0.2); }

    .pagination.pagination-info > .page-item.active > a, .pagination.pagination-info > .page-item.active > a:focus, .pagination.pagination-info > .page-item.active > a:hover,
    .pagination.pagination-info > .page-item.active > span,
    .pagination.pagination-info > .page-item.active > span:focus,
    .pagination.pagination-info > .page-item.active > span:hover {
        background-color: #00bcd4;
        border-color: #00bcd4;
        box-shadow: 0 4px 5px 0 rgba(0, 188, 212, 0.14), 0 1px 10px 0 rgba(0, 188, 212, 0.12), 0 2px 4px -1px rgba(0, 188, 212, 0.2); }

    .pagination.pagination-success > .page-item.active > a, .pagination.pagination-success > .page-item.active > a:focus, .pagination.pagination-success > .page-item.active > a:hover,
    .pagination.pagination-success > .page-item.active > span,
    .pagination.pagination-success > .page-item.active > span:focus,
    .pagination.pagination-success > .page-item.active > span:hover {
        background-color: #4caf50;
        border-color: #4caf50;
        box-shadow: 0 4px 5px 0 rgba(76, 175, 80, 0.14), 0 1px 10px 0 rgba(76, 175, 80, 0.12), 0 2px 4px -1px rgba(76, 175, 80, 0.2); }

    .pagination.pagination-warning > .page-item.active > a, .pagination.pagination-warning > .page-item.active > a:focus, .pagination.pagination-warning > .page-item.active > a:hover,
    .pagination.pagination-warning > .page-item.active > span,
    .pagination.pagination-warning > .page-item.active > span:focus,
    .pagination.pagination-warning > .page-item.active > span:hover {
        background-color: #ff9800;
        border-color: #ff9800;
        box-shadow: 0 4px 5px 0 rgba(255, 152, 0, 0.14), 0 1px 10px 0 rgba(255, 152, 0, 0.12), 0 2px 4px -1px rgba(255, 152, 0, 0.2); }

    .pagination.pagination-danger > .page-item.active > a, .pagination.pagination-danger > .page-item.active > a:focus, .pagination.pagination-danger > .page-item.active > a:hover,
    .pagination.pagination-danger > .page-item.active > span,
    .pagination.pagination-danger > .page-item.active > span:focus,
    .pagination.pagination-danger > .page-item.active > span:hover {
        background-color: #f44336;
        border-color: #f44336;
        box-shadow: 0 4px 5px 0 rgba(244, 67, 54, 0.14), 0 1px 10px 0 rgba(244, 67, 54, 0.12), 0 2px 4px -1px rgba(244, 67, 54, 0.2); }

    .pagination .page-item .page-link:focus {
        box-shadow: none; }

    .nav-pills:not(.flex-column) .nav-item + .nav-item:not(:first-child) {
        margin-left: 5px; }

    .nav-pills.flex-column .nav-item + .nav-item {
        margin-top: 5px; }

    .nav-pills .nav-item .nav-link {
        line-height: 24px;
        text-transform: uppercase;
        font-size: 12px;
        font-weight: 500;
        min-width: 100px;
        text-align: center;
        color: #555;
        -webkit-transition: all .3s;
        transition: all .3s;
        border-radius: 30px;
        padding: 10px 15px; }
    .nav-pills .nav-item .nav-link:hover {
        background-color: rgba(200, 200, 200, 0.2); }
    .nav-pills .nav-item .nav-link.active {
        color: #fff;
        background-color: #9c27b0;
        box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.2), 0 13px 24px -11px rgba(156, 39, 176, 0.6); }

    .nav-pills .nav-item i {
        display: block;
        font-size: 30px;
        padding: 15px 0; }

    .nav-pills.nav-pills-info .nav-item .nav-link.active, .nav-pills.nav-pills-info .nav-item .nav-link.active:focus, .nav-pills.nav-pills-info .nav-item .nav-link.active:hover {
        background-color: #00bcd4;
        box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.2), 0 13px 24px -11px rgba(0, 188, 212, 0.6);
        color: #fff; }

    .nav-pills.nav-pills-rose .nav-item .nav-link.active, .nav-pills.nav-pills-rose .nav-item .nav-link.active:focus, .nav-pills.nav-pills-rose .nav-item .nav-link.active:hover {
        background-color: #e91e63;
        box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.2), 0 13px 24px -11px rgba(233, 30, 99, 0.6);
        color: #fff; }

    .nav-pills.nav-pills-success .nav-item .nav-link.active, .nav-pills.nav-pills-success .nav-item .nav-link.active:focus, .nav-pills.nav-pills-success .nav-item .nav-link.active:hover {
        background-color: #4caf50;
        box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.2), 0 13px 24px -11px rgba(76, 175, 80, 0.6);
        color: #fff; }

    .nav-pills.nav-pills-warning .nav-item .nav-link.active, .nav-pills.nav-pills-warning .nav-item .nav-link.active:focus, .nav-pills.nav-pills-warning .nav-item .nav-link.active:hover {
        background-color: #ff9800;
        box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.2), 0 13px 24px -11px rgba(255, 152, 0, 0.6);
        color: #fff; }

    .nav-pills.nav-pills-danger .nav-item .nav-link.active, .nav-pills.nav-pills-danger .nav-item .nav-link.active:focus, .nav-pills.nav-pills-danger .nav-item .nav-link.active:hover {
        background-color: #f44336;
        box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.2), 0 13px 24px -11px rgba(244, 67, 54, 0.6);
        color: #fff; }

    .nav-pills.nav-pills-icons .nav-item .nav-link {
        border-radius: 4px; }

    .tab-space {
        padding: 20px 0 50px 0px; }

    .info {
        max-width: 360px;
        margin: 0 auto;
        padding: 70px 0 30px; }
    .info .icon {
        color: #999999; }
    .info .icon > i {
        font-size: 3.85rem; }
    .info .info-title {
        color: #3C4858;
        margin: 1.75rem 0 0.875rem; }
    .info p {
        color: #999999; }

    .info-horizontal .icon {
        float: left;
        margin-top: 24px;
        margin-right: 10px; }
    .info-horizontal .icon > i {
        font-size: 2.25rem; }

    .info-horizontal .description {
        overflow: hidden; }

    .icon.icon-primary {
        color: #9c27b0; }

    .icon.icon-info {
        color: #00bcd4; }

    .icon.icon-success {
        color: #4caf50; }

    .icon.icon-warning {
        color: #ff9800; }

    .icon.icon-danger {
        color: #f44336; }

    .icon.icon-rose {
        color: #e91e63; }

    body, h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4 {
        font-family: "Roboto", "Helvetica", "Arial", sans-serif;
        font-weight: 300;
        line-height: 1.5em; }

    h1, h2, h3, .h1, .h2, .h3 {
        margin-top: 20px;
        margin-bottom: 10px; }

    h4, h5, h6, .h4, .h5, .h6 {
        margin-top: 10px;
        margin-bottom: 10px; }

    html * {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale; }

    h1, .h1 {
        font-size: 3.3125rem;
        line-height: 1.15em; }

    h2, .h2 {
        font-size: 2.25rem;
        line-height: 1.5em; }

    h3, .h3 {
        font-size: 1.5625rem;
        line-height: 1.4em; }

    h4, .h4 {
        font-size: 1.125rem;
        line-height: 1.5em; }

    h5, .h5 {
        font-size: 1.0625rem;
        line-height: 1.55em;
        margin-bottom: 15px; }

    h6, .h6 {
        font-size: 0.75rem;
        text-transform: uppercase;
        font-weight: 500; }

    p {
        font-size: 14px;
        margin: 0 0 10px; }

    b {
        font-weight: 700; }

    small,
    .small {
        font-size: 75%;
        color: #777; }

    .title,
    .card-title,
    .info-title,
    .footer-brand,
    .footer-big h5,
    .footer-big h4,
    .media .media-heading {
        font-weight: 700;
        font-family: "Roboto Slab", "Times New Roman", serif; }
    .title,
    .title a,
    .card-title,
    .card-title a,
    .info-title,
    .info-title a,
    .footer-brand,
    .footer-brand a,
    .footer-big h5,
    .footer-big h5 a,
    .footer-big h4,
    .footer-big h4 a,
    .media .media-heading,
    .media .media-heading a {
        color: #3C4858;
        text-decoration: none; }

    h2.title {
        margin-bottom: 1rem; }

    .description,
    .card-description,
    .footer-big p {
        color: #999; }

    .text-warning {
        color: #ff9800 !important; }

    .text-primary {
        color: #9c27b0 !important; }

    .text-danger {
        color: #f44336 !important; }

    .text-success {
        color: #4caf50 !important; }

    .text-info {
        color: #00bcd4 !important; }

    .text-rose {
        color: #e91e63 !important; }

    .text-gray {
        color: #999999 !important; }

    .space {
        height: 130px;
        display: block; }

    .space-110 {
        height: 110px;
        display: block; }

    .space-50 {
        height: 50px;
        display: block; }

    .space-70 {
        height: 70px;
        display: block; }

    .blockquote {
        padding: 10px 20px;
        margin: 0 0 20px;
        border-left: 5px solid #eee; }
    .blockquote p {
        font-size: 1.063rem;
        font-style: italic; }
    .blockquote small {
        display: block;
        font-size: 80%;
        line-height: 1.42857143;
        color: #777; }

    .nav-tabs {
        border: 0;
        border-radius: 3px;
        padding: 0 15px; }
    .nav-tabs .nav-item .nav-link {
        color: #fff;
        border: 0;
        margin: 0;
        border-radius: 3px;
        line-height: 24px;
        text-transform: uppercase;
        font-size: 12px;
        padding: 10px 15px;
        background-color: transparent;
        -webkit-transition: 0.3s background-color 0s;
        transition: 0.3s background-color 0s; }
    .nav-tabs .nav-item .nav-link:hover {
        border: 0; }
    .nav-tabs .nav-item .nav-link,
    .nav-tabs .nav-item .nav-link:hover,
    .nav-tabs .nav-item .nav-link:focus {
        border: 0 !important;
        color: #fff !important;
        font-weight: 500; }
    .nav-tabs .nav-item.disabled .nav-link,
    .nav-tabs .nav-item.disabled .nav-link:hover {
        color: rgba(255, 255, 255, 0.5); }
    .nav-tabs .nav-item .material-icons {
        margin: -1px 5px 0 0; }
    .nav-tabs .nav-item .nav-link.active {
        background-color: rgba(255, 255, 255, 0.2);
        -webkit-transition: 0.3s background-color 0.2s;
        transition: 0.3s background-color 0.2s; }

    .nav-tabs .nav-link {
        border-bottom: 0.214rem solid transparent; }

    .nav-tabs .nav-link {
        color: #555; }
    .nav-tabs .nav-link.active {
        color: rgba(0, 0, 0, 0.87);
        border-color: #9c27b0; }
    .nav-tabs .nav-link.active:hover, .nav-tabs .nav-link.active:focus {
        border-color: #9c27b0; }
    .nav-tabs .nav-link.disabled {
        color: #999; }
    .nav-tabs .nav-link.disabled, .nav-tabs .nav-link.disabled:hover, .nav-tabs .nav-link.disabled:focus {
        color: #999; }

    .nav-tabs.header-primary .nav-link {
        color: white; }
    .nav-tabs.header-primary .nav-link.active {
        color: #fff;
        border-color: #fff; }
    .nav-tabs.header-primary .nav-link.active:hover, .nav-tabs.header-primary .nav-link.active:focus {
        border-color: #fff; }
    .nav-tabs.header-primary .nav-link.disabled {
        color: rgba(255, 255, 255, 0.84); }
    .nav-tabs.header-primary .nav-link.disabled, .nav-tabs.header-primary .nav-link.disabled:hover, .nav-tabs.header-primary .nav-link.disabled:focus {
        color: rgba(255, 255, 255, 0.84); }

    .nav-tabs.bg-inverse .nav-link {
        color: white; }
    .nav-tabs.bg-inverse .nav-link.active {
        color: #fff;
        border-color: #fff; }
    .nav-tabs.bg-inverse .nav-link.active:hover, .nav-tabs.bg-inverse .nav-link.active:focus {
        border-color: #fff; }
    .nav-tabs.bg-inverse .nav-link.disabled {
        color: rgba(255, 255, 255, 0.84); }
    .nav-tabs.bg-inverse .nav-link.disabled, .nav-tabs.bg-inverse .nav-link.disabled:hover, .nav-tabs.bg-inverse .nav-link.disabled:focus {
        color: rgba(255, 255, 255, 0.84); }

    .card-nav-tabs {
        margin-top: 45px; }
    .card-nav-tabs .card-header {
        margin-top: -30px !important; }

    .tooltip-arrow {
        display: none; }

    .tooltip.show {
        opacity: 1;
        -webkit-transform: translate3d(0, 0px, 0);
        transform: translate3d(0, 0px, 0); }

    .tooltip {
        opacity: 0;
        -webkit-transition: opacity, -webkit-transform .2s ease;
        transition: opacity, -webkit-transform .2s ease;
        transition: opacity, transform .2s ease;
        transition: opacity, transform .2s ease, -webkit-transform .2s ease;
        -webkit-transform: translate3d(0, 5px, 0);
        transform: translate3d(0, 5px, 0);
        font-size: 0.875rem; }
    .tooltip.bs-tooltip-top .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="top"] .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="top"] .arrow::before {
        border-top-color: #fff; }
    .tooltip.bs-tooltip-right .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="right"] .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="right"] .arrow::before {
        border-right-color: #fff; }
    .tooltip.bs-tooltip-left .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="left"] .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="left"] .arrow::before {
        border-left-color: #fff; }
    .tooltip.bs-tooltip-bottom .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="bottom"] .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
        border-bottom-color: #fff; }

    .tooltip-inner {
        padding: 10px 15px;
        min-width: 130px; }

    .popover, .tooltip-inner {
        line-height: 1.5em;
        background: #fff;
        border: none;
        border-radius: 3px;
        box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2);
        color: #555; }

    .popover {
        padding: 0;
        box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); }
    .popover.left > .arrow, .popover.right > .arrow, .popover.top > .arrow, .popover.bottom > .arrow {
        border: none; }
    .popover.bs-popover-top .arrow::before, .popover.bs-popover-auto[x-placement^="top"] .arrow::before, .popover.bs-popover-auto[x-placement^="top"] .arrow::before, .popover.bs-popover-bottom .arrow::before, .popover.bs-popover-auto[x-placement^="bottom"] .arrow::before, .popover.bs-popover-auto[x-placement^="bottom"] .arrow::before, .popover.bs-popover-right .arrow::before, .popover.bs-popover-auto[x-placement^="right"] .arrow::before, .popover.bs-popover-auto[x-placement^="right"] .arrow::before, .popover.bs-popover-left .arrow::before, .popover.bs-popover-auto[x-placement^="left"] .arrow::before, .popover.bs-popover-auto[x-placement^="left"] .arrow::before {
        border: 0; }

    .popover-header {
        background-color: #fff;
        border: none;
        padding: 15px 15px 5px;
        font-size: 1.125rem;
        margin: 0;
        color: #555; }

    .popover-body {
        padding: 10px 15px 15px;
        line-height: 1.4;
        color: #555; }

    .modal-dialog .modal-content {
        box-shadow: 0 27px 24px 0 rgba(0, 0, 0, 0.2), 0 40px 77px 0 rgba(0, 0, 0, 0.22);
        border-radius: 6px;
        border: none; }
    .modal-dialog .modal-content .card-signup {
        margin: 0; }
    .modal-dialog .modal-content .card-signup .modal-header {
        padding-top: 0; }

    .modal-dialog .modal-header {
        border-bottom: none;
        padding-top: 24px;
        padding-right: 24px;
        padding-bottom: 0;
        padding-left: 24px; }

    .modal-dialog .modal-body {
        padding-top: 24px;
        padding-right: 24px;
        padding-bottom: 16px;
        padding-left: 24px; }

    .modal-dialog .modal-footer {
        border-top: none;
        padding: 24px; }
    .modal-dialog .modal-footer.text-center {
        text-align: center; }
    .modal-dialog .modal-footer button {
        margin: 0;
        padding-left: 16px;
        padding-right: 16px;
        width: auto; }
    .modal-dialog .modal-footer button.pull-left {
        padding-left: 5px;
        padding-right: 5px;
        position: relative;
        left: -5px; }

    .modal-dialog .modal-body + .modal-footer {
        padding-top: 0; }

    .modal-backdrop {
        background: rgba(0, 0, 0, 0.5); }

    .modal .modal-dialog {
        margin-top: 130px; }

    .modal .modal-header .close {
        color: #999; }
    .modal .modal-header .close:hover, .modal .modal-header .close:focus {
        opacity: 1; }
    .modal .modal-header .close i {
        font-size: 16px; }

    .modal-login {
        max-width: 360px; }
    .modal-login .modal-header .close {
        color: #fff;
        top: -25px;
        right: 34px;
        text-shadow: none;
        position: absolute; }
    .modal-login .modal-header .card-header {
        width: 100%; }
    .modal-login .modal-header .card-header .social-line {
        margin-top: 1rem;
        text-align: center;
        padding: 0; }
    .modal-login .modal-header .card-header .social-line .btn {
        color: #fff;
        margin-left: 5px;
        margin-right: 5px; }
    .modal-login .modal-footer {
        padding-bottom: 0;
        padding-top: 0; }
    .modal-login .modal-body {
        padding-left: 4px;
        padding-bottom: 0;
        padding-top: 0; }
    .modal-login .modal-body .form .description {
        padding-top: 15px;
        margin-bottom: -10px; }
    .modal-login .card-signup {
        margin-bottom: 0; }

    .modal-signup {
        max-width: 900px; }
    .modal-signup .info-horizontal {
        padding: 0px 0px 20px; }
    .modal-signup .modal-title {
        text-align: center;
        width: 100%; }
    .modal-signup .modal-footer {
        padding: 0 5px; }
    .modal-signup .modal-header {
        padding-top: 0; }
    .modal-signup .modal-header .close {
        margin-top: -35px; }
    .modal-signup .card-signup {
        padding: 40px 0;
        margin-bottom: 0; }
    .modal-signup .card-signup .form-check {
        margin-left: 20px;
        padding-top: 27px; }
    .modal-signup .card-signup .form-check .form-check-label {
        padding-left: 35px; }
    .modal-signup .modal-body {
        padding-bottom: 0;
        padding-top: 0; }

    .modal-notice .instruction {
        margin-bottom: 25px; }

    .modal-notice .picture {
        max-width: 150px; }

    .modal-notice .modal-content .btn-raised {
        margin-bottom: 15px; }

    .modal-small {
        width: 300px;
        margin: 0 auto; }

    .dropdown:after {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg); }

    .dropdown.show > .dropdown-toggle:after {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg); }

    .dropdown-menu {
        display: none;
        padding: 0.3125rem 0;
        border: 0;
        opacity: 0;
        -webkit-transform: scale(0);
        transform: scale(0);
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
        will-change: transform, opacity;
        -webkit-transition: opacity 0.2s cubic-bezier(0.4, 0, 0.2, 1), -webkit-transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        transition: opacity 0.2s cubic-bezier(0.4, 0, 0.2, 1), -webkit-transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.2s cubic-bezier(0.4, 0, 0.2, 1), -webkit-transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26); }
    .dropdown-menu.showing {
        -webkit-animation-name: bmd-dropdown-animation;
        animation-name: bmd-dropdown-animation;
        -webkit-animation-duration: 0.3s;
        animation-duration: 0.3s;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
        -webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1); }
    .open > .dropdown-menu, .dropdown-menu.show {
        display: block;
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1); }
    .dropdown-menu.hiding {
        display: block;
        opacity: 0;
        -webkit-transform: scale(0);
        transform: scale(0); }
    .dropdown-menu[x-placement="bottom-start"] {
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0; }
    .dropdown-menu[x-placement="bottom-end"] {
        -webkit-transform-origin: 100% 0;
        transform-origin: 100% 0; }
    .dropdown-menu[x-placement="top-start"] {
        -webkit-transform-origin: 0 100%;
        transform-origin: 0 100%; }
    .dropdown-menu[x-placement="top-end"] {
        -webkit-transform-origin: 100% 100%;
        transform-origin: 100% 100%; }
    .dropdown-menu .disabled > a {
        color: #777; }
    .dropdown-menu .disabled > a:focus, .dropdown-menu .disabled > a:hover {
        text-decoration: none;
        background-color: transparent;
        background-image: none;
        color: #777; }
    .dropdown-menu.dropdown-with-icons .dropdown-item {
        padding: 0.75rem 1.25rem 0.75rem 0.75rem; }
    .dropdown-menu.dropdown-with-icons .dropdown-item .material-icons {
        vertical-align: middle;
        font-size: 24px;
        position: relative;
        margin-top: -4px;
        top: 1px;
        margin-right: 12px;
        opacity: .5; }
    .dropdown-menu .dropdown-item,
    .dropdown-menu li > a {
        position: relative;
        width: auto;
        display: -webkit-box;
        display: flex;
        flex-flow: nowrap;
        -webkit-box-align: center;
        align-items: center;
        color: #333;
        font-weight: normal;
        text-decoration: none;
        font-size: .8125rem;
        border-radius: 0.125rem;
        margin: 0 0.3125rem;
        -webkit-transition: all 150ms linear;
        transition: all 150ms linear;
        min-width: 7rem;
        padding: 0.625rem 1.25rem;
        overflow: hidden;
        line-height: 1.42857;
        text-overflow: ellipsis;
        word-wrap: break-word; }
    @media (min-width: 768px) {
        .dropdown-menu .dropdown-item,
        .dropdown-menu li > a {
            padding-right: 1.5rem;
            padding-left: 1.5rem; } }
    .dropdown-menu .dropdown-item:hover,
    .dropdown-menu .dropdown-item:focus,
    .dropdown-menu .dropdown-item:active,
    .dropdown-menu a:active,
    .dropdown-menu a.active,
    .dropdown-menu a:hover,
    .dropdown-menu a:focus,
    .dropdown-menu a:active {
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4);
        background-color: #9c27b0 !important;
        color: #ffffff !important; }

    .dropdown-toggle.bmd-btn-icon::after, .dropdown-toggle.bmd-btn-fab::after {
        display: none; }

    .dropdown-toggle.bmd-btn-icon ~ .dropdown-menu.dropdown-menu-top-left, .dropdown-toggle.bmd-btn-icon ~ .dropdown-menu.dropdown-menu-top-right, .dropdown-toggle.bmd-btn-fab ~ .dropdown-menu.dropdown-menu-top-left, .dropdown-toggle.bmd-btn-fab ~ .dropdown-menu.dropdown-menu-top-right {
        bottom: 2rem; }

    .dropdown-toggle:after {
        will-change: transform;
        -webkit-transition: -webkit-transform 150ms linear;
        transition: -webkit-transform 150ms linear;
        transition: transform 150ms linear;
        transition: transform 150ms linear, -webkit-transform 150ms linear;
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg); }

    .dropdown-toggle.open:after {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg); }

    .dropdown-toggle.bmd-btn-fab-sm ~ .dropdown-menu.dropdown-menu-top-left, .dropdown-toggle.bmd-btn-fab-sm ~ .dropdown-menu.dropdown-menu-top-right {
        bottom: 2.5rem; }

    .dropdown-toggle.bmd-btn-icon ~ .dropdown-menu {
        margin: 0; }

    .dropdown-header {
        font-size: 0.75rem;
        padding-top: 0.1875rem;
        padding-bottom: 0.1875rem;
        text-transform: none;
        color: #777;
        line-height: 1.42857;
        font-weight: inherit; }

    @-webkit-keyframes bmd-dropdown-animation {
        from {
            opacity: 0;
            -webkit-transform: scale(0);
            transform: scale(0); }
        to {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1); } }

    @keyframes bmd-dropdown-animation {
        from {
            opacity: 0;
            -webkit-transform: scale(0);
            transform: scale(0); }
        to {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1); } }

    .dropdown-menu.bootstrap-datetimepicker-widget {
        opacity: 0;
        -webkit-transform: scale(0);
        transform: scale(0);
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
        will-change: transform, opacity;
        top: 0; }

    .dropdown-menu.bootstrap-datetimepicker-widget.top {
        -webkit-transform-origin: 0 100%;
        transform-origin: 0 100%; }

    .dropdown-menu.bootstrap-datetimepicker-widget.open {
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
        top: 0; }

    .bmd-layout-drawer {
        position: absolute;
        z-index: 5;
        box-sizing: border-box;
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        flex-wrap: nowrap;
        max-height: 100%;
        overflow: visible;
        overflow-y: auto;
        font-size: .875rem;
        -webkit-transition: -webkit-transform;
        transition: -webkit-transform;
        transition: transform;
        transition: transform, -webkit-transform;
        will-change: transform;
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
        -webkit-transition-duration: 0.2s;
        transition-duration: 0.2s;
        -webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); }
    .bmd-layout-drawer > * {
        flex-shrink: 0; }
    .bmd-layout-drawer > header {
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        -webkit-box-pack: end;
        justify-content: flex-end;
        padding: 1rem; }
    .bmd-layout-drawer > header .navbar-brand {
        padding-left: 1.5rem;
        font-size: 1.25rem; }
    .bmd-layout-drawer > .list-group {
        padding-top: 1rem; }
    .bmd-layout-drawer > .list-group .list-group-item {
        padding-right: 2.5rem;
        padding-left: 2.5rem;
        font-size: .8125rem;
        font-weight: 500; }

    .bmd-drawer-f-l > .bmd-layout-drawer {
        top: 0;
        left: 0;
        width: 240px;
        height: 100%;
        -webkit-transform: translateX(-250px);
        transform: translateX(-250px); }

    .bmd-drawer-f-l > .bmd-layout-header,
    .bmd-drawer-f-l > .bmd-layout-content {
        margin-left: 0; }

    .bmd-drawer-f-r > .bmd-layout-drawer {
        top: 0;
        right: 0;
        width: 240px;
        height: 100%;
        -webkit-transform: translateX(250px);
        transform: translateX(250px); }

    .bmd-drawer-f-r > .bmd-layout-header,
    .bmd-drawer-f-r > .bmd-layout-content {
        margin-right: 0; }

    .bmd-drawer-f-t > .bmd-layout-drawer {
        top: 0;
        left: 0;
        width: 100%;
        height: 100px;
        -webkit-transform: translateY(-110px);
        transform: translateY(-110px); }

    .bmd-drawer-f-t > .bmd-layout-content {
        margin-top: 0; }

    .bmd-drawer-f-b > .bmd-layout-drawer {
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100px;
        -webkit-transform: translateY(110px);
        transform: translateY(110px); }

    .bmd-drawer-f-b > .bmd-layout-content {
        margin-bottom: 0; }

    :not(.bmd-drawer-out) .bmd-drawer-in .bmd-drawer-f-l > .bmd-layout-header {
        width: calc(100% - 240px);
        margin-left: 240px; }

    :not(.bmd-drawer-out) .bmd-drawer-in .bmd-drawer-f-l > .bmd-layout-drawer {
        -webkit-transform: translateX(0);
        transform: translateX(0); }

    :not(.bmd-drawer-out) .bmd-drawer-in .bmd-drawer-f-l > .bmd-layout-content {
        margin-left: 240px; }

    :not(.bmd-drawer-out) .bmd-drawer-in .bmd-drawer-f-r > .bmd-layout-header {
        width: calc(100% - 240px);
        margin-right: 240px; }

    :not(.bmd-drawer-out) .bmd-drawer-in .bmd-drawer-f-r > .bmd-layout-drawer {
        -webkit-transform: translateX(0);
        transform: translateX(0); }

    :not(.bmd-drawer-out) .bmd-drawer-in .bmd-drawer-f-r > .bmd-layout-content {
        margin-right: 240px; }

    :not(.bmd-drawer-out) .bmd-drawer-in .bmd-drawer-f-t > .bmd-layout-header {
        margin-top: 100px; }

    :not(.bmd-drawer-out) .bmd-drawer-in .bmd-drawer-f-t > .bmd-layout-drawer {
        -webkit-transform: translateY(0);
        transform: translateY(0); }

    :not(.bmd-drawer-out) .bmd-drawer-in .bmd-drawer-f-b > .bmd-layout-drawer {
        -webkit-transform: translateY(0);
        transform: translateY(0); }

    :not(.bmd-drawer-out) .bmd-drawer-in .bmd-drawer-f-b > .bmd-layout-content {
        margin-bottom: 100px; }

    :not(.bmd-drawer-out) .bmd-drawer-overlay.bmd-drawer-overlay > .bmd-layout-backdrop .in {
        visibility: visible;
        background-color: rgba(0, 0, 0, 0.5); }

    @supports (pointer-events: auto) {
        :not(.bmd-drawer-out) .bmd-drawer-overlay.bmd-drawer-overlay > .bmd-layout-backdrop.in {
            pointer-events: auto;
            opacity: 1; } }

    :not(.bmd-drawer-out) .bmd-drawer-overlay.bmd-drawer-overlay .bmd-drawer-f-l > .bmd-layout-header,
    :not(.bmd-drawer-out) .bmd-drawer-overlay.bmd-drawer-overlay .bmd-drawer-f-l > .bmd-layout-content {
        width: 100%;
        margin-left: 0; }

    :not(.bmd-drawer-out) .bmd-drawer-overlay.bmd-drawer-overlay .bmd-drawer-f-r > .bmd-layout-header,
    :not(.bmd-drawer-out) .bmd-drawer-overlay.bmd-drawer-overlay .bmd-drawer-f-r > .bmd-layout-content {
        width: 100%;
        margin-right: 0; }

    :not(.bmd-drawer-out) .bmd-drawer-overlay.bmd-drawer-overlay > .bmd-layout-backdrop .in {
        visibility: visible;
        background-color: rgba(0, 0, 0, 0.5); }

    @supports (pointer-events: auto) {
        :not(.bmd-drawer-out) .bmd-drawer-overlay.bmd-drawer-overlay > .bmd-layout-backdrop.in {
            pointer-events: auto;
            opacity: 1; } }

    :not(.bmd-drawer-out) .bmd-drawer-overlay.bmd-drawer-overlay .bmd-drawer-f-t > .bmd-layout-header {
        margin-top: 0; }

    :not(.bmd-drawer-out) .bmd-drawer-overlay.bmd-drawer-overlay .bmd-drawer-f-b > .bmd-layout-content {
        margin-bottom: 0; }

    @media (min-width: 576px) {
        :not(.bmd-drawer-out) .bmd-drawer-in-sm-up .bmd-drawer-f-l > .bmd-layout-header {
            width: calc(100% - 240px);
            margin-left: 240px; }
        :not(.bmd-drawer-out) .bmd-drawer-in-sm-up .bmd-drawer-f-l > .bmd-layout-drawer {
            -webkit-transform: translateX(0);
            transform: translateX(0); }
        :not(.bmd-drawer-out) .bmd-drawer-in-sm-up .bmd-drawer-f-l > .bmd-layout-content {
            margin-left: 240px; }
        :not(.bmd-drawer-out) .bmd-drawer-in-sm-up .bmd-drawer-f-r > .bmd-layout-header {
            width: calc(100% - 240px);
            margin-right: 240px; }
        :not(.bmd-drawer-out) .bmd-drawer-in-sm-up .bmd-drawer-f-r > .bmd-layout-drawer {
            -webkit-transform: translateX(0);
            transform: translateX(0); }
        :not(.bmd-drawer-out) .bmd-drawer-in-sm-up .bmd-drawer-f-r > .bmd-layout-content {
            margin-right: 240px; } }

    @media (min-width: 576px) {
        :not(.bmd-drawer-out) .bmd-drawer-in-sm-up .bmd-drawer-f-t > .bmd-layout-header {
            margin-top: 100px; }
        :not(.bmd-drawer-out) .bmd-drawer-in-sm-up .bmd-drawer-f-t > .bmd-layout-drawer {
            -webkit-transform: translateY(0);
            transform: translateY(0); }
        :not(.bmd-drawer-out) .bmd-drawer-in-sm-up .bmd-drawer-f-b > .bmd-layout-drawer {
            -webkit-transform: translateY(0);
            transform: translateY(0); }
        :not(.bmd-drawer-out) .bmd-drawer-in-sm-up .bmd-drawer-f-b > .bmd-layout-content {
            margin-bottom: 100px; } }

    @media (max-width: 767.98px) {
        :not(.bmd-drawer-out) .bmd-drawer-overlay-sm-down > .bmd-layout-backdrop .in {
            visibility: visible;
            background-color: rgba(0, 0, 0, 0.5); }
        @supports (pointer-events: auto) {
            :not(.bmd-drawer-out) .bmd-drawer-overlay-sm-down > .bmd-layout-backdrop.in {
                pointer-events: auto;
                opacity: 1; } }
        :not(.bmd-drawer-out) .bmd-drawer-overlay-sm-down .bmd-drawer-f-l > .bmd-layout-header,
        :not(.bmd-drawer-out) .bmd-drawer-overlay-sm-down .bmd-drawer-f-l > .bmd-layout-content {
            width: 100%;
            margin-left: 0; }
        :not(.bmd-drawer-out) .bmd-drawer-overlay-sm-down .bmd-drawer-f-r > .bmd-layout-header,
        :not(.bmd-drawer-out) .bmd-drawer-overlay-sm-down .bmd-drawer-f-r > .bmd-layout-content {
            width: 100%;
            margin-right: 0; } }

    @media (max-width: 767.98px) {
        :not(.bmd-drawer-out) .bmd-drawer-overlay-sm-down > .bmd-layout-backdrop .in {
            visibility: visible;
            background-color: rgba(0, 0, 0, 0.5); }
        @supports (pointer-events: auto) {
            :not(.bmd-drawer-out) .bmd-drawer-overlay-sm-down > .bmd-layout-backdrop.in {
                pointer-events: auto;
                opacity: 1; } }
        :not(.bmd-drawer-out) .bmd-drawer-overlay-sm-down .bmd-drawer-f-t > .bmd-layout-header {
            margin-top: 0; }
        :not(.bmd-drawer-out) .bmd-drawer-overlay-sm-down .bmd-drawer-f-b > .bmd-layout-content {
            margin-bottom: 0; } }

    @media (min-width: 768px) {
        :not(.bmd-drawer-out) .bmd-drawer-in-md-up .bmd-drawer-f-l > .bmd-layout-header {
            width: calc(100% - 240px);
            margin-left: 240px; }
        :not(.bmd-drawer-out) .bmd-drawer-in-md-up .bmd-drawer-f-l > .bmd-layout-drawer {
            -webkit-transform: translateX(0);
            transform: translateX(0); }
        :not(.bmd-drawer-out) .bmd-drawer-in-md-up .bmd-drawer-f-l > .bmd-layout-content {
            margin-left: 240px; }
        :not(.bmd-drawer-out) .bmd-drawer-in-md-up .bmd-drawer-f-r > .bmd-layout-header {
            width: calc(100% - 240px);
            margin-right: 240px; }
        :not(.bmd-drawer-out) .bmd-drawer-in-md-up .bmd-drawer-f-r > .bmd-layout-drawer {
            -webkit-transform: translateX(0);
            transform: translateX(0); }
        :not(.bmd-drawer-out) .bmd-drawer-in-md-up .bmd-drawer-f-r > .bmd-layout-content {
            margin-right: 240px; } }

    @media (min-width: 768px) {
        :not(.bmd-drawer-out) .bmd-drawer-in-md-up .bmd-drawer-f-t > .bmd-layout-header {
            margin-top: 100px; }
        :not(.bmd-drawer-out) .bmd-drawer-in-md-up .bmd-drawer-f-t > .bmd-layout-drawer {
            -webkit-transform: translateY(0);
            transform: translateY(0); }
        :not(.bmd-drawer-out) .bmd-drawer-in-md-up .bmd-drawer-f-b > .bmd-layout-drawer {
            -webkit-transform: translateY(0);
            transform: translateY(0); }
        :not(.bmd-drawer-out) .bmd-drawer-in-md-up .bmd-drawer-f-b > .bmd-layout-content {
            margin-bottom: 100px; } }

    @media (max-width: 991.98px) {
        :not(.bmd-drawer-out) .bmd-drawer-overlay-md-down > .bmd-layout-backdrop .in {
            visibility: visible;
            background-color: rgba(0, 0, 0, 0.5); }
        @supports (pointer-events: auto) {
            :not(.bmd-drawer-out) .bmd-drawer-overlay-md-down > .bmd-layout-backdrop.in {
                pointer-events: auto;
                opacity: 1; } }
        :not(.bmd-drawer-out) .bmd-drawer-overlay-md-down .bmd-drawer-f-l > .bmd-layout-header,
        :not(.bmd-drawer-out) .bmd-drawer-overlay-md-down .bmd-drawer-f-l > .bmd-layout-content {
            width: 100%;
            margin-left: 0; }
        :not(.bmd-drawer-out) .bmd-drawer-overlay-md-down .bmd-drawer-f-r > .bmd-layout-header,
        :not(.bmd-drawer-out) .bmd-drawer-overlay-md-down .bmd-drawer-f-r > .bmd-layout-content {
            width: 100%;
            margin-right: 0; } }

    @media (max-width: 991.98px) {
        :not(.bmd-drawer-out) .bmd-drawer-overlay-md-down > .bmd-layout-backdrop .in {
            visibility: visible;
            background-color: rgba(0, 0, 0, 0.5); }
        @supports (pointer-events: auto) {
            :not(.bmd-drawer-out) .bmd-drawer-overlay-md-down > .bmd-layout-backdrop.in {
                pointer-events: auto;
                opacity: 1; } }
        :not(.bmd-drawer-out) .bmd-drawer-overlay-md-down .bmd-drawer-f-t > .bmd-layout-header {
            margin-top: 0; }
        :not(.bmd-drawer-out) .bmd-drawer-overlay-md-down .bmd-drawer-f-b > .bmd-layout-content {
            margin-bottom: 0; } }

    @media (min-width: 992px) {
        :not(.bmd-drawer-out) .bmd-drawer-in-lg-up .bmd-drawer-f-l > .bmd-layout-header {
            width: calc(100% - 240px);
            margin-left: 240px; }
        :not(.bmd-drawer-out) .bmd-drawer-in-lg-up .bmd-drawer-f-l > .bmd-layout-drawer {
            -webkit-transform: translateX(0);
            transform: translateX(0); }
        :not(.bmd-drawer-out) .bmd-drawer-in-lg-up .bmd-drawer-f-l > .bmd-layout-content {
            margin-left: 240px; }
        :not(.bmd-drawer-out) .bmd-drawer-in-lg-up .bmd-drawer-f-r > .bmd-layout-header {
            width: calc(100% - 240px);
            margin-right: 240px; }
        :not(.bmd-drawer-out) .bmd-drawer-in-lg-up .bmd-drawer-f-r > .bmd-layout-drawer {
            -webkit-transform: translateX(0);
            transform: translateX(0); }
        :not(.bmd-drawer-out) .bmd-drawer-in-lg-up .bmd-drawer-f-r > .bmd-layout-content {
            margin-right: 240px; } }

    @media (min-width: 992px) {
        :not(.bmd-drawer-out) .bmd-drawer-in-lg-up .bmd-drawer-f-t > .bmd-layout-header {
            margin-top: 100px; }
        :not(.bmd-drawer-out) .bmd-drawer-in-lg-up .bmd-drawer-f-t > .bmd-layout-drawer {
            -webkit-transform: translateY(0);
            transform: translateY(0); }
        :not(.bmd-drawer-out) .bmd-drawer-in-lg-up .bmd-drawer-f-b > .bmd-layout-drawer {
            -webkit-transform: translateY(0);
            transform: translateY(0); }
        :not(.bmd-drawer-out) .bmd-drawer-in-lg-up .bmd-drawer-f-b > .bmd-layout-content {
            margin-bottom: 100px; } }

    @media (max-width: 1199.98px) {
        :not(.bmd-drawer-out) .bmd-drawer-overlay-lg-down > .bmd-layout-backdrop .in {
            visibility: visible;
            background-color: rgba(0, 0, 0, 0.5); }
        @supports (pointer-events: auto) {
            :not(.bmd-drawer-out) .bmd-drawer-overlay-lg-down > .bmd-layout-backdrop.in {
                pointer-events: auto;
                opacity: 1; } }
        :not(.bmd-drawer-out) .bmd-drawer-overlay-lg-down .bmd-drawer-f-l > .bmd-layout-header,
        :not(.bmd-drawer-out) .bmd-drawer-overlay-lg-down .bmd-drawer-f-l > .bmd-layout-content {
            width: 100%;
            margin-left: 0; }
        :not(.bmd-drawer-out) .bmd-drawer-overlay-lg-down .bmd-drawer-f-r > .bmd-layout-header,
        :not(.bmd-drawer-out) .bmd-drawer-overlay-lg-down .bmd-drawer-f-r > .bmd-layout-content {
            width: 100%;
            margin-right: 0; } }

    @media (max-width: 1199.98px) {
        :not(.bmd-drawer-out) .bmd-drawer-overlay-lg-down > .bmd-layout-backdrop .in {
            visibility: visible;
            background-color: rgba(0, 0, 0, 0.5); }
        @supports (pointer-events: auto) {
            :not(.bmd-drawer-out) .bmd-drawer-overlay-lg-down > .bmd-layout-backdrop.in {
                pointer-events: auto;
                opacity: 1; } }
        :not(.bmd-drawer-out) .bmd-drawer-overlay-lg-down .bmd-drawer-f-t > .bmd-layout-header {
            margin-top: 0; }
        :not(.bmd-drawer-out) .bmd-drawer-overlay-lg-down .bmd-drawer-f-b > .bmd-layout-content {
            margin-bottom: 0; } }

    @media (min-width: 1200px) {
        :not(.bmd-drawer-out) .bmd-drawer-in-xl-up .bmd-drawer-f-l > .bmd-layout-header {
            width: calc(100% - 240px);
            margin-left: 240px; }
        :not(.bmd-drawer-out) .bmd-drawer-in-xl-up .bmd-drawer-f-l > .bmd-layout-drawer {
            -webkit-transform: translateX(0);
            transform: translateX(0); }
        :not(.bmd-drawer-out) .bmd-drawer-in-xl-up .bmd-drawer-f-l > .bmd-layout-content {
            margin-left: 240px; }
        :not(.bmd-drawer-out) .bmd-drawer-in-xl-up .bmd-drawer-f-r > .bmd-layout-header {
            width: calc(100% - 240px);
            margin-right: 240px; }
        :not(.bmd-drawer-out) .bmd-drawer-in-xl-up .bmd-drawer-f-r > .bmd-layout-drawer {
            -webkit-transform: translateX(0);
            transform: translateX(0); }
        :not(.bmd-drawer-out) .bmd-drawer-in-xl-up .bmd-drawer-f-r > .bmd-layout-content {
            margin-right: 240px; } }

    @media (min-width: 1200px) {
        :not(.bmd-drawer-out) .bmd-drawer-in-xl-up .bmd-drawer-f-t > .bmd-layout-header {
            margin-top: 100px; }
        :not(.bmd-drawer-out) .bmd-drawer-in-xl-up .bmd-drawer-f-t > .bmd-layout-drawer {
            -webkit-transform: translateY(0);
            transform: translateY(0); }
        :not(.bmd-drawer-out) .bmd-drawer-in-xl-up .bmd-drawer-f-b > .bmd-layout-drawer {
            -webkit-transform: translateY(0);
            transform: translateY(0); }
        :not(.bmd-drawer-out) .bmd-drawer-in-xl-up .bmd-drawer-f-b > .bmd-layout-content {
            margin-bottom: 100px; } }

    :not(.bmd-drawer-out) .bmd-drawer-overlay-xl-down > .bmd-layout-backdrop .in {
        visibility: visible;
        background-color: rgba(0, 0, 0, 0.5); }

    @supports (pointer-events: auto) {
        :not(.bmd-drawer-out) .bmd-drawer-overlay-xl-down > .bmd-layout-backdrop.in {
            pointer-events: auto;
            opacity: 1; } }

    :not(.bmd-drawer-out) .bmd-drawer-overlay-xl-down .bmd-drawer-f-l > .bmd-layout-header,
    :not(.bmd-drawer-out) .bmd-drawer-overlay-xl-down .bmd-drawer-f-l > .bmd-layout-content {
        width: 100%;
        margin-left: 0; }

    :not(.bmd-drawer-out) .bmd-drawer-overlay-xl-down .bmd-drawer-f-r > .bmd-layout-header,
    :not(.bmd-drawer-out) .bmd-drawer-overlay-xl-down .bmd-drawer-f-r > .bmd-layout-content {
        width: 100%;
        margin-right: 0; }

    :not(.bmd-drawer-out) .bmd-drawer-overlay-xl-down > .bmd-layout-backdrop .in {
        visibility: visible;
        background-color: rgba(0, 0, 0, 0.5); }

    @supports (pointer-events: auto) {
        :not(.bmd-drawer-out) .bmd-drawer-overlay-xl-down > .bmd-layout-backdrop.in {
            pointer-events: auto;
            opacity: 1; } }

    :not(.bmd-drawer-out) .bmd-drawer-overlay-xl-down .bmd-drawer-f-t > .bmd-layout-header {
        margin-top: 0; }

    :not(.bmd-drawer-out) .bmd-drawer-overlay-xl-down .bmd-drawer-f-b > .bmd-layout-content {
        margin-bottom: 0; }

    .progress {
        height: 4px;
        border-radius: 0;
        box-shadow: none;
        background: #DDDDDD;
        margin-bottom: 20px; }
    .progress .progress-bar {
        box-shadow: none; }
    .progress .progress-bar.progress-bar-primary {
        background: #9c27b0 !important; }
    .progress .progress-bar.progress-bar-info {
        background: #00bcd4; }
    .progress .progress-bar.progress-bar-success {
        background: #4caf50; }
    .progress .progress-bar.progress-bar-warning {
        background: #ff9800; }
    .progress .progress-bar.progress-bar-danger {
        background: #f44336; }
    .progress.progress-line-primary {
        background: rgba(156, 39, 176, 0.2); }
    .progress.progress-line-info {
        background: rgba(0, 188, 212, 0.2); }
    .progress.progress-line-success {
        background: rgba(76, 175, 80, 0.2); }
    .progress.progress-line-warning {
        background: rgba(255, 152, 0, 0.2); }
    .progress.progress-line-danger {
        background: rgba(244, 67, 54, 0.2); }

    .togglebutton {
        vertical-align: middle; }
    .togglebutton, .togglebutton label, .togglebutton input, .togglebutton .toggle {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none; }
    .togglebutton label {
        cursor: pointer;
        color: rgba(0,0,0, 0.26); }
    .form-group.is-focused .togglebutton label {
        color: rgba(0,0,0, 0.26); }
    .form-group.is-focused .togglebutton label:hover, .form-group.is-focused .togglebutton label:focus {
        color: rgba(0,0,0, .54); }
    fieldset[disabled] .form-group.is-focused .togglebutton label {
        color: rgba(0,0,0, 0.26); }
    .togglebutton label input[type=checkbox] {
        opacity: 0;
        width: 0;
        height: 0; }
    .togglebutton label .toggle {
        text-align: left;
        margin-left: 5px; }
    .togglebutton label .toggle,
    .togglebutton label input[type=checkbox][disabled] + .toggle {
        content: "";
        display: inline-block;
        width: 30px;
        height: 15px;
        background-color: rgba(80, 80, 80, 0.7);
        border-radius: 15px;
        margin-right: 15px;
        -webkit-transition: background 0.3s ease;
        transition: background 0.3s ease;
        vertical-align: middle; }
    .togglebutton label .toggle:after {
        content: "";
        display: inline-block;
        width: 20px;
        height: 20px;
        background-color: #FFFFFF;
        border-radius: 20px;
        position: relative;
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4);
        left: -5px;
        top: -2.5px;
        border: 1px solid rgba(0,0,0, .54);
        -webkit-transition: left 0.3s ease, background 0.3s ease, box-shadow 0.1s ease;
        transition: left 0.3s ease, background 0.3s ease, box-shadow 0.1s ease; }
    .togglebutton label input[type=checkbox][disabled] + .toggle:after,
    .togglebutton label input[type=checkbox][disabled]:checked + .toggle:after {
        background-color: #BDBDBD; }
    .togglebutton label input[type=checkbox] + .toggle:active:after,
    .togglebutton label input[type=checkbox][disabled] + .toggle:active:after {
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(0, 0, 0, 0.1); }
    .togglebutton label input[type=checkbox]:checked + .toggle:after {
        left: 15px; }
    .togglebutton label input[type=checkbox]:checked + .toggle {
        background-color: rgba(156, 39, 176, 0.7); }
    .togglebutton label input[type=checkbox]:checked + .toggle:after {
        border-color: #9c27b0; }
    .togglebutton label input[type=checkbox]:checked + .toggle:active:after {
        box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.4), 0 0 0 15px rgba(156, 39, 176, 0.1); }

    .ripple {
        position: relative; }

    .ripple-container {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
        width: 100%;
        height: 100%;
        overflow: hidden;
        pointer-events: none;
        border-radius: inherit; }
    .ripple-container .ripple-decorator {
        position: absolute;
        width: 20px;
        height: 20px;
        margin-top: -10px;
        margin-left: -10px;
        pointer-events: none;
        background-color: rgba(0, 0, 0, 0.05);
        border-radius: 100%;
        opacity: 0;
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-transform-origin: 50%;
        transform-origin: 50%; }
    .ripple-container .ripple-decorator.ripple-on {
        opacity: 0.1;
        -webkit-transition: opacity 0.15s ease-in 0s, -webkit-transform 0.5s cubic-bezier(0.4, 0, 0.2, 1) 0.1s;
        transition: opacity 0.15s ease-in 0s, -webkit-transform 0.5s cubic-bezier(0.4, 0, 0.2, 1) 0.1s;
        transition: opacity 0.15s ease-in 0s, transform 0.5s cubic-bezier(0.4, 0, 0.2, 1) 0.1s;
        transition: opacity 0.15s ease-in 0s, transform 0.5s cubic-bezier(0.4, 0, 0.2, 1) 0.1s, -webkit-transform 0.5s cubic-bezier(0.4, 0, 0.2, 1) 0.1s; }
    .ripple-container .ripple-decorator.ripple-out {
        opacity: 0;
        -webkit-transition: opacity 0.1s linear 0s !important;
        transition: opacity 0.1s linear 0s !important; }

    .btn.btn-facebook {
        color: #ffffff;
        background-color: #3b5998;
        border-color: #3b5998;
        box-shadow: 0 2px 2px 0 rgba(59, 89, 152, 0.14), 0 3px 1px -2px rgba(59, 89, 152, 0.2), 0 1px 5px 0 rgba(59, 89, 152, 0.12); }
    .btn.btn-facebook:hover {
        color: #ffffff;
        background-color: #37538d;
        border-color: #2a3f6c; }
    .btn.btn-facebook:focus, .btn.btn-facebook.focus, .btn.btn-facebook:hover {
        color: #ffffff;
        background-color: #37538d;
        border-color: #2a3f6c; }
    .btn.btn-facebook:active, .btn.btn-facebook.active,
    .open > .btn.btn-facebook.dropdown-toggle,
    .show > .btn.btn-facebook.dropdown-toggle {
        color: #ffffff;
        background-color: #37538d;
        border-color: #2a3f6c;
        box-shadow: 0 2px 2px 0 rgba(59, 89, 152, 0.14), 0 3px 1px -2px rgba(59, 89, 152, 0.2), 0 1px 5px 0 rgba(59, 89, 152, 0.12); }
    .btn.btn-facebook:active:hover, .btn.btn-facebook:active:focus, .btn.btn-facebook:active.focus, .btn.btn-facebook.active:hover, .btn.btn-facebook.active:focus, .btn.btn-facebook.active.focus,
    .open > .btn.btn-facebook.dropdown-toggle:hover,
    .open > .btn.btn-facebook.dropdown-toggle:focus,
    .open > .btn.btn-facebook.dropdown-toggle.focus,
    .show > .btn.btn-facebook.dropdown-toggle:hover,
    .show > .btn.btn-facebook.dropdown-toggle:focus,
    .show > .btn.btn-facebook.dropdown-toggle.focus {
        color: #ffffff;
        background-color: #37538d;
        border-color: #17233c; }
    .open > .btn.btn-facebook.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: #3b5998; }
    .open > .btn.btn-facebook.dropdown-toggle.bmd-btn-icon:hover {
        background-color: #37538d; }
    .btn.btn-facebook.disabled:focus, .btn.btn-facebook.disabled.focus, .btn.btn-facebook:disabled:focus, .btn.btn-facebook:disabled.focus {
        background-color: #3b5998;
        border-color: #3b5998; }
    .btn.btn-facebook.disabled:hover, .btn.btn-facebook:disabled:hover {
        background-color: #3b5998;
        border-color: #3b5998; }
    .btn.btn-facebook:focus, .btn.btn-facebook:active, .btn.btn-facebook:hover {
        box-shadow: 0 14px 26px -12px rgba(59, 89, 152, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(59, 89, 152, 0.2); }
    .btn.btn-facebook.btn-link {
        background-color: transparent;
        color: #3b5998;
        box-shadow: none; }
    .btn.btn-facebook.btn-link:hover, .btn.btn-facebook.btn-link:focus, .btn.btn-facebook.btn-link:active {
        background-color: transparent;
        color: #3b5998; }

    .btn.btn-twitter {
        color: #ffffff;
        background-color: #55acee;
        border-color: #55acee;
        box-shadow: 0 2px 2px 0 rgba(85, 172, 238, 0.14), 0 3px 1px -2px rgba(85, 172, 238, 0.2), 0 1px 5px 0 rgba(85, 172, 238, 0.12); }
    .btn.btn-twitter:hover {
        color: #ffffff;
        background-color: #47a5ed;
        border-color: #1d91e8; }
    .btn.btn-twitter:focus, .btn.btn-twitter.focus, .btn.btn-twitter:hover {
        color: #ffffff;
        background-color: #47a5ed;
        border-color: #1d91e8; }
    .btn.btn-twitter:active, .btn.btn-twitter.active,
    .open > .btn.btn-twitter.dropdown-toggle,
    .show > .btn.btn-twitter.dropdown-toggle {
        color: #ffffff;
        background-color: #47a5ed;
        border-color: #1d91e8;
        box-shadow: 0 2px 2px 0 rgba(85, 172, 238, 0.14), 0 3px 1px -2px rgba(85, 172, 238, 0.2), 0 1px 5px 0 rgba(85, 172, 238, 0.12); }
    .btn.btn-twitter:active:hover, .btn.btn-twitter:active:focus, .btn.btn-twitter:active.focus, .btn.btn-twitter.active:hover, .btn.btn-twitter.active:focus, .btn.btn-twitter.active.focus,
    .open > .btn.btn-twitter.dropdown-toggle:hover,
    .open > .btn.btn-twitter.dropdown-toggle:focus,
    .open > .btn.btn-twitter.dropdown-toggle.focus,
    .show > .btn.btn-twitter.dropdown-toggle:hover,
    .show > .btn.btn-twitter.dropdown-toggle:focus,
    .show > .btn.btn-twitter.dropdown-toggle.focus {
        color: #ffffff;
        background-color: #47a5ed;
        border-color: #126db2; }
    .open > .btn.btn-twitter.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: #55acee; }
    .open > .btn.btn-twitter.dropdown-toggle.bmd-btn-icon:hover {
        background-color: #47a5ed; }
    .btn.btn-twitter.disabled:focus, .btn.btn-twitter.disabled.focus, .btn.btn-twitter:disabled:focus, .btn.btn-twitter:disabled.focus {
        background-color: #55acee;
        border-color: #55acee; }
    .btn.btn-twitter.disabled:hover, .btn.btn-twitter:disabled:hover {
        background-color: #55acee;
        border-color: #55acee; }
    .btn.btn-twitter:focus, .btn.btn-twitter:active, .btn.btn-twitter:hover {
        box-shadow: 0 14px 26px -12px rgba(85, 172, 238, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(85, 172, 238, 0.2); }
    .btn.btn-twitter.btn-link {
        background-color: transparent;
        color: #55acee;
        box-shadow: none; }
    .btn.btn-twitter.btn-link:hover, .btn.btn-twitter.btn-link:focus, .btn.btn-twitter.btn-link:active {
        background-color: transparent;
        color: #55acee; }

    .btn.btn-pinterest {
        color: #ffffff;
        background-color: #cc2127;
        border-color: #cc2127;
        box-shadow: 0 2px 2px 0 rgba(204, 33, 39, 0.14), 0 3px 1px -2px rgba(204, 33, 39, 0.2), 0 1px 5px 0 rgba(204, 33, 39, 0.12); }
    .btn.btn-pinterest:hover {
        color: #ffffff;
        background-color: #bf1f24;
        border-color: #97181d; }
    .btn.btn-pinterest:focus, .btn.btn-pinterest.focus, .btn.btn-pinterest:hover {
        color: #ffffff;
        background-color: #bf1f24;
        border-color: #97181d; }
    .btn.btn-pinterest:active, .btn.btn-pinterest.active,
    .open > .btn.btn-pinterest.dropdown-toggle,
    .show > .btn.btn-pinterest.dropdown-toggle {
        color: #ffffff;
        background-color: #bf1f24;
        border-color: #97181d;
        box-shadow: 0 2px 2px 0 rgba(204, 33, 39, 0.14), 0 3px 1px -2px rgba(204, 33, 39, 0.2), 0 1px 5px 0 rgba(204, 33, 39, 0.12); }
    .btn.btn-pinterest:active:hover, .btn.btn-pinterest:active:focus, .btn.btn-pinterest:active.focus, .btn.btn-pinterest.active:hover, .btn.btn-pinterest.active:focus, .btn.btn-pinterest.active.focus,
    .open > .btn.btn-pinterest.dropdown-toggle:hover,
    .open > .btn.btn-pinterest.dropdown-toggle:focus,
    .open > .btn.btn-pinterest.dropdown-toggle.focus,
    .show > .btn.btn-pinterest.dropdown-toggle:hover,
    .show > .btn.btn-pinterest.dropdown-toggle:focus,
    .show > .btn.btn-pinterest.dropdown-toggle.focus {
        color: #ffffff;
        background-color: #bf1f24;
        border-color: #5e0f12; }
    .open > .btn.btn-pinterest.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: #cc2127; }
    .open > .btn.btn-pinterest.dropdown-toggle.bmd-btn-icon:hover {
        background-color: #bf1f24; }
    .btn.btn-pinterest.disabled:focus, .btn.btn-pinterest.disabled.focus, .btn.btn-pinterest:disabled:focus, .btn.btn-pinterest:disabled.focus {
        background-color: #cc2127;
        border-color: #cc2127; }
    .btn.btn-pinterest.disabled:hover, .btn.btn-pinterest:disabled:hover {
        background-color: #cc2127;
        border-color: #cc2127; }
    .btn.btn-pinterest:focus, .btn.btn-pinterest:active, .btn.btn-pinterest:hover {
        box-shadow: 0 14px 26px -12px rgba(204, 33, 39, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(204, 33, 39, 0.2); }
    .btn.btn-pinterest.btn-link {
        background-color: transparent;
        color: #cc2127;
        box-shadow: none; }
    .btn.btn-pinterest.btn-link:hover, .btn.btn-pinterest.btn-link:focus, .btn.btn-pinterest.btn-link:active {
        background-color: transparent;
        color: #cc2127; }

    .btn.btn-google {
        color: #ffffff;
        background-color: #dd4b39;
        border-color: #dd4b39;
        box-shadow: 0 2px 2px 0 rgba(221, 75, 57, 0.14), 0 3px 1px -2px rgba(221, 75, 57, 0.2), 0 1px 5px 0 rgba(221, 75, 57, 0.12); }
    .btn.btn-google:hover {
        color: #ffffff;
        background-color: #df5746;
        border-color: #b93120; }
    .btn.btn-google:focus, .btn.btn-google.focus, .btn.btn-google:hover {
        color: #ffffff;
        background-color: #df5746;
        border-color: #b93120; }
    .btn.btn-google:active, .btn.btn-google.active,
    .open > .btn.btn-google.dropdown-toggle,
    .show > .btn.btn-google.dropdown-toggle {
        color: #ffffff;
        background-color: #df5746;
        border-color: #b93120;
        box-shadow: 0 2px 2px 0 rgba(221, 75, 57, 0.14), 0 3px 1px -2px rgba(221, 75, 57, 0.2), 0 1px 5px 0 rgba(221, 75, 57, 0.12); }
    .btn.btn-google:active:hover, .btn.btn-google:active:focus, .btn.btn-google:active.focus, .btn.btn-google.active:hover, .btn.btn-google.active:focus, .btn.btn-google.active.focus,
    .open > .btn.btn-google.dropdown-toggle:hover,
    .open > .btn.btn-google.dropdown-toggle:focus,
    .open > .btn.btn-google.dropdown-toggle.focus,
    .show > .btn.btn-google.dropdown-toggle:hover,
    .show > .btn.btn-google.dropdown-toggle:focus,
    .show > .btn.btn-google.dropdown-toggle.focus {
        color: #ffffff;
        background-color: #df5746;
        border-color: #802216; }
    .open > .btn.btn-google.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: #dd4b39; }
    .open > .btn.btn-google.dropdown-toggle.bmd-btn-icon:hover {
        background-color: #df5746; }
    .btn.btn-google.disabled:focus, .btn.btn-google.disabled.focus, .btn.btn-google:disabled:focus, .btn.btn-google:disabled.focus {
        background-color: #dd4b39;
        border-color: #dd4b39; }
    .btn.btn-google.disabled:hover, .btn.btn-google:disabled:hover {
        background-color: #dd4b39;
        border-color: #dd4b39; }
    .btn.btn-google:focus, .btn.btn-google:active, .btn.btn-google:hover {
        box-shadow: 0 14px 26px -12px rgba(221, 75, 57, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(221, 75, 57, 0.2); }
    .btn.btn-google.btn-link {
        background-color: transparent;
        color: #dd4b39;
        box-shadow: none; }
    .btn.btn-google.btn-link:hover, .btn.btn-google.btn-link:focus, .btn.btn-google.btn-link:active {
        background-color: transparent;
        color: #dd4b39; }

    .btn.btn-linkedin {
        color: #ffffff;
        background-color: #0976b4;
        border-color: #0976b4;
        box-shadow: 0 2px 2px 0 rgba(9, 118, 180, 0.14), 0 3px 1px -2px rgba(9, 118, 180, 0.2), 0 1px 5px 0 rgba(9, 118, 180, 0.12); }
    .btn.btn-linkedin:hover {
        color: #ffffff;
        background-color: #086ca5;
        border-color: #06507a; }
    .btn.btn-linkedin:focus, .btn.btn-linkedin.focus, .btn.btn-linkedin:hover {
        color: #ffffff;
        background-color: #086ca5;
        border-color: #06507a; }
    .btn.btn-linkedin:active, .btn.btn-linkedin.active,
    .open > .btn.btn-linkedin.dropdown-toggle,
    .show > .btn.btn-linkedin.dropdown-toggle {
        color: #ffffff;
        background-color: #086ca5;
        border-color: #06507a;
        box-shadow: 0 2px 2px 0 rgba(9, 118, 180, 0.14), 0 3px 1px -2px rgba(9, 118, 180, 0.2), 0 1px 5px 0 rgba(9, 118, 180, 0.12); }
    .btn.btn-linkedin:active:hover, .btn.btn-linkedin:active:focus, .btn.btn-linkedin:active.focus, .btn.btn-linkedin.active:hover, .btn.btn-linkedin.active:focus, .btn.btn-linkedin.active.focus,
    .open > .btn.btn-linkedin.dropdown-toggle:hover,
    .open > .btn.btn-linkedin.dropdown-toggle:focus,
    .open > .btn.btn-linkedin.dropdown-toggle.focus,
    .show > .btn.btn-linkedin.dropdown-toggle:hover,
    .show > .btn.btn-linkedin.dropdown-toggle:focus,
    .show > .btn.btn-linkedin.dropdown-toggle.focus {
        color: #ffffff;
        background-color: #086ca5;
        border-color: #03263b; }
    .open > .btn.btn-linkedin.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: #0976b4; }
    .open > .btn.btn-linkedin.dropdown-toggle.bmd-btn-icon:hover {
        background-color: #086ca5; }
    .btn.btn-linkedin.disabled:focus, .btn.btn-linkedin.disabled.focus, .btn.btn-linkedin:disabled:focus, .btn.btn-linkedin:disabled.focus {
        background-color: #0976b4;
        border-color: #0976b4; }
    .btn.btn-linkedin.disabled:hover, .btn.btn-linkedin:disabled:hover {
        background-color: #0976b4;
        border-color: #0976b4; }
    .btn.btn-linkedin:focus, .btn.btn-linkedin:active, .btn.btn-linkedin:hover {
        box-shadow: 0 14px 26px -12px rgba(9, 118, 180, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(9, 118, 180, 0.2); }
    .btn.btn-linkedin.btn-link {
        background-color: transparent;
        color: #0976b4;
        box-shadow: none; }
    .btn.btn-linkedin.btn-link:hover, .btn.btn-linkedin.btn-link:focus, .btn.btn-linkedin.btn-link:active {
        background-color: transparent;
        color: #0976b4; }

    .btn.btn-dribbble {
        color: #ffffff;
        background-color: #ea4c89;
        border-color: #ea4c89;
        box-shadow: 0 2px 2px 0 rgba(234, 76, 137, 0.14), 0 3px 1px -2px rgba(234, 76, 137, 0.2), 0 1px 5px 0 rgba(234, 76, 137, 0.12); }
    .btn.btn-dribbble:hover {
        color: #ffffff;
        background-color: #e83e80;
        border-color: #df1a66; }
    .btn.btn-dribbble:focus, .btn.btn-dribbble.focus, .btn.btn-dribbble:hover {
        color: #ffffff;
        background-color: #e83e80;
        border-color: #df1a66; }
    .btn.btn-dribbble:active, .btn.btn-dribbble.active,
    .open > .btn.btn-dribbble.dropdown-toggle,
    .show > .btn.btn-dribbble.dropdown-toggle {
        color: #ffffff;
        background-color: #e83e80;
        border-color: #df1a66;
        box-shadow: 0 2px 2px 0 rgba(234, 76, 137, 0.14), 0 3px 1px -2px rgba(234, 76, 137, 0.2), 0 1px 5px 0 rgba(234, 76, 137, 0.12); }
    .btn.btn-dribbble:active:hover, .btn.btn-dribbble:active:focus, .btn.btn-dribbble:active.focus, .btn.btn-dribbble.active:hover, .btn.btn-dribbble.active:focus, .btn.btn-dribbble.active.focus,
    .open > .btn.btn-dribbble.dropdown-toggle:hover,
    .open > .btn.btn-dribbble.dropdown-toggle:focus,
    .open > .btn.btn-dribbble.dropdown-toggle.focus,
    .show > .btn.btn-dribbble.dropdown-toggle:hover,
    .show > .btn.btn-dribbble.dropdown-toggle:focus,
    .show > .btn.btn-dribbble.dropdown-toggle.focus {
        color: #ffffff;
        background-color: #e83e80;
        border-color: #a3134b; }
    .open > .btn.btn-dribbble.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: #ea4c89; }
    .open > .btn.btn-dribbble.dropdown-toggle.bmd-btn-icon:hover {
        background-color: #e83e80; }
    .btn.btn-dribbble.disabled:focus, .btn.btn-dribbble.disabled.focus, .btn.btn-dribbble:disabled:focus, .btn.btn-dribbble:disabled.focus {
        background-color: #ea4c89;
        border-color: #ea4c89; }
    .btn.btn-dribbble.disabled:hover, .btn.btn-dribbble:disabled:hover {
        background-color: #ea4c89;
        border-color: #ea4c89; }
    .btn.btn-dribbble:focus, .btn.btn-dribbble:active, .btn.btn-dribbble:hover {
        box-shadow: 0 14px 26px -12px rgba(234, 76, 137, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(234, 76, 137, 0.2); }
    .btn.btn-dribbble.btn-link {
        background-color: transparent;
        color: #ea4c89;
        box-shadow: none; }
    .btn.btn-dribbble.btn-link:hover, .btn.btn-dribbble.btn-link:focus, .btn.btn-dribbble.btn-link:active {
        background-color: transparent;
        color: #ea4c89; }

    .btn.btn-github {
        color: #ffffff;
        background-color: #333333;
        border-color: #333333;
        box-shadow: 0 2px 2px 0 rgba(51, 51, 51, 0.14), 0 3px 1px -2px rgba(51, 51, 51, 0.2), 0 1px 5px 0 rgba(51, 51, 51, 0.12); }
    .btn.btn-github:hover {
        color: #ffffff;
        background-color: #2b2b2b;
        border-color: #141414; }
    .btn.btn-github:focus, .btn.btn-github.focus, .btn.btn-github:hover {
        color: #ffffff;
        background-color: #2b2b2b;
        border-color: #141414; }
    .btn.btn-github:active, .btn.btn-github.active,
    .open > .btn.btn-github.dropdown-toggle,
    .show > .btn.btn-github.dropdown-toggle {
        color: #ffffff;
        background-color: #2b2b2b;
        border-color: #141414;
        box-shadow: 0 2px 2px 0 rgba(51, 51, 51, 0.14), 0 3px 1px -2px rgba(51, 51, 51, 0.2), 0 1px 5px 0 rgba(51, 51, 51, 0.12); }
    .btn.btn-github:active:hover, .btn.btn-github:active:focus, .btn.btn-github:active.focus, .btn.btn-github.active:hover, .btn.btn-github.active:focus, .btn.btn-github.active.focus,
    .open > .btn.btn-github.dropdown-toggle:hover,
    .open > .btn.btn-github.dropdown-toggle:focus,
    .open > .btn.btn-github.dropdown-toggle.focus,
    .show > .btn.btn-github.dropdown-toggle:hover,
    .show > .btn.btn-github.dropdown-toggle:focus,
    .show > .btn.btn-github.dropdown-toggle.focus {
        color: #ffffff;
        background-color: #2b2b2b;
        border-color: black; }
    .open > .btn.btn-github.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: #333333; }
    .open > .btn.btn-github.dropdown-toggle.bmd-btn-icon:hover {
        background-color: #2b2b2b; }
    .btn.btn-github.disabled:focus, .btn.btn-github.disabled.focus, .btn.btn-github:disabled:focus, .btn.btn-github:disabled.focus {
        background-color: #333333;
        border-color: #333333; }
    .btn.btn-github.disabled:hover, .btn.btn-github:disabled:hover {
        background-color: #333333;
        border-color: #333333; }
    .btn.btn-github:focus, .btn.btn-github:active, .btn.btn-github:hover {
        box-shadow: 0 14px 26px -12px rgba(51, 51, 51, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(51, 51, 51, 0.2); }
    .btn.btn-github.btn-link {
        background-color: transparent;
        color: #333333;
        box-shadow: none; }
    .btn.btn-github.btn-link:hover, .btn.btn-github.btn-link:focus, .btn.btn-github.btn-link:active {
        background-color: transparent;
        color: #333333; }

    .btn.btn-youtube {
        color: #ffffff;
        background-color: #e52d27;
        border-color: #e52d27;
        box-shadow: 0 2px 2px 0 rgba(229, 45, 39, 0.14), 0 3px 1px -2px rgba(229, 45, 39, 0.2), 0 1px 5px 0 rgba(229, 45, 39, 0.12); }
    .btn.btn-youtube:hover {
        color: #ffffff;
        background-color: #e73a35;
        border-color: #b91b16; }
    .btn.btn-youtube:focus, .btn.btn-youtube.focus, .btn.btn-youtube:hover {
        color: #ffffff;
        background-color: #e73a35;
        border-color: #b91b16; }
    .btn.btn-youtube:active, .btn.btn-youtube.active,
    .open > .btn.btn-youtube.dropdown-toggle,
    .show > .btn.btn-youtube.dropdown-toggle {
        color: #ffffff;
        background-color: #e73a35;
        border-color: #b91b16;
        box-shadow: 0 2px 2px 0 rgba(229, 45, 39, 0.14), 0 3px 1px -2px rgba(229, 45, 39, 0.2), 0 1px 5px 0 rgba(229, 45, 39, 0.12); }
    .btn.btn-youtube:active:hover, .btn.btn-youtube:active:focus, .btn.btn-youtube:active.focus, .btn.btn-youtube.active:hover, .btn.btn-youtube.active:focus, .btn.btn-youtube.active.focus,
    .open > .btn.btn-youtube.dropdown-toggle:hover,
    .open > .btn.btn-youtube.dropdown-toggle:focus,
    .open > .btn.btn-youtube.dropdown-toggle.focus,
    .show > .btn.btn-youtube.dropdown-toggle:hover,
    .show > .btn.btn-youtube.dropdown-toggle:focus,
    .show > .btn.btn-youtube.dropdown-toggle.focus {
        color: #ffffff;
        background-color: #e73a35;
        border-color: #7d130f; }
    .open > .btn.btn-youtube.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: #e52d27; }
    .open > .btn.btn-youtube.dropdown-toggle.bmd-btn-icon:hover {
        background-color: #e73a35; }
    .btn.btn-youtube.disabled:focus, .btn.btn-youtube.disabled.focus, .btn.btn-youtube:disabled:focus, .btn.btn-youtube:disabled.focus {
        background-color: #e52d27;
        border-color: #e52d27; }
    .btn.btn-youtube.disabled:hover, .btn.btn-youtube:disabled:hover {
        background-color: #e52d27;
        border-color: #e52d27; }
    .btn.btn-youtube:focus, .btn.btn-youtube:active, .btn.btn-youtube:hover {
        box-shadow: 0 14px 26px -12px rgba(229, 45, 39, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(229, 45, 39, 0.2); }
    .btn.btn-youtube.btn-link {
        background-color: transparent;
        color: #e52d27;
        box-shadow: none; }
    .btn.btn-youtube.btn-link:hover, .btn.btn-youtube.btn-link:focus, .btn.btn-youtube.btn-link:active {
        background-color: transparent;
        color: #e52d27; }

    .btn.btn-instagram {
        color: #ffffff;
        background-color: #125688;
        border-color: #125688;
        box-shadow: 0 2px 2px 0 rgba(18, 86, 136, 0.14), 0 3px 1px -2px rgba(18, 86, 136, 0.2), 0 1px 5px 0 rgba(18, 86, 136, 0.12); }
    .btn.btn-instagram:hover {
        color: #ffffff;
        background-color: #145f96;
        border-color: #0b3452; }
    .btn.btn-instagram:focus, .btn.btn-instagram.focus, .btn.btn-instagram:hover {
        color: #ffffff;
        background-color: #145f96;
        border-color: #0b3452; }
    .btn.btn-instagram:active, .btn.btn-instagram.active,
    .open > .btn.btn-instagram.dropdown-toggle,
    .show > .btn.btn-instagram.dropdown-toggle {
        color: #ffffff;
        background-color: #145f96;
        border-color: #0b3452;
        box-shadow: 0 2px 2px 0 rgba(18, 86, 136, 0.14), 0 3px 1px -2px rgba(18, 86, 136, 0.2), 0 1px 5px 0 rgba(18, 86, 136, 0.12); }
    .btn.btn-instagram:active:hover, .btn.btn-instagram:active:focus, .btn.btn-instagram:active.focus, .btn.btn-instagram.active:hover, .btn.btn-instagram.active:focus, .btn.btn-instagram.active.focus,
    .open > .btn.btn-instagram.dropdown-toggle:hover,
    .open > .btn.btn-instagram.dropdown-toggle:focus,
    .open > .btn.btn-instagram.dropdown-toggle.focus,
    .show > .btn.btn-instagram.dropdown-toggle:hover,
    .show > .btn.btn-instagram.dropdown-toggle:focus,
    .show > .btn.btn-instagram.dropdown-toggle.focus {
        color: #ffffff;
        background-color: #145f96;
        border-color: #030f17; }
    .open > .btn.btn-instagram.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: #125688; }
    .open > .btn.btn-instagram.dropdown-toggle.bmd-btn-icon:hover {
        background-color: #145f96; }
    .btn.btn-instagram.disabled:focus, .btn.btn-instagram.disabled.focus, .btn.btn-instagram:disabled:focus, .btn.btn-instagram:disabled.focus {
        background-color: #125688;
        border-color: #125688; }
    .btn.btn-instagram.disabled:hover, .btn.btn-instagram:disabled:hover {
        background-color: #125688;
        border-color: #125688; }
    .btn.btn-instagram:focus, .btn.btn-instagram:active, .btn.btn-instagram:hover {
        box-shadow: 0 14px 26px -12px rgba(18, 86, 136, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(18, 86, 136, 0.2); }
    .btn.btn-instagram.btn-link {
        background-color: transparent;
        color: #125688;
        box-shadow: none; }
    .btn.btn-instagram.btn-link:hover, .btn.btn-instagram.btn-link:focus, .btn.btn-instagram.btn-link:active {
        background-color: transparent;
        color: #125688; }

    .btn.btn-reddit {
        color: #ffffff;
        background-color: #ff4500;
        border-color: #ff4500;
        box-shadow: 0 2px 2px 0 rgba(255, 69, 0, 0.14), 0 3px 1px -2px rgba(255, 69, 0, 0.2), 0 1px 5px 0 rgba(255, 69, 0, 0.12); }
    .btn.btn-reddit:hover {
        color: #ffffff;
        background-color: #ff500f;
        border-color: #c23400; }
    .btn.btn-reddit:focus, .btn.btn-reddit.focus, .btn.btn-reddit:hover {
        color: #ffffff;
        background-color: #ff500f;
        border-color: #c23400; }
    .btn.btn-reddit:active, .btn.btn-reddit.active,
    .open > .btn.btn-reddit.dropdown-toggle,
    .show > .btn.btn-reddit.dropdown-toggle {
        color: #ffffff;
        background-color: #ff500f;
        border-color: #c23400;
        box-shadow: 0 2px 2px 0 rgba(255, 69, 0, 0.14), 0 3px 1px -2px rgba(255, 69, 0, 0.2), 0 1px 5px 0 rgba(255, 69, 0, 0.12); }
    .btn.btn-reddit:active:hover, .btn.btn-reddit:active:focus, .btn.btn-reddit:active.focus, .btn.btn-reddit.active:hover, .btn.btn-reddit.active:focus, .btn.btn-reddit.active.focus,
    .open > .btn.btn-reddit.dropdown-toggle:hover,
    .open > .btn.btn-reddit.dropdown-toggle:focus,
    .open > .btn.btn-reddit.dropdown-toggle.focus,
    .show > .btn.btn-reddit.dropdown-toggle:hover,
    .show > .btn.btn-reddit.dropdown-toggle:focus,
    .show > .btn.btn-reddit.dropdown-toggle.focus {
        color: #ffffff;
        background-color: #ff500f;
        border-color: #802300; }
    .open > .btn.btn-reddit.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: #ff4500; }
    .open > .btn.btn-reddit.dropdown-toggle.bmd-btn-icon:hover {
        background-color: #ff500f; }
    .btn.btn-reddit.disabled:focus, .btn.btn-reddit.disabled.focus, .btn.btn-reddit:disabled:focus, .btn.btn-reddit:disabled.focus {
        background-color: #ff4500;
        border-color: #ff4500; }
    .btn.btn-reddit.disabled:hover, .btn.btn-reddit:disabled:hover {
        background-color: #ff4500;
        border-color: #ff4500; }
    .btn.btn-reddit:focus, .btn.btn-reddit:active, .btn.btn-reddit:hover {
        box-shadow: 0 14px 26px -12px rgba(255, 69, 0, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(255, 69, 0, 0.2); }
    .btn.btn-reddit.btn-link {
        background-color: transparent;
        color: #ff4500;
        box-shadow: none; }
    .btn.btn-reddit.btn-link:hover, .btn.btn-reddit.btn-link:focus, .btn.btn-reddit.btn-link:active {
        background-color: transparent;
        color: #ff4500; }

    .btn.btn-tumblr {
        color: #ffffff;
        background-color: #35465c;
        border-color: #35465c;
        box-shadow: 0 2px 2px 0 rgba(53, 70, 92, 0.14), 0 3px 1px -2px rgba(53, 70, 92, 0.2), 0 1px 5px 0 rgba(53, 70, 92, 0.12); }
    .btn.btn-tumblr:hover {
        color: #ffffff;
        background-color: #2f3f52;
        border-color: #1f2835; }
    .btn.btn-tumblr:focus, .btn.btn-tumblr.focus, .btn.btn-tumblr:hover {
        color: #ffffff;
        background-color: #2f3f52;
        border-color: #1f2835; }
    .btn.btn-tumblr:active, .btn.btn-tumblr.active,
    .open > .btn.btn-tumblr.dropdown-toggle,
    .show > .btn.btn-tumblr.dropdown-toggle {
        color: #ffffff;
        background-color: #2f3f52;
        border-color: #1f2835;
        box-shadow: 0 2px 2px 0 rgba(53, 70, 92, 0.14), 0 3px 1px -2px rgba(53, 70, 92, 0.2), 0 1px 5px 0 rgba(53, 70, 92, 0.12); }
    .btn.btn-tumblr:active:hover, .btn.btn-tumblr:active:focus, .btn.btn-tumblr:active.focus, .btn.btn-tumblr.active:hover, .btn.btn-tumblr.active:focus, .btn.btn-tumblr.active.focus,
    .open > .btn.btn-tumblr.dropdown-toggle:hover,
    .open > .btn.btn-tumblr.dropdown-toggle:focus,
    .open > .btn.btn-tumblr.dropdown-toggle.focus,
    .show > .btn.btn-tumblr.dropdown-toggle:hover,
    .show > .btn.btn-tumblr.dropdown-toggle:focus,
    .show > .btn.btn-tumblr.dropdown-toggle.focus {
        color: #ffffff;
        background-color: #2f3f52;
        border-color: #06080b; }
    .open > .btn.btn-tumblr.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: #35465c; }
    .open > .btn.btn-tumblr.dropdown-toggle.bmd-btn-icon:hover {
        background-color: #2f3f52; }
    .btn.btn-tumblr.disabled:focus, .btn.btn-tumblr.disabled.focus, .btn.btn-tumblr:disabled:focus, .btn.btn-tumblr:disabled.focus {
        background-color: #35465c;
        border-color: #35465c; }
    .btn.btn-tumblr.disabled:hover, .btn.btn-tumblr:disabled:hover {
        background-color: #35465c;
        border-color: #35465c; }
    .btn.btn-tumblr:focus, .btn.btn-tumblr:active, .btn.btn-tumblr:hover {
        box-shadow: 0 14px 26px -12px rgba(53, 70, 92, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(53, 70, 92, 0.2); }
    .btn.btn-tumblr.btn-link {
        background-color: transparent;
        color: #35465c;
        box-shadow: none; }
    .btn.btn-tumblr.btn-link:hover, .btn.btn-tumblr.btn-link:focus, .btn.btn-tumblr.btn-link:active {
        background-color: transparent;
        color: #35465c; }

    .btn.btn-behance {
        color: #ffffff;
        background-color: #1769ff;
        border-color: #1769ff;
        box-shadow: 0 2px 2px 0 rgba(23, 105, 255, 0.14), 0 3px 1px -2px rgba(23, 105, 255, 0.2), 0 1px 5px 0 rgba(23, 105, 255, 0.12); }
    .btn.btn-behance:hover {
        color: #ffffff;
        background-color: #2673ff;
        border-color: #004dd9; }
    .btn.btn-behance:focus, .btn.btn-behance.focus, .btn.btn-behance:hover {
        color: #ffffff;
        background-color: #2673ff;
        border-color: #004dd9; }
    .btn.btn-behance:active, .btn.btn-behance.active,
    .open > .btn.btn-behance.dropdown-toggle,
    .show > .btn.btn-behance.dropdown-toggle {
        color: #ffffff;
        background-color: #2673ff;
        border-color: #004dd9;
        box-shadow: 0 2px 2px 0 rgba(23, 105, 255, 0.14), 0 3px 1px -2px rgba(23, 105, 255, 0.2), 0 1px 5px 0 rgba(23, 105, 255, 0.12); }
    .btn.btn-behance:active:hover, .btn.btn-behance:active:focus, .btn.btn-behance:active.focus, .btn.btn-behance.active:hover, .btn.btn-behance.active:focus, .btn.btn-behance.active.focus,
    .open > .btn.btn-behance.dropdown-toggle:hover,
    .open > .btn.btn-behance.dropdown-toggle:focus,
    .open > .btn.btn-behance.dropdown-toggle.focus,
    .show > .btn.btn-behance.dropdown-toggle:hover,
    .show > .btn.btn-behance.dropdown-toggle:focus,
    .show > .btn.btn-behance.dropdown-toggle.focus {
        color: #ffffff;
        background-color: #2673ff;
        border-color: #003597; }
    .open > .btn.btn-behance.dropdown-toggle.bmd-btn-icon {
        color: inherit;
        background-color: #1769ff; }
    .open > .btn.btn-behance.dropdown-toggle.bmd-btn-icon:hover {
        background-color: #2673ff; }
    .btn.btn-behance.disabled:focus, .btn.btn-behance.disabled.focus, .btn.btn-behance:disabled:focus, .btn.btn-behance:disabled.focus {
        background-color: #1769ff;
        border-color: #1769ff; }
    .btn.btn-behance.disabled:hover, .btn.btn-behance:disabled:hover {
        background-color: #1769ff;
        border-color: #1769ff; }
    .btn.btn-behance:focus, .btn.btn-behance:active, .btn.btn-behance:hover {
        box-shadow: 0 14px 26px -12px rgba(23, 105, 255, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(23, 105, 255, 0.2); }
    .btn.btn-behance.btn-link {
        background-color: transparent;
        color: #1769ff;
        box-shadow: none; }
    .btn.btn-behance.btn-link:hover, .btn.btn-behance.btn-link:focus, .btn.btn-behance.btn-link:active {
        background-color: transparent;
        color: #1769ff; }

    .btn-file {
        position: relative;
        overflow: hidden;
        vertical-align: middle; }

    .btn-file > input {
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        margin: 0;
        font-size: 23px;
        cursor: pointer;
        filter: alpha(opacity=0);
        opacity: 0;
        direction: ltr; }

    .fileinput {
        display: inline-block;
        margin-bottom: 9px; }

    .fileinput .form-control {
        display: inline-block;
        padding-top: 7px;
        padding-bottom: 5px;
        margin-bottom: 0;
        vertical-align: middle;
        cursor: text; }

    .fileinput .thumbnail {
        display: inline-block;
        margin-bottom: 10px;
        overflow: hidden;
        text-align: center;
        vertical-align: middle;
        max-width: 360px; }
    .fileinput .thumbnail.img-circle {
        border-radius: 50%;
        max-width: 100px; }

    .fileinput .thumbnail > img {
        max-height: 100%;
        width: 100%; }

    .fileinput .btn {
        vertical-align: middle; }

    .fileinput-exists .fileinput-new,
    .fileinput-new .fileinput-exists {
        display: none; }

    .fileinput-inline .fileinput-controls {
        display: inline; }

    .fileinput-filename {
        display: inline-block;
        overflow: hidden;
        vertical-align: middle; }

    .form-control .fileinput-filename {
        vertical-align: bottom; }

    .fileinput.input-group {
        display: table; }

    .fileinput.input-group > * {
        position: relative;
        z-index: 2; }

    .fileinput.input-group > .btn-file {
        z-index: 1; }

    .fileinput-new.input-group .btn-file,
    .fileinput-new .input-group .btn-file {
        border-radius: 0 4px 4px 0; }

    .fileinput-new.input-group .btn-file.btn-xs,
    .fileinput-new .input-group .btn-file.btn-xs,
    .fileinput-new.input-group .btn-file.btn-sm,
    .fileinput-new.input-group .btn-group-sm > .btn-file.btn,
    .fileinput-new .input-group .btn-file.btn-sm,
    .fileinput-new .input-group .btn-group-sm > .btn-file.btn {
        border-radius: 0 3px 3px 0; }

    .fileinput-new.input-group .btn-file.btn-lg, .fileinput-new.input-group .btn-group-lg > .btn-file.btn,
    .fileinput-new .input-group .btn-file.btn-lg,
    .fileinput-new .input-group .btn-group-lg > .btn-file.btn {
        border-radius: 0 6px 6px 0; }

    .form-group.has-warning .fileinput .fileinput-preview {
        color: #ff9800; }

    .form-group.has-warning .fileinput .thumbnail {
        border-color: #ff9800; }

    .form-group.has-error .fileinput .fileinput-preview {
        color: #f44336; }

    .form-group.has-error .fileinput .thumbnail {
        border-color: #f44336; }

    .form-group.has-success .fileinput .fileinput-preview {
        color: #4caf50; }

    .form-group.has-success .fileinput .thumbnail {
        border-color: #4caf50; }

    .input-group-addon:not(:first-child) {
        border-left: 0; }

    .thumbnail {
        border: 0 none;
        border-radius: 0;
        padding: 0; }

    .table > thead > tr > th {
        border-bottom-width: 1px;
        font-size: 1.0625rem;
        font-weight: 300; }

    .table .form-check {
        margin: 0; }
    .table .form-check .form-check-sign {
        top: -13px;
        left: 0;
        padding-right: 0; }

    .table .radio,
    .table .checkbox {
        margin-top: 0;
        margin-bottom: 0;
        padding: 0;
        width: 15px; }
    .table .radio .icons,
    .table .checkbox .icons {
        position: relative; }

    .table > thead > tr > th,
    .table > tbody > tr > th,
    .table > tfoot > tr > th,
    .table > thead > tr > td,
    .table > tbody > tr > td,
    .table > tfoot > tr > td {
        padding: 12px 8px;
        vertical-align: middle;
        border-color: #ddd;
        font-size: 0.875rem; }

    .table thead tr th {
        font-size: 1.063rem; }

    .table .th-description {
        max-width: 150px; }

    .table .td-price {
        font-size: 26px;
        font-weight: 300;
        margin-top: 5px;
        text-align: right; }

    .table .td-total {
        font-weight: 500;
        font-size: 1.0625rem;
        padding-top: 20px;
        text-align: right; }

    .table .td-actions .btn {
        margin: 0px;
        padding: 5px; }

    .table > tbody > tr {
        position: relative; }

    .table-shopping > thead > tr > th {
        font-size: 0.75rem;
        text-transform: uppercase; }

    .table-shopping > tbody > tr > td {
        font-size: 14px; }
    .table-shopping > tbody > tr > td b {
        display: block;
        margin-bottom: 5px; }

    .table-shopping .td-name {
        font-weight: 400;
        font-size: 1.5em;
        line-height: 1.42857143; }
    .table-shopping .td-name small {
        color: #999;
        font-size: 0.75em;
        font-weight: 300; }

    .table-shopping .td-number {
        font-weight: 300;
        font-size: 1.125rem; }

    .table-shopping .td-name {
        min-width: 200px; }

    .table-shopping .td-number {
        text-align: right;
        min-width: 150px; }
    .table-shopping .td-number small {
        margin-right: 3px; }

    .table-shopping .img-container {
        width: 120px;
        max-height: 160px;
        overflow: hidden;
        display: block; }
    .table-shopping .img-container img {
        width: 100%; }

    .table-inverse {
        color: rgba(255, 255, 255, 0.84); }

    .table thead th {
        font-size: 0.95rem;
        font-weight: 500;
        color: #555;
        border-top-width: 0;
        border-bottom-width: 1px; }

    thead.thead-inverse th,
    .table-inverse thead th {
        color: rgba(255, 255, 255, 0.54); }

    .table-inverse th,
    .table-inverse td,
    .table-inverse thead th {
        border-color: rgba(255, 255, 255, 0.06); }

    .table-striped > tbody > tr:nth-of-type(odd) {
        background-color: #f9f9f9; }

    .section-white {
        background: #FFFFFF; }

    .section-white-to-gray {
        background-color: #fff;
        background: rgba(0, 0, 0, 0) -webkit-gradient(linear, left bottom, left top, from(#e5e5e5), to(#fff)) repeat scroll 0 0;
        background: rgba(0, 0, 0, 0) linear-gradient(0deg, #e5e5e5 0%, #fff 100%) repeat scroll 0 0; }

    .section-gray {
        background: #E5E5E5; }

    .section-light-gray {
        background: #eee; }

    .section-primary {
        background: #e1bee7;
        /* For browsers that do not support gradients */
        /* For Safari 5.1 to 6.0 */
        /* For Opera 11.1 to 12.0 */
        /* For Firefox 3.6 to 15 */
        background: linear-gradient(60deg, #e1bee7, #ba68c8);
        /* Standard syntax */ }

    .section-info {
        background: #b2ebf2;
        /* For browsers that do not support gradients */
        /* For Safari 5.1 to 6.0 */
        /* For Opera 11.1 to 12.0 */
        /* For Firefox 3.6 to 15 */
        background: linear-gradient(60deg, #b2ebf2, #4dd0e1);
        /* Standard syntax */ }

    .section-success {
        background: #c8e6c9;
        /* For browsers that do not support gradients */
        /* For Safari 5.1 to 6.0 */
        /* For Opera 11.1 to 12.0 */
        /* For Firefox 3.6 to 15 */
        background: linear-gradient(60deg, #c8e6c9, #81c784);
        /* Standard syntax */ }

    .section-warning {
        background: #ffe0b2;
        /* For browsers that do not support gradients */
        /* For Safari 5.1 to 6.0 */
        /* For Opera 11.1 to 12.0 */
        /* For Firefox 3.6 to 15 */
        background: linear-gradient(60deg, #ffe0b2, #ffb74d);
        /* Standard syntax */ }

    .section-danger {
        background: #ffcdd2;
        /* For browsers that do not support gradients */
        /* For Safari 5.1 to 6.0 */
        /* For Opera 11.1 to 12.0 */
        /* For Firefox 3.6 to 15 */
        background: linear-gradient(60deg, #ffcdd2, #e57373);
        /* Standard syntax */ }

    .section-rose {
        background: #f8bbd0;
        /* For browsers that do not support gradients */
        /* For Safari 5.1 to 6.0 */
        /* For Opera 11.1 to 12.0 */
        /* For Firefox 3.6 to 15 */
        background: linear-gradient(60deg, #f8bbd0, #f06292);
        /* Standard syntax */ }

    .section-space {
        height: 70px;
        display: block; }

    .section {
        padding: 70px 0; }

    .section-navbars {
        padding-bottom: 0; }

    .section-full-screen {
        height: 100vh; }

    .section-signup {
        padding-top: 20vh; }

    .section-dark,
    .section-image {
        background-color: #343434;
        background-size: 200% 240%;
        background: #232323;
        /* FF3.6+ */
        /* Chrome,Safari4+ */
        /* Chrome10+,Safari5.1+ */
        /* Opera 12+ */
        /* IE10+ */
        background: radial-gradient(ellipse at center, #585858 0%, #232323 100%);
        /* W3C */
        background-size: 550% 450%; }

    .section-dark .title,
    .section-dark .card-plain .card-title,
    .section-dark .card-plain .icon i,
    .section-image .title,
    .section-image .card-plain .card-title,
    .section-image .card-plain .icon i {
        color: #fff; }

    .section-dark .description,
    .section-dark .card-plain .card-description,
    .section-dark .card-plain .icon,
    .section-image .description,
    .section-image .card-plain .card-description,
    .section-image .card-plain .icon {
        color: rgba(255, 255, 255, 0.76); }

    .section-dark .card-plain [class*="text-"],
    .section-dark .card-plain ul li b,
    .section-image .card-plain [class*="text-"],
    .section-image .card-plain ul li b {
        color: #fff; }

    .section-dark .card-plain .card-category,
    .section-image .card-plain .card-category {
        color: rgba(255, 255, 255, 0.5); }

    .section-dark .card .card-image .colored-shadow,
    .section-image .card .card-image .colored-shadow {
        top: 0px; }

    .section-image {
        position: relative; }
    .section-image:after {
        position: absolute;
        z-index: 1;
        width: 100%;
        height: 100%;
        display: block;
        left: 0;
        top: 0;
        content: "";
        background-color: rgba(0, 0, 0, 0.7); }
    .section-image .container {
        z-index: 2;
        position: relative; }

    .section,
    .section-image {
        background-position: center center;
        background-size: cover; }

    [class*="features-"],
    [class*="team-"],
    [class*="projects-"],
    [class*="pricing-"],
    [class*="testimonials-"],
    [class*="contactus-"] {
        padding: 80px 0; }

    .media .avatar {
        margin: 0 auto;
        width: 64px;
        height: 64px;
        overflow: hidden;
        border-radius: 50%;
        margin-right: 15px;
        box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 1px 18px 0 rgba(0, 0, 0, 0.12), 0 3px 5px -1px rgba(0, 0, 0, 0.2); }
    .media .avatar img {
        width: 100%; }

    .media .media-heading small {
        font-family: "Roboto", "Helvetica", "Arial", sans-serif; }

    .media .media-body {
        padding-right: 10px; }
    .media .media-body textarea {
        margin-top: 15px; }
    .media .media-body .media .media-body {
        padding-right: 0px; }

    .media .media-footer .btn {
        margin-bottom: 20px; }

    .media .media-footer:after {
        display: table;
        content: " ";
        clear: both; }

    .media p {
        color: #999999;
        font-size: 1rem;
        line-height: 1.6em; }

    .media-left,
    .media > .float-left {
        padding: 10px; }

    .card {
        border: 0;
        margin-bottom: 30px;
        margin-top: 30px;
        border-radius: 6px;
        color: rgba(0, 0, 0, 0.87);
        background: #fff;
        width: 100%;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12); }
    .card .card-category:not([class*="text-"]) {
        color: #999999; }
    .card .card-category {
        margin-top: 10px; }
    .card .card-category .material-icons {
        position: relative;
        top: 8px;
        line-height: 0; }
    .card .form-check {
        margin-top: 15px; }
    .card .card-title {
        margin-top: 0.625rem; }
    .card .card-title:last-child {
        margin-bottom: 0; }
    .card.no-shadow .card-header-image,
    .card.no-shadow .card-header-image img {
        box-shadow: none !important; }
    .card .card-body,
    .card .card-footer {
        padding: 0.9375rem 1.875rem; }
    .card .card-body + .card-footer {
        padding-top: 0rem;
        border: 0;
        border-radius: 6px; }
    .card .card-footer {
        display: -webkit-box;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        background-color: transparent;
        border: 0; }
    .card .card-footer .author,
    .card .card-footer .stats {
        display: -webkit-inline-box;
        display: inline-flex; }
    .card .card-footer .stats {
        color: #999999; }
    .card .card-footer .stats .material-icons {
        position: relative;
        top: 3px;
        margin-right: 3px;
        margin-left: 3px;
        font-size: 18px; }
    .card.bmd-card-raised {
        box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2); }
    @media (min-width: 992px) {
        .card.bmd-card-flat {
            box-shadow: none; } }
    .card .card-header {
        border-radius: 3px;
        padding: 1rem 15px;
        margin-left: 15px;
        margin-right: 15px;
        margin-top: -30px;
        border: 0;
        background: linear-gradient(60deg, #eee, #bdbdbd); }
    .card .card-header .title {
        color: #fff; }
    .card .card-header:not([class*="header-"]) {
        box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); }
    .card .card-header .nav-tabs {
        padding: 0; }
    .card .card-header.card-header-image {
        position: relative;
        padding: 0;
        z-index: 1;
        margin-left: 15px;
        margin-right: 15px;
        margin-top: -30px;
        border-radius: 6px; }
    .card .card-header.card-header-image a {
        display: block; }
    .card .card-header.card-header-image img {
        width: 100%;
        border-radius: 6px;
        pointer-events: none;
        box-shadow: 0 5px 15px -8px rgba(0, 0, 0, 0.24), 0 8px 10px -5px rgba(0, 0, 0, 0.2); }
    .card .card-header.card-header-image .card-title {
        position: absolute;
        bottom: 15px;
        left: 15px;
        color: #fff;
        font-size: 1.125rem;
        text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5); }
    .card .card-header.card-header-image .colored-shadow {
        -webkit-transform: scale(0.94);
        transform: scale(0.94);
        top: 12px;
        -webkit-filter: blur(12px);
        filter: blur(12px);
        position: absolute;
        width: 100%;
        height: 100%;
        background-size: cover;
        z-index: -1;
        -webkit-transition: opacity .45s;
        transition: opacity .45s;
        opacity: 0; }
    .card .card-header.card-header-image.no-shadow {
        box-shadow: none; }
    .card .card-header.card-header-image.no-shadow.shadow-normal {
        box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); }
    .card .card-header.card-header-image.no-shadow .colored-shadow {
        display: none !important; }
    .card .card-header-primary, .card.bg-primary,
    .card.card-rotate.bg-primary .front,
    .card.card-rotate.bg-primary .back {
        background: linear-gradient(60deg, #ab47bc, #7b1fa2); }
    .card .card-header-info, .card.bg-info,
    .card.card-rotate.bg-info .front,
    .card.card-rotate.bg-info .back {
        background: linear-gradient(60deg, #26c6da, #0097a7); }
    .card .card-header-success, .card.bg-success,
    .card.card-rotate.bg-success .front,
    .card.card-rotate.bg-success .back {
        background: linear-gradient(60deg, #66bb6a, #388e3c); }
    .card .card-header-warning, .card.bg-warning,
    .card.card-rotate.bg-warning .front,
    .card.card-rotate.bg-warning .back {
        background: linear-gradient(60deg, #ffa726, #f57c00); }
    .card .card-header-danger, .card.bg-danger,
    .card.card-rotate.bg-danger .front,
    .card.card-rotate.bg-danger .back {
        background: linear-gradient(60deg, #ef5350, #d32f2f); }
    .card .card-header-rose, .card.bg-rose,
    .card.card-rotate.bg-rose .front,
    .card.card-rotate.bg-rose .back {
        background: linear-gradient(60deg, #ec407a, #c2185b); }
    .card .card-header-primary {
        box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.2), 0 13px 24px -11px rgba(156, 39, 176, 0.6); }
    .card .card-header-danger {
        box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.2), 0 13px 24px -11px rgba(244, 67, 54, 0.6); }
    .card .card-header-rose {
        box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.2), 0 13px 24px -11px rgba(233, 30, 99, 0.6); }
    .card .card-header-warning {
        box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.2), 0 13px 24px -11px rgba(255, 152, 0, 0.6); }
    .card .card-header-info {
        box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.2), 0 13px 24px -11px rgba(0, 188, 212, 0.6); }
    .card .card-header-success {
        box-shadow: 0 5px 20px 0px rgba(0, 0, 0, 0.2), 0 13px 24px -11px rgba(76, 175, 80, 0.6); }
    .card [class*="header-"], .card[class*="bg-"] {
        color: #fff; }
    .card [class*="header-"] .card-title a,
    .card [class*="header-"] .card-title,
    .card [class*="header-"] .icon i, .card[class*="bg-"] .card-title a,
    .card[class*="bg-"] .card-title,
    .card[class*="bg-"] .icon i {
        color: #fff; }
    .card [class*="header-"] .icon i, .card[class*="bg-"] .icon i {
        border-color: rgba(255, 255, 255, 0.25); }
    .card [class*="header-"] .author a,
    .card [class*="header-"] .stats,
    .card [class*="header-"] .card-category,
    .card [class*="header-"] .card-description, .card[class*="bg-"] .author a,
    .card[class*="bg-"] .stats,
    .card[class*="bg-"] .card-category,
    .card[class*="bg-"] .card-description {
        color: rgba(255, 255, 255, 0.8); }
    .card [class*="header-"] .author a:hover, .card [class*="header-"] .author a:focus, .card [class*="header-"] .author a:active, .card[class*="bg-"] .author a:hover, .card[class*="bg-"] .author a:focus, .card[class*="bg-"] .author a:active {
        color: #fff; }
    .card .author .avatar {
        width: 30px;
        height: 30px;
        overflow: hidden;
        border-radius: 50%;
        margin-right: 5px; }
    .card .author a {
        color: #3C4858;
        text-decoration: none; }
    .card .author a .ripple-container {
        display: none; }
    .card .card-category-social .fa {
        font-size: 24px;
        position: relative;
        margin-top: -4px;
        top: 2px;
        margin-right: 5px; }
    .card .card-category-social .material-icons {
        position: relative;
        top: 5px; }
    .card[class*="bg-"],
    .card[class*="bg-"] .card-body {
        border-radius: 6px; }
    .card[class*="bg-"] h1 small,
    .card[class*="bg-"] h2 small,
    .card[class*="bg-"] h3 small,
    .card[class*="bg-"] .card-body h1 small,
    .card[class*="bg-"] .card-body h2 small,
    .card[class*="bg-"] .card-body h3 small {
        color: rgba(255, 255, 255, 0.8); }
    .card .card-stats {
        background: transparent;
        display: -webkit-box;
        display: flex; }
    .card .card-stats .author,
    .card .card-stats .stats {
        display: -webkit-inline-box;
        display: inline-flex; }

    @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
        .card {
            display: inline-block; } }

    .card-carousel {
        overflow: hidden; }

    .card-login .card-header {
        margin-left: 20px;
        margin-right: 20px;
        margin-top: -40px;
        padding: 20px 0;
        margin-bottom: 15px; }

    .card-login .text-divider {
        margin-top: 30px;
        margin-bottom: 0px;
        text-align: center; }

    .card-login .card-body {
        padding: 0px 30px 0px 10px; }

    .card-login .form-check {
        padding-top: 27px; }
    .card-login .form-check label {
        margin-left: 18px; }
    .card-login .form-check .form-check-sign {
        padding-right: 27px; }

    .card-login .input-group {
        padding-bottom: 7px;
        margin: 27px 0 0 0; }

    .card-login .form {
        min-height: 420px; }

    .card-login .social-line {
        margin-top: 1rem;
        text-align: center;
        padding: 0; }
    .card-login .social-line .btn {
        color: #fff;
        margin-left: 5px;
        margin-right: 5px; }

    .login-page .footer {
        position: absolute;
        width: 100%;
        background: transparent;
        bottom: 0;
        color: #fff;
        z-index: 1; }
    .login-page .footer .copyright a {
        color: #fff; }

    .card-plain {
        background: transparent;
        box-shadow: none; }
    .card-plain .card-header:not(.card-avatar) {
        margin-left: 0;
        margin-right: 0; }
    .card-plain .card-body {
        padding-left: 5px;
        padding-right: 5px; }
    .card-plain .card-header-image {
        margin: 0 !important;
        border-radius: 6px; }
    .card-plain .card-header-image img {
        border-radius: 6px; }
    .card-plain .card-footer {
        padding-left: 5px;
        padding-right: 5px;
        background-color: transparent; }

    .card-background, .back-background,
    .front-background {
        background-position: center center;
        background-size: cover;
        text-align: center; }
    .card-background .card-body, .back-background .card-body, .front-background .card-body {
        position: relative;
        z-index: 2;
        min-height: 280px;
        padding-top: 40px;
        padding-bottom: 40px;
        max-width: 440px;
        margin: 0 auto; }
    .card-background .card-category, .back-background .card-category, .front-background .card-category,
    .card-background .card-description,
    .back-background .card-description,
    .front-background .card-description,
    .card-background small,
    .back-background small,
    .front-background small {
        color: rgba(255, 255, 255, 0.7) !important; }
    .card-background .card-title, .back-background .card-title, .front-background .card-title {
        color: #fff;
        margin-top: 10px; }
    .card-background:not(.card-pricing) .btn, .back-background:not(.card-pricing) .btn, .front-background:not(.card-pricing) .btn {
        margin-bottom: 0; }
    .card-background:after, .back-background:after,
    .front-background:after {
        position: absolute;
        z-index: 1;
        width: 100%;
        height: 100%;
        display: block;
        left: 0;
        top: 0;
        content: "";
        background-color: rgba(0, 0, 0, 0.56);
        border-radius: 6px; }

    .card-blog {
        margin-top: 60px; }
    .card-blog [class*="col-"] .card-header-image img {
        width: 100%; }
    .card-blog .carf-footer .stats .material-icons {
        font-size: 18px;
        position: relative;
        top: 4px;
        width: 19px; }

    .card-collapse,
    .card-collapse .card-header {
        box-shadow: none;
        background-color: transparent;
        border-radius: 0; }

    .card-collapse {
        margin: 0; }
    .card-collapse .card-header {
        border-bottom: 1px solid #ddd;
        padding: 25px 10px 5px 0px;
        margin: 0;
        box-shadow: none !important;
        background: #ffffff; }
    .card-collapse .card-header a {
        color: #3C4858;
        font-size: 0.9375rem;
        display: block; }
    .card-collapse .card-header a:hover, .card-collapse .card-header a:active, .card-collapse .card-header a[aria-expanded="true"] {
        color: #e91e63; }
    .card-collapse .card-header a i {
        float: right;
        top: 4px;
        position: relative; }
    .card-collapse .card-header a[aria-expanded="true"] i {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg); }
    .card-collapse .card-body {
        padding: 15px 0px 5px; }
    .card-collapse .card-body .form-check {
        margin-left: 5px; }

    .card-form-horizontal .card-body {
        padding-left: 15px;
        padding-right: 15px; }

    .card-form-horizontal .form-group .form-control,
    .card-form-horizontal .input-group .form-control {
        margin-bottom: 0; }

    .card-form-horizontal form {
        margin: 0; }

    .card-form-horizontal .btn {
        margin: 0; }

    .card-form-horizontal .input-group .input-group-addon {
        padding-left: 0; }

    .card-form-horizontal .bmd-form-group {
        padding-bottom: 0px;
        padding-top: 0; }

    .card-pricing {
        text-align: center; }
    .card-pricing:after {
        background-color: rgba(0, 0, 0, 0.7) !important; }
    .card-pricing .card-title {
        margin-top: 30px; }
    .card-pricing .card-body {
        padding: 15px !important;
        margin: 0 !important; }
    .card-pricing .icon {
        padding: 10px 0 0px; }
    .card-pricing .icon i {
        font-size: 55px;
        border: 1px solid #E5E5E5;
        border-radius: 50%;
        width: 130px;
        line-height: 130px;
        height: 130px; }
    .card-pricing h1 small {
        font-size: 18px;
        display: -webkit-inline-box;
        display: inline-flex;
        height: 0; }
    .card-pricing h1 small:first-child {
        position: relative;
        top: -17px;
        font-size: 26px; }
    .card-pricing ul {
        list-style: none;
        padding: 0;
        max-width: 240px;
        margin: 10px auto; }
    .card-pricing ul li {
        color: #999999;
        text-align: center;
        padding: 12px 0;
        border-bottom: 1px solid rgba(153, 153, 153, 0.3); }
    .card-pricing ul li:last-child {
        border: 0; }
    .card-pricing ul li b {
        color: #3C4858; }
    .card-pricing ul li i {
        top: 6px;
        position: relative; }
    .card-pricing.card-background ul li, .card-pricing[class*="bg-"] ul li {
        color: #fff;
        border-color: rgba(255, 255, 255, 0.3); }
    .card-pricing.card-background ul li b, .card-pricing[class*="bg-"] ul li b {
        color: #fff;
        font-weight: 700; }
    .card-pricing.card-background [class*="text-"],
    .card-pricing.card-background .card-category, .card-pricing[class*="bg-"] [class*="text-"],
    .card-pricing[class*="bg-"] .card-category {
        color: #fff !important; }
    .card-pricing .card-footer {
        z-index: 2; }

    .card-product {
        margin-top: 30px; }
    .card-product .btn-simple.btn-just-icon {
        padding: 0; }
    .card-product .card-footer .price h4 {
        margin-bottom: 0; }
    .card-product .card-footer .btn {
        margin: 0; }
    .card-product .card-title,
    .card-product .card-category,
    .card-product .card-description {
        text-align: center; }
    .card-product .category {
        margin-bottom: 0; }
    .card-product .category ~ .card-title {
        margin-top: 0; }
    .card-product .price {
        font-size: 18px;
        color: #9A9A9A; }
    .card-product .price-old {
        text-decoration: line-through;
        font-size: 16px;
        color: #9A9A9A; }
    .card-product .price-new {
        color: #f44336; }

    .card-profile .card-header:not([class*="card-header-"]) {
        background: transparent; }

    .card-profile .card-avatar {
        width: 130px;
        max-width: 130px;
        max-height: 130px; }

    .card-profile [class*="col-"] .card-avatar {
        width: auto; }

    .rotating-card-container {
        -webkit-perspective: 800px;
        -o-perspective: 800px;
        -ms-perspective: 800px;
        perspective: 800px; }
    .rotating-card-container .card-rotate {
        background: transparent;
        box-shadow: none; }
    .rotating-card-container .card-rotate:after {
        display: none; }
    .rotating-card-container .card {
        -webkit-transition: all 0.8s cubic-bezier(0.34, 1.45, 0.7, 1);
        transition: all 0.8s cubic-bezier(0.34, 1.45, 0.7, 1);
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
        position: relative; }
    .rotating-card-container .card .back, .rotating-card-container .card .front {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
        position: absolute;
        background-color: #fff;
        border-radius: 6px;
        top: 0;
        left: 0;
        -webkit-box-pack: center;
        justify-content: center;
        align-content: center;
        display: -moz-flex;
        display: -o-flex;
        display: -webkit-box;
        display: flex;
        -moz-flex-direction: column;
        -o-flex-direction: column;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column; }
    .rotating-card-container .card .back .card-body, .rotating-card-container .card .front .card-body {
        -webkit-box-pack: center;
        justify-content: center;
        align-content: center;
        display: -moz-flex;
        display: -o-flex;
        display: -webkit-box;
        display: flex;
        -moz-flex-direction: column;
        -o-flex-direction: column;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column; }
    .rotating-card-container .card .front {
        z-index: 2;
        position: relative; }
    .rotating-card-container .card .back {
        -webkit-transform: rotateY(180deg);
        transform: rotateY(180deg);
        z-index: 5;
        text-align: center;
        width: 100%;
        height: 100%; }
    .rotating-card-container .card .back.back-background:after {
        position: absolute;
        z-index: 1;
        width: 100%;
        height: 100%;
        display: block;
        left: 0;
        top: 0;
        content: "";
        background-color: rgba(0, 0, 0, 0.56);
        border-radius: 6px; }
    .rotating-card-container .card .back.back-background .card-body {
        position: relative;
        z-index: 2; }
    .rotating-card-container .card .back .card-footer .btn {
        margin: 0; }
    .rotating-card-container .card .back .card-body {
        padding-left: 15px;
        padding-right: 15px; }
    .rotating-card-container:not(.manual-flip):hover .card {
        -webkit-transform: rotateY(180deg);
        transform: rotateY(180deg); }
    .rotating-card-container.hover.manual-flip .card {
        -webkit-transform: rotateY(180deg);
        transform: rotateY(180deg); }
    .card-profile .rotating-card-container .front {
        text-align: left; }

    .back-background .card-body {
        min-height: auto;
        padding-top: 15px;
        padding-bottom: 15px; }

    /*       Fix bug for IE      */
    @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
        .rotating-card-container .card .front,
        .rotating-card-container .card .back {
            -webkit-backface-visibility: visible;
            backface-visibility: visible; }
        .rotating-card-container .card .back {
            visibility: hidden;
            -webkit-transition: visibility 0.3s cubic-bezier(0.34, 1.45, 0.7, 1);
            transition: visibility 0.3s cubic-bezier(0.34, 1.45, 0.7, 1); }
        .rotating-card-container .card .front {
            z-index: 4; }
        .rotating-card-container:not(.manual-flip):hover .card .back,
        .rotating-card-container.manual-flip.hover .card .back {
            z-index: 5;
            visibility: visible; } }

    .card-profile, .card-testimonial {
        margin-top: 30px;
        text-align: center; }
    .card-profile .card-avatar, .card-testimonial .card-avatar {
        margin: -50px auto 0;
        border-radius: 50%;
        overflow: hidden;
        padding: 0;
        box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2); }
    .card-profile .card-avatar + .card-body, .card-testimonial .card-avatar + .card-body {
        margin-top: 15px; }
    .card-profile .card-avatar img, .card-testimonial .card-avatar img {
        width: 100%;
        height: auto; }
    .card-profile .card-body + .card-footer, .card-testimonial .card-body + .card-footer {
        margin-top: -15px; }
    .card-profile .card-footer .btn.btn-just-icon, .card-testimonial .card-footer .btn.btn-just-icon {
        font-size: 20px;
        padding: 12px 12px;
        line-height: 1em; }
    .card-plain.card-profile .card-avatar, .card-plain.card-testimonial .card-avatar {
        margin-top: 0; }

    .card-testimonial .card-avatar {
        max-width: 100px;
        max-height: 100px; }

    .card-testimonial .card-footer {
        margin-top: 0;
        display: block; }
    .card-testimonial .card-footer .card-avatar {
        margin-top: 10px;
        margin-bottom: -60px; }

    .card-testimonial .card-description {
        font-style: italic; }
    .card-testimonial .card-description + .card-title {
        margin-top: 30px; }

    .card-testimonial .icon {
        margin-top: 30px; }
    .card-testimonial .icon .material-icons {
        font-size: 40px; }

    /*!
 * Datetimepicker for Bootstrap 3
 * ! version : 4.17.37
 * https://github.com/Eonasdan/bootstrap-datetimepicker/
 */
    .sr-only, .bootstrap-datetimepicker-widget .btn[data-action="incrementHours"]::after, .bootstrap-datetimepicker-widget .btn[data-action="incrementMinutes"]::after, .bootstrap-datetimepicker-widget .btn[data-action="decrementHours"]::after, .bootstrap-datetimepicker-widget .btn[data-action="decrementMinutes"]::after, .bootstrap-datetimepicker-widget .btn[data-action="showHours"]::after, .bootstrap-datetimepicker-widget .btn[data-action="showMinutes"]::after, .bootstrap-datetimepicker-widget .btn[data-action="togglePeriod"]::after, .bootstrap-datetimepicker-widget .btn[data-action="clear"]::after, .bootstrap-datetimepicker-widget .btn[data-action="today"]::after, .bootstrap-datetimepicker-widget .picker-switch::after, .bootstrap-datetimepicker-widget table th.prev::after, .bootstrap-datetimepicker-widget table th.next::after {
        position: absolute;
        width: 1px;
        height: 1px;
        margin: -1px;
        padding: 0;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0; }

    .bootstrap-datetimepicker-widget {
        list-style: none; }
    .bootstrap-datetimepicker-widget a:hover {
        box-shadow: none !important; }
    .bootstrap-datetimepicker-widget a .btn:hover {
        background-color: transparent; }
    .bootstrap-datetimepicker-widget.dropdown-menu {
        padding: 4px;
        width: 19em; }
    @media (min-width: 768px) {
        .bootstrap-datetimepicker-widget.dropdown-menu.timepicker-sbs {
            width: 38em; } }
    @media (min-width: 991px) {
        .bootstrap-datetimepicker-widget.dropdown-menu.timepicker-sbs {
            width: 38em; } }
    @media (min-width: 1200px) {
        .bootstrap-datetimepicker-widget.dropdown-menu.timepicker-sbs {
            width: 38em; } }
    .bootstrap-datetimepicker-widget.dropdown-menu.bottom:before, .bootstrap-datetimepicker-widget.dropdown-menu.bottom:after {
        right: auto;
        left: 12px; }
    .bootstrap-datetimepicker-widget.dropdown-menu.top {
        margin-top: auto;
        margin-bottom: 27px; }
    .bootstrap-datetimepicker-widget.dropdown-menu.top.open {
        margin-top: auto;
        margin-bottom: 27px; }
    .bootstrap-datetimepicker-widget.dropdown-menu.pull-right:before {
        left: auto;
        right: 6px; }
    .bootstrap-datetimepicker-widget.dropdown-menu.pull-right:after {
        left: auto;
        right: 7px; }
    .bootstrap-datetimepicker-widget .list-unstyled {
        margin: 0; }
    .bootstrap-datetimepicker-widget a[data-action] {
        padding: 0;
        margin: 0;
        border-width: 0;
        background-color: transparent;
        color: #9c27b0;
        box-shadow: none; }
    .bootstrap-datetimepicker-widget a[data-action]:hover {
        background-color: transparent; }
    .bootstrap-datetimepicker-widget a[data-action]:hover span {
        background-color: #eee;
        color: #9c27b0; }
    .bootstrap-datetimepicker-widget a[data-action]:active {
        box-shadow: none; }
    .bootstrap-datetimepicker-widget .timepicker-hour, .bootstrap-datetimepicker-widget .timepicker-minute, .bootstrap-datetimepicker-widget .timepicker-second {
        width: 40px;
        height: 40px;
        line-height: 40px;
        font-weight: 300;
        font-size: 1.125rem;
        margin: 0;
        border-radius: 50%; }
    .bootstrap-datetimepicker-widget button[data-action] {
        width: 38px;
        height: 38px;
        margin-right: 3px;
        padding: 0; }
    .bootstrap-datetimepicker-widget .btn[data-action="incrementHours"]::after {
        content: "Increment Hours"; }
    .bootstrap-datetimepicker-widget .btn[data-action="incrementMinutes"]::after {
        content: "Increment Minutes"; }
    .bootstrap-datetimepicker-widget .btn[data-action="decrementHours"]::after {
        content: "Decrement Hours"; }
    .bootstrap-datetimepicker-widget .btn[data-action="decrementMinutes"]::after {
        content: "Decrement Minutes"; }
    .bootstrap-datetimepicker-widget .btn[data-action="showHours"]::after {
        content: "Show Hours"; }
    .bootstrap-datetimepicker-widget .btn[data-action="showMinutes"]::after {
        content: "Show Minutes"; }
    .bootstrap-datetimepicker-widget .btn[data-action="togglePeriod"]::after {
        content: "Toggle AM/PM"; }
    .bootstrap-datetimepicker-widget .btn[data-action="clear"]::after {
        content: "Clear the picker"; }
    .bootstrap-datetimepicker-widget .btn[data-action="today"]::after {
        content: "Set the date to today"; }
    .bootstrap-datetimepicker-widget .picker-switch {
        text-align: center;
        border-radius: 3px;
        font-size: 0.875rem; }
    .bootstrap-datetimepicker-widget .picker-switch::after {
        content: "Toggle Date and Time Screens"; }
    .bootstrap-datetimepicker-widget .picker-switch td {
        padding: 0;
        margin: 0;
        height: auto;
        width: auto;
        line-height: inherit; }
    .bootstrap-datetimepicker-widget .picker-switch td span {
        line-height: 2.5;
        height: 2.5em;
        width: 100%;
        border-radius: 3px;
        margin: 2px 0px !important; }
    .bootstrap-datetimepicker-widget table {
        width: 100%;
        margin: 0; }
    .bootstrap-datetimepicker-widget table.table-condensed tr > td {
        text-align: center; }
    .bootstrap-datetimepicker-widget table td > div,
    .bootstrap-datetimepicker-widget table th > div {
        text-align: center; }
    .bootstrap-datetimepicker-widget table th {
        height: 20px;
        line-height: 20px;
        width: 20px;
        font-weight: 500; }
    .bootstrap-datetimepicker-widget table th.picker-switch {
        width: 145px; }
    .bootstrap-datetimepicker-widget table th.disabled, .bootstrap-datetimepicker-widget table th.disabled:hover {
        background: none;
        color: rgba(0, 0, 0, 0.12);
        cursor: not-allowed; }
    .bootstrap-datetimepicker-widget table th.prev span,
    .bootstrap-datetimepicker-widget table th.next span {
        border-radius: 3px;
        height: 27px;
        width: 27px;
        line-height: 28px;
        font-size: 12px;
        border-radius: 50%;
        text-align: center; }
    .bootstrap-datetimepicker-widget table th.prev::after {
        content: "Previous Month"; }
    .bootstrap-datetimepicker-widget table th.next::after {
        content: "Next Month"; }
    .bootstrap-datetimepicker-widget table th.dow {
        text-align: center;
        border-bottom: 1px solid rgba(0, 0, 0, 0.12);
        font-size: 12px;
        text-transform: uppercase;
        color: rgba(0, 0, 0, 0.87);
        font-weight: 400;
        padding-bottom: 5px;
        padding-top: 10px; }
    .bootstrap-datetimepicker-widget table thead tr:first-child th {
        cursor: pointer; }
    .bootstrap-datetimepicker-widget table thead tr:first-child th:hover span, .bootstrap-datetimepicker-widget table thead tr:first-child th.picker-switch:hover {
        background: #eee; }
    .bootstrap-datetimepicker-widget table td > div {
        border-radius: 3px;
        height: 54px;
        line-height: 54px;
        width: 54px;
        text-align: center; }
    .bootstrap-datetimepicker-widget table td.cw > div {
        font-size: .8em;
        height: 20px;
        line-height: 20px;
        color: #999; }
    .bootstrap-datetimepicker-widget table td.day > div {
        height: 30px;
        line-height: 30px;
        width: 30px;
        text-align: center;
        padding: 0px;
        border-radius: 50%;
        position: relative;
        z-index: -1;
        color: #3C4858;
        font-size: 0.875rem; }
    .bootstrap-datetimepicker-widget table td.minute > div,
    .bootstrap-datetimepicker-widget table td.hour > div {
        border-radius: 50%; }
    .bootstrap-datetimepicker-widget table td.day:hover > div,
    .bootstrap-datetimepicker-widget table td.hour:hover > div,
    .bootstrap-datetimepicker-widget table td.minute:hover > div,
    .bootstrap-datetimepicker-widget table td.second:hover > div {
        background: #eee;
        cursor: pointer; }
    .bootstrap-datetimepicker-widget table td.old > div,
    .bootstrap-datetimepicker-widget table td.new > div {
        color: #999; }
    .bootstrap-datetimepicker-widget table td.today > div {
        position: relative; }
    .bootstrap-datetimepicker-widget table td.today > div:before {
        content: '';
        display: inline-block;
        border: 0 0 7px 7px solid transparent;
        border-bottom-color: #9c27b0;
        border-top-color: rgba(0, 0, 0, 0.2);
        position: absolute;
        bottom: 4px;
        right: 4px; }
    .bootstrap-datetimepicker-widget table td.active > div,
    .bootstrap-datetimepicker-widget table td.active:hover > div {
        background-color: #9c27b0;
        color: #fff;
        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4); }
    .bootstrap-datetimepicker-widget table td.active.today:before > div {
        border-bottom-color: #fff; }
    .bootstrap-datetimepicker-widget table td.disabled > div,
    .bootstrap-datetimepicker-widget table td.disabled:hover > div {
        background: none;
        color: rgba(0, 0, 0, 0.12);
        cursor: not-allowed; }
    .bootstrap-datetimepicker-widget table td span {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        margin: 3px 3px;
        cursor: pointer;
        border-radius: 50%;
        text-align: center; }
    .bootstrap-datetimepicker-widget table td span:hover {
        background: #eee; }
    .bootstrap-datetimepicker-widget table td span.active {
        background-color: #9c27b0;
        color: #fff; }
    .bootstrap-datetimepicker-widget table td span.old {
        color: #999; }
    .bootstrap-datetimepicker-widget table td span.disabled, .bootstrap-datetimepicker-widget table td span.disabled:hover {
        background: none;
        color: rgba(0, 0, 0, 0.12);
        cursor: not-allowed; }
    .bootstrap-datetimepicker-widget .timepicker-picker span,
    .bootstrap-datetimepicker-widget .timepicker-hours span,
    .bootstrap-datetimepicker-widget .timepicker-minutes span {
        border-radius: 50% !important; }
    .bootstrap-datetimepicker-widget.usetwentyfour td.hour {
        height: 27px;
        line-height: 27px; }

    .input-group.date .input-group-addon {
        cursor: pointer; }

    .table-condensed > tbody > tr > td,
    .table-condensed > tbody > tr > th,
    .table-condensed > tfoot > tr > td,
    .table-condensed > tfoot > tr > th,
    .table-condensed > thead > tr > td,
    .table-condensed > thead > tr > th {
        padding: 1px;
        text-align: center;
        z-index: 1;
        cursor: pointer; }

    /*! nouislider - 14.0.3 - 10/10/2019 */
    /* Functional styling;
 * These styles are required for noUiSlider to function.
 * You don't need to change these rules to apply your design.
 */
    .noUi-target,
    .noUi-target * {
        -webkit-touch-callout: none;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        -webkit-user-select: none;
        touch-action: none;
        -ms-user-select: none;
        -moz-user-select: none;
        user-select: none;
        box-sizing: border-box; }

    .noUi-target {
        position: relative;
        direction: ltr; }

    .noUi-base,
    .noUi-connects {
        width: 100%;
        height: 100%;
        position: relative;
        z-index: 1; }

    /* Wrapper for all connect elements.
 */
    .noUi-connects {
        overflow: hidden;
        z-index: 0; }

    .noUi-connect,
    .noUi-origin {
        will-change: transform;
        position: absolute;
        z-index: 1;
        top: 0;
        left: 0;
        -ms-transform-origin: 0 0;
        -webkit-transform-origin: 0 0;
        -webkit-transform-style: preserve-3d;
        transform-origin: 0 0;
        -webkit-transform-style: flat;
        transform-style: flat; }

    .noUi-connect {
        height: 100%;
        width: 100%; }

    .noUi-origin {
        height: 10%;
        width: 10%; }

    /* Offset direction
 */
    html:not([dir="rtl"]) .noUi-horizontal .noUi-origin {
        left: auto;
        right: 0; }

    /* Give origins 0 height/width so they don't interfere with clicking the
 * connect elements.
 */
    .noUi-vertical .noUi-origin {
        width: 0; }

    .noUi-horizontal .noUi-origin {
        height: 0; }

    .noUi-handle {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        position: absolute; }

    .noUi-touch-area {
        height: 100%;
        width: 100%; }

    .noUi-state-tap .noUi-connect,
    .noUi-state-tap .noUi-origin {
        -webkit-transition: transform 0.3s;
        -webkit-transition: -webkit-transform 0.3s;
        transition: -webkit-transform 0.3s;
        transition: transform 0.3s;
        transition: transform 0.3s, -webkit-transform 0.3s; }

    .noUi-state-drag * {
        cursor: inherit !important; }

    /* Slider size and handle placement;
 */
    .noUi-horizontal {
        height: 2px;
        margin: 15px 0; }

    .noUi-horizontal .noUi-handle {
        box-sizing: border-box;
        width: 14px;
        height: 14px;
        left: -6px;
        top: -7px;
        cursor: pointer;
        border-radius: 100%;
        -webkit-transition: all 0.2s ease-out;
        transition: all 0.2s ease-out;
        border: 1px solid #9c27b0;
        background: #fff;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2); }

    .noUi-vertical {
        height: 100%;
        width: 2px;
        margin: 0 15px; }

    .noUi-vertical .noUi-handle {
        box-sizing: border-box;
        width: 14px;
        height: 14px;
        left: -6px;
        top: -10px;
        cursor: pointer;
        border-radius: 100%;
        -webkit-transition: all 0.2s ease-out;
        transition: all 0.2s ease-out;
        border: 1px solid #9c27b0;
        background: #fff;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2); }

    html:not([dir="rtl"]) .noUi-horizontal .noUi-handle {
        right: -10px;
        left: auto; }

    /* Styling;
 * Giving the connect element a border radius causes issues with using transform: scale
 */
    .noUi-target {
        background: #c8c8c8;
        border-radius: 4px; }

    .noUi-connects {
        border-radius: 3px; }

    .noUi-connect {
        background: #3FB8AF; }

    /* Handles and cursors;
 */
    .noUi-draggable {
        cursor: ew-resize; }

    .noUi-vertical .noUi-draggable {
        cursor: ns-resize; }

    .noUi-handle {
        box-sizing: border-box;
        width: 14px;
        height: 14px;
        left: -10px;
        top: -6px;
        cursor: pointer;
        border-radius: 100%;
        -webkit-transition: all 0.2s ease-out;
        transition: all 0.2s ease-out;
        border: 1px solid;
        background: #fff;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2); }

    .noUi-active {
        box-shadow: inset 0 0 1px #FFF, inset 0 1px 7px #DDD, 0 3px 6px -3px #BBB;
        -webkit-transform: scale3d(1.5, 1.5, 1);
        transform: scale3d(1.5, 1.5, 1); }

    /* Handle stripes;
 */
    .noUi-handle:after {
        left: 17px; }

    .noUi-vertical .noUi-handle:before,
    .noUi-vertical .noUi-handle:after {
        width: 14px;
        height: 1px;
        left: 6px;
        top: 14px; }

    .noUi-vertical .noUi-handle:after {
        top: 17px; }

    /* Disabled state;
 */
    [disabled] .noUi-connect {
        background: #B8B8B8; }

    [disabled].noUi-target,
    [disabled].noUi-handle,
    [disabled] .noUi-handle {
        cursor: not-allowed; }

    /* Base;
 *
 */
    .noUi-pips,
    .noUi-pips * {
        box-sizing: border-box; }

    .noUi-pips {
        position: absolute;
        color: #999; }

    /* Values;
 *
 */
    .noUi-value {
        position: absolute;
        white-space: nowrap;
        text-align: center; }

    .noUi-value-sub {
        color: #ccc;
        font-size: 10px; }

    /* Markings;
 *
 */
    .noUi-marker {
        position: absolute;
        background: #CCC; }

    .noUi-marker-sub {
        background: #AAA; }

    .noUi-marker-large {
        background: #AAA; }

    /* Horizontal layout;
 *
 */
    .noUi-pips-horizontal {
        padding: 10px 0;
        height: 80px;
        top: 100%;
        left: 0;
        width: 100%; }

    .noUi-value-horizontal {
        -webkit-transform: translate(-50%, 50%);
        transform: translate(-50%, 50%); }

    .noUi-rtl .noUi-value-horizontal {
        -webkit-transform: translate(50%, 50%);
        transform: translate(50%, 50%); }

    .noUi-marker-horizontal.noUi-marker {
        margin-left: -1px;
        width: 2px;
        height: 5px; }

    .noUi-marker-horizontal.noUi-marker-sub {
        height: 10px; }

    .noUi-marker-horizontal.noUi-marker-large {
        height: 15px; }

    /* Vertical layout;
 *
 */
    .noUi-pips-vertical {
        padding: 0 10px;
        height: 100%;
        top: 0;
        left: 100%; }

    .noUi-value-vertical {
        -webkit-transform: translate(0, -50%);
        transform: translate(0, -50%);
        padding-left: 25px; }

    .noUi-rtl .noUi-value-vertical {
        -webkit-transform: translate(0, 50%);
        transform: translate(0, 50%); }

    .noUi-marker-vertical.noUi-marker {
        width: 5px;
        height: 2px;
        margin-top: -1px; }

    .noUi-marker-vertical.noUi-marker-sub {
        width: 10px; }

    .noUi-marker-vertical.noUi-marker-large {
        width: 15px; }

    .noUi-tooltip {
        display: block;
        position: absolute;
        border: 1px solid #D9D9D9;
        border-radius: 3px;
        background: #fff;
        color: #000;
        padding: 5px;
        text-align: center;
        white-space: nowrap; }

    .noUi-horizontal .noUi-tooltip {
        -webkit-transform: translate(-50%, 0);
        transform: translate(-50%, 0);
        left: 50%;
        bottom: 120%; }

    .noUi-vertical .noUi-tooltip {
        -webkit-transform: translate(0, -50%);
        transform: translate(0, -50%);
        top: 50%;
        right: 120%; }

    .slider {
        background: #c8c8c8; }
    .slider .noUi-connect {
        background-color: #9c27b0;
        border-radius: 4px; }
    .slider .noUi-handle {
        border-color: #9c27b0; }
    .slider.slider-info .noUi-connect {
        background-color: #00bcd4; }
    .slider.slider-info .noUi-handle {
        border-color: #00bcd4; }
    .slider.slider-success .noUi-connect {
        background-color: #4caf50; }
    .slider.slider-success .noUi-handle {
        border-color: #4caf50; }
    .slider.slider-warning .noUi-connect {
        background-color: #ff9800; }
    .slider.slider-warning .noUi-handle {
        border-color: #ff9800; }
    .slider.slider-danger .noUi-connect {
        background-color: #f44336; }
    .slider.slider-danger .noUi-handle {
        border-color: #f44336; }
    .slider.slider-rose .noUi-connect {
        background-color: #e91e63; }
    .slider.slider-rose .noUi-handle {
        border-color: #e91e63; }

    /*!
 * Bootstrap-select v1.13.12 (https://developer.snapappointments.com/bootstrap-select)
 *
 * Copyright 2012-2019 SnapAppointments, LLC
 * Licensed under MIT (https://github.com/snapappointments/bootstrap-select/blob/master/LICENSE)
 */
    @-webkit-keyframes bs-notify-fadeOut {
        0% {
            opacity: 0.9; }
        100% {
            opacity: 0; } }

    @keyframes bs-notify-fadeOut {
        0% {
            opacity: 0.9; }
        100% {
            opacity: 0; } }

    select.bs-select-hidden,
    .bootstrap-select > select.bs-select-hidden,
    select.selectpicker {
        display: none !important; }

    .bootstrap-select {
        width: 220px \0;
        /*IE9 and below*/
        vertical-align: middle; }

    .bootstrap-select > .dropdown-toggle {
        position: relative;
        width: 100%;
        text-align: right;
        white-space: nowrap;
        display: -webkit-inline-box;
        display: inline-flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        justify-content: space-between;
        padding-right: 25px;
        padding-left: 20px;
        z-index: 1; }
    .bootstrap-select > .dropdown-toggle.bs-placeholder.btn, .bootstrap-select > .dropdown-toggle.bs-placeholder.btn:hover {
        color: #fff; }

    .bootstrap-select > .dropdown-toggle:after {
        margin-top: -1px; }

    .bootstrap-select > .dropdown-toggle.bs-placeholder,
    .bootstrap-select > .dropdown-toggle.bs-placeholder:hover,
    .bootstrap-select > .dropdown-toggle.bs-placeholder:focus,
    .bootstrap-select > .dropdown-toggle.bs-placeholder:active {
        color: #999; }

    .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-primary,
    .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-secondary,
    .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-success,
    .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-danger,
    .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-info,
    .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-dark,
    .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-primary:hover,
    .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-secondary:hover,
    .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-success:hover,
    .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-danger:hover,
    .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-info:hover,
    .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-dark:hover,
    .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-primary:focus,
    .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-secondary:focus,
    .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-success:focus,
    .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-danger:focus,
    .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-info:focus,
    .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-dark:focus,
    .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-primary:active,
    .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-secondary:active,
    .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-success:active,
    .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-danger:active,
    .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-info:active,
    .bootstrap-select > .dropdown-toggle.bs-placeholder.btn-dark:active {
        color: rgba(255, 255, 255, 0.5); }

    .bootstrap-select > select {
        position: absolute !important;
        bottom: 0;
        left: 50%;
        display: block !important;
        width: 0.5px !important;
        height: 100% !important;
        padding: 0 !important;
        opacity: 0 !important;
        border: none;
        z-index: 0 !important; }

    .bootstrap-select > select.mobile-device {
        top: 0;
        left: 0;
        display: block !important;
        width: 100% !important;
        z-index: 2 !important; }

    .has-error .bootstrap-select .dropdown-toggle,
    .error .bootstrap-select .dropdown-toggle,
    .bootstrap-select.is-invalid .dropdown-toggle,
    .was-validated .bootstrap-select select:invalid + .dropdown-toggle {
        border-color: #b94a48; }

    .bootstrap-select.is-valid .dropdown-toggle,
    .was-validated .bootstrap-select select:valid + .dropdown-toggle {
        border-color: #28a745; }

    .bootstrap-select.fit-width {
        width: auto !important; }

    .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
        width: 220px; }

    .bootstrap-select > select.mobile-device:focus + .dropdown-toggle,
    .bootstrap-select .dropdown-toggle:focus {
        outline: thin dotted #333333 !important;
        outline: 5px auto -webkit-focus-ring-color !important;
        outline-offset: -2px; }

    .bootstrap-select.form-control {
        margin-bottom: 0;
        padding: 0;
        border: none;
        height: auto; }

    :not(.input-group) > .bootstrap-select.form-control:not([class*="col-"]) {
        width: 100%; }

    .bootstrap-select.form-control.input-group-btn {
        float: none;
        z-index: auto; }

    .form-inline .bootstrap-select,
    .form-inline .bootstrap-select.form-control:not([class*="col-"]) {
        width: auto; }

    .bootstrap-select:not(.input-group-btn),
    .bootstrap-select[class*="col-"] {
        float: none;
        display: inline-block;
        margin-left: 0; }

    .bootstrap-select.dropdown-menu-right,
    .bootstrap-select[class*="col-"].dropdown-menu-right,
    .row .bootstrap-select[class*="col-"].dropdown-menu-right {
        float: right; }

    .form-inline .bootstrap-select,
    .form-horizontal .bootstrap-select,
    .form-group .bootstrap-select {
        margin-bottom: 0; }

    .form-group-lg .bootstrap-select.form-control,
    .form-group-sm .bootstrap-select.form-control {
        padding: 0; }

    .form-group-lg .bootstrap-select.form-control .dropdown-toggle,
    .form-group-sm .bootstrap-select.form-control .dropdown-toggle {
        height: 100%;
        font-size: inherit;
        line-height: inherit;
        border-radius: inherit; }

    .bootstrap-select.form-control-sm .dropdown-toggle, .input-group-sm > .bootstrap-select.form-control .dropdown-toggle, .input-group-sm > .input-group-prepend > .bootstrap-select.input-group-text .dropdown-toggle, .input-group-sm > .input-group-append > .bootstrap-select.input-group-text .dropdown-toggle, .input-group-sm > .input-group-prepend > .bootstrap-select.btn .dropdown-toggle, .input-group-sm > .input-group-append > .bootstrap-select.btn .dropdown-toggle,
    .bootstrap-select.form-control-lg .dropdown-toggle,
    .input-group-lg > .bootstrap-select.form-control .dropdown-toggle,
    .input-group-lg > .input-group-prepend > .bootstrap-select.input-group-text .dropdown-toggle,
    .input-group-lg > .input-group-append > .bootstrap-select.input-group-text .dropdown-toggle,
    .input-group-lg > .input-group-prepend > .bootstrap-select.btn .dropdown-toggle,
    .input-group-lg > .input-group-append > .bootstrap-select.btn .dropdown-toggle {
        font-size: inherit;
        line-height: inherit;
        border-radius: inherit; }

    .bootstrap-select.form-control-sm .dropdown-toggle, .input-group-sm > .bootstrap-select.form-control .dropdown-toggle, .input-group-sm > .input-group-prepend > .bootstrap-select.input-group-text .dropdown-toggle, .input-group-sm > .input-group-append > .bootstrap-select.input-group-text .dropdown-toggle, .input-group-sm > .input-group-prepend > .bootstrap-select.btn .dropdown-toggle, .input-group-sm > .input-group-append > .bootstrap-select.btn .dropdown-toggle {
        padding: 0.25rem 0.5rem; }


    .bootstrap-select.form-control-lg .dropdown-toggle,
    .input-group-lg > .bootstrap-select.form-control .dropdown-toggle,
    .input-group-lg > .input-group-prepend > .bootstrap-select.input-group-text .dropdown-toggle,
    .input-group-lg > .input-group-append > .bootstrap-select.input-group-text .dropdown-toggle,
    .input-group-lg > .input-group-prepend > .bootstrap-select.btn .dropdown-toggle,
    .input-group-lg > .input-group-append > .bootstrap-select.btn .dropdown-toggle {
        padding: 0.5rem 1rem; }

    .form-inline .bootstrap-select .form-control {
        width: 100%; }

    .bootstrap-select.disabled,
    .bootstrap-select > .disabled {
        cursor: not-allowed; }

    .bootstrap-select.disabled:focus,
    .bootstrap-select > .disabled:focus {
        outline: none !important; }

    .bootstrap-select.bs-container {
        position: absolute;
        top: 0;
        left: 0;
        height: 0 !important;
        padding: 0 !important; }

    .bootstrap-select.bs-container .dropdown-menu {
        z-index: 1060; }

    .bootstrap-select .dropdown-toggle .filter-option {
        position: static;
        top: 0;
        left: 0;
        float: left;
        height: 100%;
        width: 100%;
        text-align: left;
        overflow: hidden;
        -webkit-box-flex: 0;
        flex: 0 1 auto; }

    .bs3.bootstrap-select .dropdown-toggle .filter-option {
        padding-right: inherit; }

    .input-group .bs3-has-addon.bootstrap-select .dropdown-toggle .filter-option {
        position: absolute;
        padding-top: inherit;
        padding-bottom: inherit;
        padding-left: inherit;
        float: none; }

    .input-group .bs3-has-addon.bootstrap-select .dropdown-toggle .filter-option .filter-option-inner {
        padding-right: inherit; }

    .bootstrap-select .dropdown-toggle .filter-option-inner-inner {
        overflow: hidden; }

    .bootstrap-select .dropdown-toggle .filter-expand {
        width: 0 !important;
        float: left;
        opacity: 0 !important;
        overflow: hidden; }

    .bootstrap-select .dropdown-toggle .caret {
        position: absolute;
        top: 50%;
        right: 12px;
        margin-top: -2px;
        vertical-align: middle; }

    .input-group .bootstrap-select.form-control .dropdown-toggle {
        border-radius: inherit; }

    .bootstrap-select[class*="col-"] .dropdown-toggle {
        width: 100%; }

    .bootstrap-select .dropdown-menu {
        min-width: 100%;
        box-sizing: border-box; }

    .bootstrap-select .dropdown-menu > .inner:focus {
        outline: none !important; }

    .bootstrap-select .dropdown-menu.inner {
        position: static;
        float: none;
        border: 0;
        padding: 0;
        margin: 0;
        border-radius: 0;
        box-shadow: none; }

    .bootstrap-select .dropdown-menu li {
        position: relative; }

    .bootstrap-select .dropdown-menu li.active small {
        color: #ffffff !important; }

    .bootstrap-select .dropdown-menu li.disabled a {
        pointer-events: none;
        cursor: not-allowed; }

    .bootstrap-select .dropdown-menu li a {
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none; }

    .bootstrap-select .dropdown-menu li a.opt {
        position: relative;
        padding-left: 2.25em; }

    .bootstrap-select .dropdown-menu li a span.check-mark {
        display: none; }

    .bootstrap-select .dropdown-menu li a span.text {
        display: inline-block; }

    .bootstrap-select .dropdown-menu li small {
        padding-left: 0.5em; }

    .bootstrap-select .dropdown-menu .notify {
        position: absolute;
        bottom: 5px;
        width: 96%;
        margin: 0 2%;
        min-height: 26px;
        padding: 3px 5px;
        background: #f5f5f5;
        border: 1px solid #e3e3e3;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
        pointer-events: none;
        opacity: 0.9;
        box-sizing: border-box; }

    .bootstrap-select .dropdown-menu .notify.fadeOut {
        -webkit-animation: 300ms linear 750ms forwards bs-notify-fadeOut;
        animation: 300ms linear 750ms forwards bs-notify-fadeOut; }

    .bootstrap-select .no-results {
        padding: 3px;
        background: #f5f5f5;
        margin: 0 5px;
        white-space: nowrap; }

    .bootstrap-select.fit-width .dropdown-toggle .filter-option {
        position: static;
        display: inline;
        padding: 0; }

    .bootstrap-select.fit-width .dropdown-toggle .filter-option-inner,
    .bootstrap-select.fit-width .dropdown-toggle .filter-option-inner-inner {
        display: inline; }

    .bootstrap-select.fit-width .dropdown-toggle .bs-caret:before {
        content: '\00a0'; }

    .bootstrap-select.fit-width .dropdown-toggle .caret {
        position: static;
        top: auto;
        margin-top: -1px; }

    .bootstrap-select.show-tick .dropdown-menu .selected span.check-mark {
        position: absolute;
        display: inline-block;
        right: 15px;
        top: 10px;
        font-size: 16px; }

    .bootstrap-select.show-tick .dropdown-menu li a span.text {
        margin-right: 34px; }

    .bootstrap-select .bs-ok-default:after {
        content: '';
        display: block;
        width: 0.5em;
        height: 1em;
        border-style: solid;
        border-width: 0 0.26em 0.26em 0;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg); }

    .bootstrap-select.show-menu-arrow.open > .dropdown-toggle,
    .bootstrap-select.show-menu-arrow.show > .dropdown-toggle {
        z-index: 1061; }

    .bootstrap-select.show-menu-arrow .dropdown-toggle .filter-option:before {
        content: '';
        border-left: 7px solid transparent;
        border-right: 7px solid transparent;
        border-bottom: 7px solid rgba(204, 204, 204, 0.2);
        position: absolute;
        bottom: -4px;
        left: 9px;
        display: none; }

    .bootstrap-select.show-menu-arrow .dropdown-toggle .filter-option:after {
        content: '';
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-bottom: 6px solid white;
        position: absolute;
        bottom: -4px;
        left: 10px;
        display: none; }

    .bootstrap-select.show-menu-arrow.dropup .dropdown-toggle .filter-option:before {
        bottom: auto;
        top: -4px;
        border-top: 7px solid rgba(204, 204, 204, 0.2);
        border-bottom: 0; }

    .bootstrap-select.show-menu-arrow.dropup .dropdown-toggle .filter-option:after {
        bottom: auto;
        top: -4px;
        border-top: 6px solid white;
        border-bottom: 0; }

    .bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle .filter-option:before {
        right: 12px;
        left: auto; }

    .bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle .filter-option:after {
        right: 13px;
        left: auto; }

    .bootstrap-select.show-menu-arrow.open > .dropdown-toggle .filter-option:before,
    .bootstrap-select.show-menu-arrow.show > .dropdown-toggle .filter-option:before,
    .bootstrap-select.show-menu-arrow.open > .dropdown-toggle .filter-option:after,
    .bootstrap-select.show-menu-arrow.show > .dropdown-toggle .filter-option:after {
        display: block; }

    .bs-searchbox,
    .bs-actionsbox,
    .bs-donebutton {
        padding: 4px 8px; }

    .bs-actionsbox {
        width: 100%;
        box-sizing: border-box; }

    .bs-actionsbox .btn-group button {
        width: 50%; }

    .bs-donebutton {
        float: left;
        width: 100%;
        box-sizing: border-box; }

    .bs-donebutton .btn-group button {
        width: 100%; }

    .bs-searchbox + .bs-actionsbox {
        padding: 0 8px 4px; }

    .bs-searchbox .form-control {
        margin-bottom: 0;
        width: 100%;
        float: none; }

    .bootstrap-select .select-with-transition {
        background: no-repeat center bottom, center calc(100% - 1px);
        -webkit-transition: background 0s ease-out !important;
        transition: background 0s ease-out !important;
        background-size: 0 100%, 100% 100%;
        background-color: transparent !important;
        color: inherit !important;
        box-shadow: none !important; }

    .bootstrap-select .select-with-transition,
    .bootstrap-select .btn:active,
    .bootstrap-select .btn.active {
        background-image: linear-gradient(to top, #9c27b0 2px, rgba(156, 39, 176, 0) 2px), linear-gradient(to top, rgba(0, 0, 0, 0.26) 1px, transparent 1px); }

    .bootstrap-select.show .select-with-transition:focus {
        background-size: 100% 100%, 100% 100%;
        -webkit-transition-duration: 0.3s !important;
        transition-duration: 0.3s !important; }

    .bootstrap-select .dropdown-toggle:focus {
        outline: none !important; }

    .bootstrap-select.show > .dropdown-menu > .dropdown-menu {
        display: block; }

    .bootstrap-select > .dropdown-menu > .dropdown-menu li.hidden {
        display: none; }

    .nbs-flexisel-container {
        position: relative;
        max-width: 100%; }

    .nbs-flexisel-ul {
        position: relative;
        width: 99999px;
        margin: 0px;
        padding: 0px;
        list-style-type: none;
        text-align: center; }

    .nbs-flexisel-inner {
        overflow: hidden;
        width: 100%; }

    .nbs-flexisel-item {
        float: left;
        margin: 0px;
        padding: 0px;
        cursor: pointer;
        position: relative;
        line-height: 0px; }

    .nbs-flexisel-item img {
        max-width: 100%;
        cursor: pointer;
        position: relative;
        margin-top: 10px;
        margin-bottom: 10px; }

    /*** Navigation ***/
    .nbs-flexisel-nav-left,
    .nbs-flexisel-nav-right {
        top: 40%; }

    .nbs-flexisel-nav-left {
        left: -20px; }

    .nbs-flexisel-nav-left.disabled {
        opacity: 0.4; }

    .nbs-flexisel-nav-right {
        right: -20px; }

    .nbs-flexisel-nav-right.disabled {
        opacity: 0.4; }

    .nbs-flexisel-nav-right,
    .nbs-flexisel-nav-left {
        position: absolute;
        cursor: pointer;
        z-index: 100;
        opacity: 0.5; }

    /*
 * bootstrap-tagsinput v0.8.0
 *
 */
    .bootstrap-tagsinput {
        display: inline-block;
        padding: 4px 6px;
        max-width: 100%;
        line-height: 22px; }
    .bootstrap-tagsinput input {
        border: none;
        box-shadow: none;
        outline: none;
        background-color: transparent;
        margin: 0;
        width: 74px;
        max-width: inherit;
        background-image: none;
        display: inline-block; }
    .bootstrap-tagsinput input:focus {
        border: none;
        box-shadow: none;
        background-image: none; }
    .bootstrap-tagsinput.form-control input::-moz-placeholder {
        color: #777;
        opacity: 1; }
    .bootstrap-tagsinput.form-control input:-ms-input-placeholder,
    .bootstrap-tagsinput.form-control input::-webkit-input-placeholder {
        color: #777; }
    .bootstrap-tagsinput .tag {
        cursor: pointer;
        margin: 5px 3px 5px 0;
        position: relative;
        padding: 3px 8px;
        border-radius: 12px;
        color: #FFFFFF;
        font-weight: 500;
        font-size: 0.75em;
        text-transform: uppercase;
        display: inline-block;
        line-height: 1.5em;
        padding-left: 0.8em; }
    .bootstrap-tagsinput .tag:hover {
        padding-right: 18px; }
    .bootstrap-tagsinput .tag:hover [data-role="remove"] {
        opacity: 1;
        padding-right: 6px; }
    .bootstrap-tagsinput .tag [data-role="remove"] {
        cursor: pointer;
        position: absolute;
        top: 3px;
        right: 0;
        opacity: 0; }
    .bootstrap-tagsinput .tag [data-role="remove"]:after {
        content: "x";
        padding: 0px 2px; }
    .bootstrap-tagsinput.primary-badge .tag {
        background-color: #9c27b0;
        color: #fff; }
    .bootstrap-tagsinput.primary-badge .tag .tagsinput-remove-link {
        color: #fff; }
    .bootstrap-tagsinput.info-badge .tag {
        background-color: #00bcd4;
        color: #fff; }
    .bootstrap-tagsinput.info-badge .tag .tagsinput-remove-link {
        color: #fff; }
    .bootstrap-tagsinput.success-badge .tag {
        background-color: #4caf50;
        color: #fff; }
    .bootstrap-tagsinput.success-badge .tag .tagsinput-remove-link {
        color: #fff; }
    .bootstrap-tagsinput.warning-badge .tag {
        background-color: #ff9800;
        color: #fff; }
    .bootstrap-tagsinput.warning-badge .tag .tagsinput-remove-link {
        color: #fff; }
    .bootstrap-tagsinput.danger-badge .tag {
        background-color: #f44336;
        color: #fff; }
    .bootstrap-tagsinput.danger-badge .tag .tagsinput-remove-link {
        color: #fff; }
    .bootstrap-tagsinput.rose-badge .tag {
        background-color: #e91e63;
        color: #fff; }
    .bootstrap-tagsinput.rose-badge .tag .tagsinput-remove-link {
        color: #fff; }

    .presentation-page .section-components h6.description,
    .index-page .section-components h6.description {
        margin-top: 5px;
        margin-bottom: 30px; }

    .presentation-page .page-header,
    .index-page .page-header {
        height: 90vh;
        overflow: hidden; }

    .presentation-page .brand,
    .index-page .brand {
        color: #fff;
        text-align: center; }
    .presentation-page .brand h1,
    .index-page .brand h1 {
        font-size: 4.2rem;
        font-weight: 600;
        display: inline-block;
        position: relative; }
    .presentation-page .brand h3,
    .index-page .brand h3 {
        font-size: 1.313rem;
        max-width: 500px;
        margin: 10px auto 0; }

    .presentation-page .pro-badge,
    .index-page .pro-badge {
        position: relative;
        font-size: 22px;
        text-transform: uppercase;
        font-weight: bold;
        right: -10px;
        padding: 10px 18px;
        top: -30px;
        background: #fff;
        border-radius: 3px;
        color: #444444;
        line-height: 22px;
        box-shadow: 0 5px 5px -2px rgba(31, 31, 31, 0.4); }

    .presentation-page .header-filter:after,
    .index-page .header-filter:after {
        background: rgba(132, 13, 121, 0.88);
        background: linear-gradient(45deg, rgba(132, 13, 121, 0.88) 0%, rgba(208, 44, 180, 0.31) 100%);
        background: -webkit-linear-gradient(135deg, rgba(132, 13, 121, 0.88) 0%, rgba(208, 44, 180, 0.31) 100%); }

    .presentation-page h4.description,
    .index-page h4.description {
        font-size: 1.5em; }

    .presentation-page .features-1,
    .index-page .features-1 {
        padding-top: 30px;
        padding-bottom: 0; }
    .presentation-page .features-1 .info .info-title,
    .index-page .features-1 .info .info-title {
        margin-top: 30px; }
    .presentation-page .features-1 h2,
    .index-page .features-1 h2 {
        margin-bottom: 0px; }
    .presentation-page .features-1 .info p,
    .index-page .features-1 .info p {
        font-size: 16px;
        line-height: 1.6em; }

    .presentation-page .section-cards,
    .index-page .section-cards {
        padding: 50px 0; }
    .presentation-page .section-cards .image-container,
    .index-page .section-cards .image-container {
        max-width: 1040px;
        margin-top: -140px;
        position: relative;
        height: 660px; }
    .presentation-page .section-cards .image-container img,
    .index-page .section-cards .image-container img {
        max-width: 1040px;
        width: auto;
        position: absolute;
        right: 0;
        top: 0px; }
    .presentation-page .section-cards .col-md-4,
    .index-page .section-cards .col-md-4 {
        -webkit-perspective: 800px;
        perspective: 800px; }
    .presentation-page .section-cards .card,
    .index-page .section-cards .card {
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
        max-width: 340px;
        margin: 0 auto; }
    .presentation-page .section-cards .section-description,
    .index-page .section-cards .section-description {
        margin-top: 130px; }

    .presentation-page .section-sections,
    .index-page .section-sections {
        padding-bottom: 0;
        margin-bottom: -35px; }
    .presentation-page .section-sections .section-description,
    .index-page .section-sections .section-description {
        text-align: center;
        margin-bottom: 60px; }
    .presentation-page .section-sections .col-md-3,
    .index-page .section-sections .col-md-3 {
        padding: 7.5px; }
    .presentation-page .section-sections img,
    .index-page .section-sections img {
        width: 100%;
        border-radius: 3px;
        -webkit-transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2); }
    .presentation-page .section-sections img:hover,
    .index-page .section-sections img:hover {
        -webkit-transform: scale(1.02);
        transform: scale(1.02); }

    .presentation-page .section-examples .section-description,
    .index-page .section-examples .section-description {
        text-align: center;
        margin-bottom: 90px; }

    .presentation-page .section-examples .card,
    .index-page .section-examples .card {
        margin-bottom: 30px;
        -webkit-transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1); }
    .presentation-page .section-examples .card img,
    .index-page .section-examples .card img {
        border-radius: 4px;
        width: 100%; }
    .presentation-page .section-examples .card:hover,
    .index-page .section-examples .card:hover {
        -webkit-transform: translate3d(0, -10px, 0);
        transform: translate3d(0, -10px, 0); }

    .presentation-page .section-examples h4.title,
    .index-page .section-examples h4.title {
        text-align: center;
        margin-bottom: 15px; }

    .presentation-page .section-free-demo .icon-github,
    .index-page .section-free-demo .icon-github {
        font-size: 82px;
        color: #777777; }

    .presentation-page .section-free-demo h2.title,
    .index-page .section-free-demo h2.title {
        margin-top: 15px; }

    .presentation-page .section-free-demo .iframe-github,
    .index-page .section-free-demo .iframe-github {
        top: 6px;
        display: inline-block;
        position: relative;
        margin-left: 10px; }

    .presentation-page .section-free-demo .card-title,
    .presentation-page .section-free-demo ul li,
    .index-page .section-free-demo .card-title,
    .index-page .section-free-demo ul li {
        text-align: left; }

    .presentation-page .section-free-demo ul li b,
    .index-page .section-free-demo ul li b {
        min-width: 24px;
        display: inline-block;
        text-align: center; }

    .presentation-page .section-free-demo .github-section .git-button,
    .index-page .section-free-demo .github-section .git-button {
        padding: 12px 30px 0 0; }

    .presentation-page .section-overview .features-5 .info p,
    .index-page .section-overview .features-5 .info p {
        font-size: 16px;
        line-height: 1.6em; }

    .presentation-page .section-overview .features-5 .info .icon > i,
    .index-page .section-overview .features-5 .info .icon > i {
        font-size: 3.5em; }

    .presentation-page .section-overview .features-5:after,
    .index-page .section-overview .features-5:after {
        background: rgba(0, 0, 0, 0.75); }

    .presentation-page .section-testimonials,
    .index-page .section-testimonials {
        padding-top: 50px;
        padding-bottom: 0; }
    .presentation-page .section-testimonials h3.title,
    .index-page .section-testimonials h3.title {
        margin-top: 10px;
        margin-bottom: 50px; }
    .presentation-page .section-testimonials .card-title,
    .index-page .section-testimonials .card-title {
        margin-top: 0px; }
    .presentation-page .section-testimonials .card .content,
    .index-page .section-testimonials .card .content {
        padding-top: 0px; }
    .presentation-page .section-testimonials .card-description,
    .index-page .section-testimonials .card-description {
        font-size: 16px;
        line-height: 1.6em; }
    .presentation-page .section-testimonials .our-clients,
    .index-page .section-testimonials .our-clients {
        text-align: center; }
    .presentation-page .section-testimonials .our-clients img,
    .index-page .section-testimonials .our-clients img {
        width: 100%;
        max-width: 140px;
        margin: 0 auto;
        display: inline-block; }

    .presentation-page .section-pricing,
    .index-page .section-pricing {
        z-index: 3;
        position: relative; }
    .presentation-page .section-pricing .nav-pills,
    .index-page .section-pricing .nav-pills {
        display: -webkit-inline-box;
        display: inline-flex;
        margin-top: 0px;
        margin-bottom: 10px; }
    .presentation-page .section-pricing .card-pricing,
    .index-page .section-pricing .card-pricing {
        margin-top: 45px; }
    .presentation-page .section-pricing .description,
    .index-page .section-pricing .description {
        text-align: center; }
    .presentation-page .section-pricing .card-margin,
    .index-page .section-pricing .card-margin {
        margin-top: 80px; }

    .about-us .page-header {
        background-size: cover; }
    .about-us .page-header .container {
        color: #FFFFFF;
        text-align: center; }
    .about-us .page-header .title {
        color: #fff; }

    .about-us .about-description {
        padding: 70px 0px 0px 0px; }

    .about-us .about-services {
        padding-top: 10px; }

    .about-us .about-office .description {
        margin-bottom: 70px; }

    .about-us .about-office img {
        margin: 20px 0px; }

    .about-us .about-contact {
        padding: 80px 0px; }
    .about-us .about-contact .description {
        margin-bottom: 70px; }
    .about-us .about-contact .contact-form .bootstrap-select .btn.dropdown-toggle {
        margin-top: 12px; }

    .profile-page .page-header {
        height: 380px;
        background-position: top center; }

    .profile-page .profile {
        text-align: center; }
    .profile-page .profile img {
        max-width: 160px;
        width: 100%;
        margin: 0 auto;
        -webkit-transform: translate3d(0, -50%, 0);
        transform: translate3d(0, -50%, 0); }
    .profile-page .profile .name {
        margin-top: -80px; }

    .profile-page .follow {
        position: absolute;
        top: 0;
        right: 0; }

    .profile-page .description {
        margin: 1.071rem auto 0;
        max-width: 600px; }

    .profile-page .profile-tabs {
        margin-top: 4.284rem; }

    .profile-page .gallery {
        margin-top: 3.213rem;
        padding-bottom: 50px; }
    .profile-page .gallery img {
        width: 100%;
        margin-bottom: 2.142rem; }

    .profile-page .follow .btn-fab {
        margin-top: -28px; }

    .profile-page .card-background .content {
        padding: 30% 0;
        min-width: 160px; }

    .profile-page .work {
        padding: 40px 0px; }
    .profile-page .work .collections {
        margin-top: 20px; }
    .profile-page .work .stats ul > li {
        padding: 5px 0px;
        font-size: 1em; }
    .profile-page .work .stats ul > li b {
        font-size: 1.2em; }

    .profile-page .connections {
        padding: 40px 0px; }
    .profile-page .connections .card-profile {
        text-align: left; }

    .profile-page .tab-content .collections .card .card-body {
        display: -webkit-box;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        -webkit-box-pack: center;
        justify-content: center; }
    .profile-page .tab-content .collections .card .card-body .badge {
        display: inline-table;
        margin: 0 auto; }

    .product-page {
        background-color: #eee; }
    .product-page .page-header {
        min-height: 60vh;
        height: auto;
        background-position: top center; }
    .product-page .main-raised {
        margin: -40vh 0px 0px;
        padding: 40px; }
    .product-page .title-row {
        margin-top: -8vh; }
    .product-page .tab-content {
        margin: 30px 0px;
        overflow: hidden;
        width: 100%;
        height: auto;
        text-align: center; }
    .product-page .tab-content img {
        border-radius: 3px;
        max-width: 300px;
        height: auto; }
    .product-page .main-price {
        margin: 10px 0 25px; }
    .product-page .pick-size {
        margin-top: 50px; }
    .product-page .pick-size .form-group {
        margin-top: 5px; }
    .product-page h2.title {
        margin-bottom: 0px; }
    .product-page .flexi-nav {
        margin: 20px 0 30px;
        text-align: center; }
    .product-page .flexi-nav > li a {
        width: 80%;
        max-width: 85px;
        margin: 0 auto;
        padding: 8px;
        display: block;
        border: 1px solid transparent;
        background: transparent;
        border-radius: 3px;
        opacity: .8; }
    .product-page .flexi-nav > li a:hover, .product-page .flexi-nav > li a:focus, .product-page .flexi-nav > li a:active {
        opacity: 1;
        border-color: #DDDDDD; }
    .product-page .flexi-nav > li a img {
        border-radius: 3px;
        width: 100%;
        height: auto;
        text-align: center; }
    .product-page .flexi-nav > li a.active {
        opacity: 1;
        border-color: #DDDDDD; }
    .product-page .related-products {
        margin-top: 50px; }
    .product-page .related-products .title {
        margin-bottom: 80px; }
    .product-page .features {
        padding-top: 30px; }

    .signup-page .page-header {
        min-height: 100vh;
        height: auto;
        display: inherit; }
    .signup-page .page-header .container {
        padding-top: 20vh; }

    .signup-page .card-signup {
        border-radius: 6px;
        box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
        margin-bottom: 100px;
        padding: 40px 0px; }

    .signup-page .info-horizontal {
        padding: 0px 0px 20px; }

    .signup-page .social .btn {
        margin: 5px; }

    .signup-page .social h4 {
        margin-top: 20px; }

    .signup-page .footer .container {
        padding: 0; }

    .signup-page .footer .copyright,
    .signup-page .footer a {
        color: #FFFFFF; }

    .landing-page .navbar-transparent,
    .profile-page .navbar-transparent,
    .login-page .navbar-transparent,
    .index-page .navbar-transparent,
    .signup-page .navbar-transparent,
    .presentation-page .navbar-transparent {
        padding-top: 25px; }

    .blog-post .page-header {
        min-height: 100vh; }

    .blog-post .section-text {
        padding-bottom: 0; }
    .blog-post .section-text p {
        font-size: 1.188rem;
        line-height: 1.5em;
        color: #555;
        margin-bottom: 30px; }
    .blog-post .section-text .blockquote p {
        font-size: 1.5rem; }

    .blog-post .section-blog-info {
        padding-top: 30px;
        padding-bottom: 0; }
    .blog-post .section-blog-info .btn {
        margin-top: 0;
        margin-bottom: 0; }
    .blog-post .section-blog-info .blog-tags {
        padding-top: 8px; }
    .blog-post .section-blog-info .card-profile {
        margin-top: 0;
        text-align: left; }
    .blog-post .section-blog-info .card-profile .description {
        font-size: 1rem; }
    .blog-post .section-blog-info .card-profile .btn {
        margin-top: 25px; }

    .blog-post .section-comments .title {
        margin-bottom: 30px; }

    .blog-post .media p {
        color: #555; }

    .blog-posts .nav.nav-pills {
        display: -webkit-inline-box;
        display: inline-flex; }

    .blog-posts .card-form-horizontal form .form-group {
        width: 100%;
        margin: 0; }
    .blog-posts .card-form-horizontal form .form-group .form-control {
        width: 100%; }

    .contact-page .contact-content {
        padding-bottom: 40px;
        padding-top: 40px; }

    .contact-page .container {
        max-width: 970px; }

    .contact-page .big-map {
        height: 55vh;
        width: 100%;
        display: block;
        position: relative; }

    .contact-page .message {
        margin-top: 20px; }

    .contact-page .info {
        padding-bottom: 10px;
        padding-top: 0px; }
    .contact-page .info .title {
        margin: 25px 0 10px; }

    .login-page .card-signup .card-header {
        width: auto; }

    .login-page .card-signup .input-group {
        padding-bottom: 7px;
        margin: 27px 0 0 0; }

    .login-page .page-header {
        min-height: 100vh;
        height: auto;
        display: inherit; }
    .login-page .page-header .container {
        padding-top: 23vh; }

    .login-page .footer .container {
        padding: 0; }

    .login-page .footer .copyright,
    .login-page .footer a {
        color: #FFFFFF; }

    .ecommerce-page .container {
        position: relative;
        z-index: 2; }

    .ecommerce-page .card-header .container {
        padding-top: 20vh;
        color: #FFFFFF;
        text-align: center; }

    .ecommerce-page .card-refine.card-rose a:hover, .ecommerce-page .card-refine.card-rose a[aria-expanded="true"] {
        color: #e91e63; }

    .ecommerce-page .card-refine .card-body {
        padding-left: 15px;
        padding-right: 15px; }
    .ecommerce-page .card-refine .card-body.card-refine {
        padding-left: 15px;
        padding-right: 15px; }
    .ecommerce-page .card-refine .card-body .card-collapse .card-body {
        max-height: 273px;
        overflow-y: scroll; }

    .ecommerce-page .card-refine .card-heading i {
        float: none; }

    .ecommerce-page .card-refine .price-right,
    .ecommerce-page .card-refine .price-left {
        font-weight: 500; }

    .ecommerce-page .card-refine .btn {
        margin: -3px 0; }

    .ecommerce-page .card-refine .card {
        margin-bottom: 0; }

    .ecommerce-page .card-refine .checkbox input[type=checkbox]:checked + .checkbox-material .check {
        background: #e91e63; }

    .ecommerce-page .card-form-horizontal form .form-group {
        width: 100%; }
    .ecommerce-page .card-form-horizontal form .form-group .form-control {
        width: 100%; }

    .ecommerce-page .card-product .price-container {
        display: -webkit-inline-box;
        display: inline-flex; }

    .ecommerce-page .card-product .image {
        overflow: hidden;
        border-radius: 6px; }

    .ecommerce-page .card-product .card-footer .stats .btn i.material-icons {
        top: -10px !important; }

    .header-filter[filter-color="purple"]:after, .header-filter[filter-color="primary"]:after {
        background: rgba(225, 190, 231, 0.56);
        /* For browsers that do not support gradients */
        /* For Safari 5.1 to 6.0 */
        /* For Opera 11.1 to 12.0 */
        /* For Firefox 3.6 to 15 */
        background: linear-gradient(60deg, rgba(225, 190, 231, 0.56), rgba(186, 104, 200, 0.95));
        /* Standard syntax */ }

    .header-filter[filter-color="blue"]:after, .header-filter[filter-color="info"]:after {
        background: rgba(178, 235, 242, 0.56);
        /* For browsers that do not support gradients */
        /* For Safari 5.1 to 6.0 */
        /* For Opera 11.1 to 12.0 */
        /* For Firefox 3.6 to 15 */
        background: linear-gradient(60deg, rgba(178, 235, 242, 0.56), rgba(77, 208, 225, 0.95));
        /* Standard syntax */ }

    .header-filter[filter-color="green"]:after, .header-filter[filter-color="success"]:after {
        background: rgba(165, 214, 167, 0.56);
        /* For browsers that do not support gradients */
        /* For Safari 5.1 to 6.0 */
        /* For Opera 11.1 to 12.0 */
        /* For Firefox 3.6 to 15 */
        background: linear-gradient(60deg, rgba(165, 214, 167, 0.56), rgba(102, 187, 106, 0.95));
        /* Standard syntax */ }

    .header-filter[filter-color="orange"]:after, .header-filter[filter-color="warning"]:after {
        background: rgba(255, 224, 178, 0.56);
        /* For browsers that do not support gradients */
        /* For Safari 5.1 to 6.0 */
        /* For Opera 11.1 to 12.0 */
        /* For Firefox 3.6 to 15 */
        background: linear-gradient(60deg, rgba(255, 224, 178, 0.56), rgba(255, 183, 77, 0.95));
        /* Standard syntax */ }

    .header-filter[filter-color="red"]:after, .header-filter[filter-color="danger"]:after {
        background: rgba(239, 154, 154, 0.56);
        /* For browsers that do not support gradients */
        /* For Safari 5.1 to 6.0 */
        /* For Opera 11.1 to 12.0 */
        /* For Firefox 3.6 to 15 */
        background: linear-gradient(60deg, rgba(239, 154, 154, 0.56), rgba(239, 83, 80, 0.95));
        /* Standard syntax */ }

    .header-filter[filter-color="rose"]:after {
        background: rgba(248, 187, 208, 0.56);
        /* For browsers that do not support gradients */
        /* For Safari 5.1 to 6.0 */
        /* For Opera 11.1 to 12.0 */
        /* For Firefox 3.6 to 15 */
        background: linear-gradient(60deg, rgba(248, 187, 208, 0.56), rgba(240, 98, 146, 0.95));
        /* Standard syntax */ }

    .clear-filter:before {
        display: none; }

    .header-1 .wrapper,
    .header-2 .wrapper,
    .header-3 .wrapper {
        background: #CCCCCC; }

    .header-2 .page-header .container {
        padding-top: 25vh; }

    .header-2 .page-header .card {
        margin-top: 60px; }

    .header-3 .btn {
        margin: 0; }

    .header-3 h6 {
        margin-bottom: 0; }

    .card-form-horizontal .form-group {
        margin-bottom: 0; }

    .footer-big {
        padding: 1.875rem 0; }
    .footer-big .content {
        text-align: left; }
    .footer-big .social-feed i {
        font-size: 20px;
        display: table-cell;
        padding-right: 10px; }
    .footer-big .social-feed p {
        display: table-cell;
        vertical-align: top;
        overflow: hidden;
        padding-bottom: 10px;
        max-width: 300px; }
    .footer-big .gallery-feed img {
        width: 20%;
        margin-right: 5%;
        margin-bottom: 5%;
        float: left; }

    .footer-white {
        background-color: #fff; }

    .footer-gray {
        background-color: rgba(0, 0, 0, 0.12); }

    .footer-black {
        background: #232323;
        /* FF3.6+ */
        /* Chrome,Safari4+ */
        /* Chrome10+,Safari5.1+ */
        /* Opera 12+ */
        /* IE10+ */
        background: radial-gradient(ellipse at center, #585858 0%, #232323 100%);
        /* W3C */
        background-size: 550% 450%; }
    .footer-black a {
        color: #fff;
        opacity: .86; }
    .footer-black a:hover, .footer-black a:focus {
        opacity: 1; }
    .footer-black .footer-brand {
        color: #fff; }
    .footer-black .footer-brand:hover, .footer-black .footer-brand:focus {
        color: #fff; }
    .footer-black h5,
    .footer-black h4,
    .footer-black i,
    .footer-black .copyright {
        color: #fff; }
    .footer-black hr {
        border-color: rgba(255, 255, 255, 0.2); }

    .social-line {
        padding: 0.9375rem 0; }

    .social-line-big-icons [class*="col-"] {
        border-right: 1px solid rgba(0, 0, 0, 0.12); }
    .social-line-big-icons [class*="col-"]:last-child {
        border: 0; }

    .social-line-big-icons .btn {
        margin: 0;
        width: 100% !important;
        padding-top: 45px;
        padding-bottom: 45px; }
    .social-line-big-icons .btn .fa,
    .social-line-big-icons .btn .material-icons {
        font-size: 25px;
        line-height: 90px; }

    .subscribe-line {
        padding: 1.875rem 0; }
    .subscribe-line .card {
        margin-top: 30px; }
    .subscribe-line.subscribe-line-image {
        position: relative;
        background-position: top center;
        background-size: cover; }
    .subscribe-line.subscribe-line-image .title {
        color: #fff; }
    .subscribe-line.subscribe-line-image:after {
        position: absolute;
        z-index: 1;
        width: 100%;
        height: 100%;
        display: block;
        left: 0;
        top: 0;
        content: "";
        background-color: rgba(0, 0, 0, 0.66); }
    .subscribe-line.subscribe-line-image .container {
        z-index: 2;
        position: relative; }

    .social-line-white,
    .subscribe-line-white {
        background-color: #fff; }

    .social-line-black,
    .subscribe-line-black {
        background: #232323;
        /* FF3.6+ */
        /* Chrome,Safari4+ */
        /* Chrome10+,Safari5.1+ */
        /* Opera 12+ */
        /* IE10+ */
        background: radial-gradient(ellipse at center, #585858 0%, #232323 100%);
        /* W3C */
        background-size: 550% 450%; }
    .social-line-black [class*="col-"],
    .subscribe-line-black [class*="col-"] {
        border-color: rgba(255, 255, 255, 0.1); }

    .features-1 {
        text-align: center; }

    .features-3 .phone-container {
        max-width: 220px;
        margin: 0 auto; }
    .features-3 .phone-container img {
        width: 100%; }

    .features-3 .info {
        max-width: none;
        margin: 0 auto;
        padding: 10px 0 0px; }

    .features-4 .phone-container {
        max-width: 260px;
        margin: 60px auto 0; }
    .features-4 .phone-container img {
        width: 100%; }

    .features-5 {
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        position: relative; }
    .features-5 .info {
        text-align: center;
        max-width: 310px;
        min-height: 320px; }
    .features-5 .info .icon,
    .features-5 .info .info-title,
    .features-5 .info p {
        color: #fff; }
    .features-5 .container [class*="col-"] {
        border: 1px solid rgba(255, 255, 255, 0.35);
        border-top: 0;
        border-left: 0; }
    .features-5 .container [class*="col-"]:last-child {
        border-right: 0; }
    .features-5 .container .row:last-child [class*="col-"] {
        border-bottom: 0; }
    .features-5:after {
        background: rgba(0, 0, 0, 0.55);
        position: absolute;
        width: 100%;
        height: 100%;
        content: "";
        z-index: 0;
        left: 0;
        top: 0; }
    .features-5 .container,
    .features-5 .title {
        position: relative;
        z-index: 2;
        color: #fff; }

    .features-1 h2.title,
    .features-2 h2.title,
    .features-3 h2.title,
    .features-4 h2.title,
    .features-5 h2.title {
        margin-bottom: 30px; }

    .team-1 .card .content {
        padding-left: 15px;
        padding-right: 15px; }

    .team-1 .card .description {
        min-height: 90px; }

    .team-1 .card .btn {
        margin-top: 0; }

    .team-1 h5.description {
        margin-bottom: 80px; }

    .team-2 .card .title {
        margin: 10px 0 0; }

    .team-2 .card h6 {
        margin-top: 5px; }

    .team-2 h5.description {
        margin-bottom: 80px; }

    .team-3 .card,
    .team-5 .card {
        text-align: left; }
    .team-3 .card .footer,
    .team-5 .card .footer {
        margin-top: 0; }

    .team-3 h5.description,
    .team-5 h5.description {
        margin-bottom: 70px; }

    .team-4 h5.description {
        margin-bottom: 100px; }

    .pricing-1 h2.title {
        margin-bottom: 10px; }

    .pricing-1 .card-separator {
        width: 1px;
        display: block;
        height: 100%;
        background-color: rgba(153, 153, 153, 0.2);
        position: absolute;
        left: 0;
        top: 0; }

    .pricing-1.section-image:after {
        background-color: rgba(0, 0, 0, 0.8); }

    .pricing-2 .nav-pills {
        display: -webkit-inline-box;
        display: inline-flex;
        margin-bottom: 50px; }

    .pricing-5 .nav-pills {
        margin-top: 50px;
        margin-bottom: 50px; }

    .pricing-3 .title,
    .pricing-4 .title {
        margin-bottom: 10px; }

    [class*="blogs-"] {
        padding: 50px 0; }

    .blogs-1 .card {
        margin-bottom: 80px; }

    .blogs-4 .card {
        margin-bottom: 60px;
        text-align: center; }

    .card-blog .row .card-category {
        margin-bottom: 0; }

    .card-blog .row .card-description {
        line-height: 1.313rem; }

    .projects-1 .title {
        margin-top: 10px; }

    .projects-1 .nav-pills {
        display: -webkit-inline-box;
        display: inline-flex; }

    .projects-2 h2.title {
        margin-top: 5px;
        margin-bottom: 15px; }

    .projects-2 .card-title {
        margin-bottom: 5px; }

    .projects-2 .category {
        color: #999999;
        margin-top: 5px; }

    .projects-2 .card-description {
        margin-top: 20px; }

    .projects-2 .card {
        text-align: center; }

    .projects-3 h2.title,
    .projects-3 h3.title {
        margin-bottom: 80px;
        margin-top: 5px; }

    .projects-3 .card {
        margin-bottom: 30px;
        text-align: center; }

    .projects-3 .category {
        margin-bottom: 5px; }

    .projects-3 .card-title {
        margin-top: 5px; }

    .projects-4 h2.title {
        margin-top: 5px;
        margin-bottom: 15px; }

    .projects-4 .info {
        padding: 0; }
    .projects-4 .info p {
        margin: 0; }

    .projects-4 .card-background {
        margin-bottom: 0; }
    .projects-4 .card-background .card-body {
        padding-top: 140px;
        padding-bottom: 140px; }

    .projects-4 hr {
        margin: 70px auto;
        max-width: 970px; }

    .projects-4 .card {
        margin-top: 0; }

    .testimonials-1 .card-description {
        margin-bottom: 50px; }

    .testimonials-2 .carousel .carousel-inner .carousel-item .card {
        max-width: 650px;
        margin: 60px auto; }

    .contactus-1 .info {
        padding: 0;
        margin: 0; }
    .contactus-1 .info:first-child {
        margin-top: 30px; }
    .contactus-1 .info .info-title {
        margin-top: 20px;
        color: #fff; }
    .contactus-1 .info .icon {
        margin-top: 14px;
        color: #fff; }

    .contactus-1 .card-contact {
        margin-top: 30px; }

    .contactus-2 {
        padding: 0; }
    .contactus-2 .card-contact {
        max-width: 560px;
        float: left; }
    .contactus-2 .card-contact .info {
        padding: 0;
        margin: 0; }
    .contactus-2 .map {
        width: 100%;
        height: 800px;
        position: absolute; }
    .contactus-2 .info-horizontal .icon {
        margin-top: 26px; }
    .contactus-2 .info-horizontal .icon > i {
        font-size: 2.2em;
        max-width: 45px; }

    .contactus-1 .card-contact .card-header .card-title,
    .contactus-2 .card-contact .card-header .card-title {
        margin-bottom: 0.75rem !important; }

    @media all and (max-width: 991px) {
        [class*="navbar-expand-"] > .container,
        [class*="navbar-expand-"] > .container-fluid {
            padding-left: 15px;
            padding-right: 15px; }
        .dropdown-menu.show .dropdown-item.open + .dropdown-menu.show {
            right: 101% !important; }
        .dropdown-menu.show .dropdown-item.open + .dropdown-menu.show .dropdown-item.open + .dropdown-menu,
        .dropdown-menu.show .dropdown-item.open + .dropdown-menu.show .dropdown-item.open + .dropdown-menu.show {
            left: -165px !important; }
        .navbar .navbar-collapse .navbar-nav > li.button-container {
            padding: 15px; }
        .carousel .card .card-body {
            max-width: 340px;
            margin: 0 auto;
            min-height: 400px; }
        .navbar-collapse {
            position: fixed;
            display: block;
            top: 0px;
            height: 100vh;
            width: 230px;
            right: 0;
            margin-right: 0 !important;
            z-index: 1032;
            visibility: visible;
            background-color: #999;
            overflow-y: visible;
            border-top: none;
            text-align: left;
            padding-right: 0;
            padding-left: 0;
            max-height: none !important;
            -webkit-transform: translate3d(230px, 0, 0);
            transform: translate3d(230px, 0, 0);
            -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
            transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1); }
        .navbar-collapse::after {
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            position: absolute;
            background-color: #fff;
            display: block;
            content: "";
            z-index: 1; }
        .navbar-collapse .dropdown-toggle:after {
            position: absolute;
            right: 16px;
            margin-top: 8px; }
        .navbar-collapse .navbar-nav {
            position: relative;
            z-index: 3; }
        .navbar-collapse .navbar-nav .nav-item .nav-link {
            color: #3C4858;
            margin: 5px 15px; }
        .navbar-collapse .navbar-nav .nav-item.active .nav-link,
        .navbar-collapse .navbar-nav .nav-item.active .nav-link:hover,
        .navbar-collapse .navbar-nav .nav-item.active .nav-link:focus,
        .navbar-collapse .navbar-nav .nav-item.active .nav-link:active {
            background-color: #ecedef;
            color: #3C4858; }
        .navbar-collapse .navbar-nav .nav-item.button-container .nav-link {
            margin: 15px; }
        .navbar-collapse .navbar-nav .nav-item:after {
            width: calc(100% - 30px);
            content: "";
            display: block;
            height: 1px;
            margin-left: 15px;
            background-color: #e5e5e5; }
        .navbar-collapse .navbar-nav .nav-item:last-child:after {
            display: none; }
        .nav-open .navbar-collapse {
            -webkit-transform: translate3d(0px, 0, 0);
            transform: translate3d(0px, 0, 0); }
        .nav-open .navbar-translate {
            -webkit-transform: translate3d(-230px, 0, 0);
            transform: translate3d(-230px, 0, 0); }
        .navbar .navbar-translate {
            width: 100%;
            position: relative;
            display: -webkit-box;
            display: flex;
            -webkit-box-pack: justify !important;
            justify-content: space-between !important;
            -webkit-box-align: center;
            align-items: center;
            -webkit-transition: transform 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
            -webkit-transition: -webkit-transform 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
            transition: -webkit-transform 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
            transition: transform 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
            transition: transform 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1), -webkit-transform 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1); }
        .navbar .dropdown.show .dropdown-menu {
            display: block; }
        .navbar .dropdown .dropdown-menu {
            display: none; }
        .navbar .dropdown-menu .dropdown-item {
            margin-left: 1.5rem;
            margin-right: 1.5rem; }
        .navbar .dropdown.show .dropdown-menu,
        .navbar .dropdown .dropdown-menu {
            background-color: transparent;
            border: 0;
            padding-bottom: 15px;
            -webkit-transition: none;
            transition: none;
            box-shadow: none;
            -webkit-transform: none !important;
            transform: none !important;
            width: auto;
            margin-bottom: 15px;
            padding-top: 0;
            height: 300px;
            -webkit-animation: none;
            animation: none;
            opacity: 1;
            overflow-y: scroll; }
        .navbar.navbar-transparent .navbar-toggler .navbar-toggler-icon {
            background-color: #fff; }
        #bodyClick {
            height: 100%;
            width: 100%;
            position: fixed;
            opacity: 0;
            top: 0;
            left: auto;
            right: 230px;
            content: "";
            z-index: 1029;
            overflow-x: hidden; }
        #navbar .navbar-collapse,
        #navigation .navbar-collapse {
            display: none !important; } }

    @media all and (min-width: 991px) {
        .navbar .navbar-nav {
            -webkit-box-align: center;
            align-items: center; }
        .navbar .navbar-nav .button-container {
            margin-left: 0.1875px; }
        .contactus-2 .card-contact {
            margin: 80px 0 80px 150px; }
        .index-page .fileinput-new.thumbnail.img-circle {
            margin-top: 50px; } }

    @media screen and (max-width: 991px) {
        .presentation-page .section-components .components-macbook {
            max-width: 850px !important;
            max-height: 480px !important;
            margin-top: 12vh;
            left: -12px; }
        .presentation-page .section-components .coloured-card-img,
        .presentation-page .section-components .table-img {
            display: none; }
        .presentation-page .section-components .social-img {
            left: 47%;
            top: 37%; }
        .presentation-page .section-components .pin-btn-img {
            top: 54%; }
        .presentation-page .section-components .share-btn-img {
            top: 12%; }
        .presentation-page .section-components .coloured-card-btn-img {
            top: -2%;
            left: 65%; }
        .presentation-page .section-content .area-img {
            max-width: 130px;
            max-height: 170px; }
        .presentation-page .section-content .info-img {
            max-width: 170px;
            max-height: 120px; }
        @keyframes topbar-x {
            0% {
                top: 0px;
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg); }
            45% {
                top: 6px;
                -webkit-transform: rotate(145deg);
                transform: rotate(145deg); }
            75% {
                -webkit-transform: rotate(130deg);
                transform: rotate(130deg); }
            100% {
                -webkit-transform: rotate(135deg);
                transform: rotate(135deg); } }
        @-webkit-keyframes topbar-x {
            0% {
                top: 0px;
                -webkit-transform: rotate(0deg); }
            45% {
                top: 6px;
                -webkit-transform: rotate(145deg); }
            75% {
                -webkit-transform: rotate(130deg); }
            100% {
                -webkit-transform: rotate(135deg); } }
        @keyframes topbar-back {
            0% {
                top: 6px;
                -webkit-transform: rotate(135deg);
                transform: rotate(135deg); }
            45% {
                -webkit-transform: rotate(-10deg);
                transform: rotate(-10deg); }
            75% {
                -webkit-transform: rotate(5deg);
                transform: rotate(5deg); }
            100% {
                top: 0px;
                -webkit-transform: rotate(0);
                transform: rotate(0); } }
        @-webkit-keyframes topbar-back {
            0% {
                top: 6px;
                -webkit-transform: rotate(135deg); }
            45% {
                -webkit-transform: rotate(-10deg); }
            75% {
                -webkit-transform: rotate(5deg); }
            100% {
                top: 0px;
                -webkit-transform: rotate(0); } }
        @keyframes bottombar-x {
            0% {
                bottom: 0px;
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg); }
            45% {
                bottom: 6px;
                -webkit-transform: rotate(-145deg);
                transform: rotate(-145deg); }
            75% {
                -webkit-transform: rotate(-130deg);
                transform: rotate(-130deg); }
            100% {
                -webkit-transform: rotate(-135deg);
                transform: rotate(-135deg); } }
        @-webkit-keyframes bottombar-x {
            0% {
                bottom: 0px;
                -webkit-transform: rotate(0deg); }
            45% {
                bottom: 6px;
                -webkit-transform: rotate(-145deg); }
            75% {
                -webkit-transform: rotate(-130deg); }
            100% {
                -webkit-transform: rotate(-135deg); } }
        @keyframes bottombar-back {
            0% {
                bottom: 6px;
                -webkit-transform: rotate(-135deg);
                transform: rotate(-135deg); }
            45% {
                -webkit-transform: rotate(10deg);
                transform: rotate(10deg); }
            75% {
                -webkit-transform: rotate(-5deg);
                transform: rotate(-5deg); }
            100% {
                bottom: 0px;
                -webkit-transform: rotate(0);
                transform: rotate(0); } }
        @-webkit-keyframes bottombar-back {
            0% {
                bottom: 6px;
                -webkit-transform: rotate(-135deg); }
            45% {
                -webkit-transform: rotate(10deg); }
            75% {
                -webkit-transform: rotate(-5deg); }
            100% {
                bottom: 0px;
                -webkit-transform: rotate(0); } }
        .navbar .navbar-toggler .navbar-toggler-icon:nth-child(2) {
            top: 0px;
            -webkit-animation: topbar-back 500ms linear 0s;
            animation: topbar-back 500ms 0s;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards; }
        .navbar .navbar-toggler .navbar-toggler-icon:nth-child(3) {
            opacity: 1; }
        .navbar .navbar-toggler .navbar-toggler-icon:nth-child(4) {
            bottom: 0px;
            -webkit-animation: bottombar-back 500ms linear 0s;
            animation: bottombar-back 500ms 0s;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards; }
        .navbar .navbar-toggler.toggled .navbar-toggler-icon:nth-child(2) {
            top: 6px;
            -webkit-animation: topbar-x 500ms linear 0s;
            animation: topbar-x 500ms 0s;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards; }
        .navbar .navbar-toggler.toggled .navbar-toggler-icon:nth-child(3) {
            opacity: 0; }
        .navbar .navbar-toggler.toggled .navbar-toggler-icon:nth-child(4) {
            bottom: 6px;
            -webkit-animation: bottombar-x 500ms linear 0s;
            animation: bottombar-x 500ms 0s;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards; } }

    @media screen and (max-width: 767px) {
        .presentation-page .section-components .components-macbook {
            max-width: 350px !important;
            max-height: 250px !important;
            margin-top: 12vh;
            left: -12px; }
        .presentation-page .section-components .coloured-card-img,
        .presentation-page .section-components .table-img {
            display: none; }
        .presentation-page .section-components .social-img {
            left: -7%;
            top: 37%; }
        .presentation-page .section-components .pin-btn-img {
            top: 54%; }
        .presentation-page .section-components .share-btn-img {
            top: 7%; }
        .presentation-page .section-components .coloured-card-btn-img {
            top: -2%; }
        .card.card-form-horizontal .input-group {
            padding-bottom: 10px; }
        .presentation-page #cd-vertical-nav,
        .index-page #cd-vertical-nav,
        .section-page #cd-vertical-nav {
            display: none; }
        .index-page .cd-section .tim-typo .tim-note {
            width: 60px; }
        .login-page .page-header > .container {
            padding-bottom: 200px; } }

    @media screen and (max-width: 400px) {
        .cd-vertical-nav {
            display: none !important; } }

    @media screen and (min-width: 767px) {
        .bd-docs .bd-example .card.card-profile .card-header-image {
            max-height: 100% !important; }
        .card-profile .card-header-image {
            max-height: 215px; } }

    @media screen and (max-width: 991px) {
        .menu-on-left .page-header,
        .menu-on-left .main,
        .menu-on-left .navbar > div {
            -webkit-transform: translate3d(0px, 0, 0);
            transform: translate3d(0px, 0, 0);
            -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
            transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1); }
        .menu-on-left .navbar .collapse {
            left: 0;
            top: -25px;
            right: auto;
            -webkit-transform: translate3d(-230px, 0, 0);
            transform: translate3d(-230px, 0, 0); }
        .menu-on-left .navbar .navbar-translate .navbar-brand {
            position: absolute;
            right: 0;
            top: -15px; }
        .nav-open .menu-on-left .page-header,
        .nav-open .menu-on-left .main {
            -webkit-transform: translate3d(230px, 0, 0);
            transform: translate3d(230px, 0, 0); }
        .nav-open .menu-on-left .navbar .collapse {
            -webkit-transform: translate3d(0px, 0, 0);
            transform: translate3d(0px, 0, 0); }
        .nav-open .menu-on-left .navbar > div .navbar-translate {
            -webkit-transform: translate3d(230px, 0, 0);
            transform: translate3d(230px, 0, 0);
            -webkit-transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
            transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1); } }

    @media (min-width: 575px) and (max-width: 991px) {
        .menu-on-left .navbar .collapse {
            -webkit-transform: translate3d(-255px, 0, 0);
            transform: translate3d(-255px, 0, 0); }
        .nav-open .menu-on-left .navbar .collapse {
            -webkit-transform: translate3d(-25px, 0, 0);
            transform: translate3d(-25px, 0, 0);
            width: 245px; } }

</style>
