<style>
    .photoviewer-modal {
        position: absolute;
        z-index: 1090;
        width: 320px;
        height: 320px;
        color: #333;
        background-color: rgba(255, 255, 255, 0.9);
        border: 1px solid rgba(0, 0, 0, 0.6);
        border-radius: 6px;
        box-shadow: 0 2px 10px 2px rgba(0, 0, 0, 0.3);
        outline: none;
    }

    .photoviewer-modal:focus-visible {
        outline: thick solid rgba(0, 0, 0, 0.2);
    }

    .photoviewer-inner {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .photoviewer-maximized {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: auto;
        height: auto;
    }

    .photoviewer-maximized.photoviewer-modal {
        border-width: 0;
        border-radius: 0;
    }

    .photoviewer-maximized .photoviewer-header {
        border-radius: 0;
    }

    .photoviewer-maximized .photoviewer-resizable-handle {
        display: none;
    }

    .photoviewer-button {
        display: inline-block;
        min-width: 40px;
        height: 40px;
        box-sizing: border-box;
        font-size: 16px;
        line-height: 1;
        background: none;
        border-width: 0;
        color: inherit;
        cursor: pointer;
        outline: none;
    }

    .photoviewer-button:hover {
        color: #111;
    }

    .photoviewer-button:focus {
        background-color: rgba(0, 0, 0, 0.1);
    }

    .photoviewer-button svg {
        display: inline-block;
        font-size: inherit;
        width: 1em;
        height: 1em;
        overflow: visible;
        vertical-align: -0.125em;
    }

    .photoviewer-header {
        position: relative;
        z-index: 2;
        height: 30px;
        border-radius: 5px 5px 0 0;
        overflow: hidden;
    }

    .photoviewer-header .photoviewer-toolbar {
        float: right;
    }

    [dir=rtl] .photoviewer-header .photoviewer-toolbar {
        float: left;
    }

    .photoviewer-header .photoviewer-button {
        height: 30px;
    }

    .photoviewer-header .photoviewer-button:hover {
        background-color: rgba(0, 0, 0, 0.1);
    }

    .photoviewer-header .photoviewer-button-close:hover {
        color: #fff;
        background-color: #ff4545;
    }

    .photoviewer-title {
        padding: 8px 10px;
        font-size: 14px;
        line-height: 1;
        white-space: nowrap;
        text-overflow: ellipsis;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        overflow: hidden;
    }

    .photoviewer-stage {
        position: absolute;
        top: 30px;
        right: 0;
        bottom: 40px;
        left: 0;
        z-index: 1;
        border-top: 1px solid rgba(0, 0, 0, 0.6);
        border-bottom: 1px solid rgba(0, 0, 0, 0.6);
        background-color: #fff;
        overflow: hidden;
    }

    .photoviewer-stage.stage-ready {
        text-align: center;
        font-size: 0;
    }

    .photoviewer-stage.stage-ready::before {
        content: "";
        display: inline-block;
        height: 100%;
        vertical-align: middle;
        overflow: hidden;
    }

    .photoviewer-image {
        position: absolute;
        display: inline-block;
        min-width: auto;
        max-width: none;
    }

    .photoviewer-image.image-ready {
        position: static;
        max-width: 100%;
        max-height: 100%;
        vertical-align: middle;
    }

    .photoviewer-footer {
        position: absolute;
        bottom: 0;
        z-index: 2;
        width: 100%;
        height: 40px;
        text-align: center;
    }

    [dir=rtl] .photoviewer-button-prev,
    [dir=rtl] .photoviewer-button-next {
        -ms-transform: rotate(180deg);
        transform: rotate(180deg);
    }

    .photoviewer-resizable-handle {
        position: absolute;
        z-index: 10;
    }

    .photoviewer-resizable-handle-e {
        top: 0;
        right: -5px;
        bottom: 0;
        left: auto;
        width: 10px;
        cursor: e-resize;
    }

    .photoviewer-resizable-handle-s {
        top: auto;
        right: 0;
        bottom: -5px;
        left: 0;
        height: 10px;
        cursor: s-resize;
    }

    .photoviewer-resizable-handle-w {
        top: 0;
        right: auto;
        bottom: 0;
        left: -5px;
        width: 10px;
        cursor: w-resize;
    }

    .photoviewer-resizable-handle-n {
        top: -5px;
        right: 0;
        bottom: auto;
        left: 0;
        height: 10px;
        cursor: n-resize;
    }

    .photoviewer-resizable-handle-se {
        top: auto;
        right: -5px;
        bottom: -5px;
        left: auto;
        width: 10px;
        height: 10px;
        cursor: se-resize;
    }

    .photoviewer-resizable-handle-sw {
        top: auto;
        right: auto;
        bottom: -5px;
        left: -5px;
        width: 10px;
        height: 10px;
        cursor: sw-resize;
    }

    .photoviewer-resizable-handle-nw {
        top: -5px;
        right: auto;
        bottom: auto;
        left: -5px;
        width: 10px;
        height: 10px;
        cursor: nw-resize;
    }

    .photoviewer-resizable-handle-ne {
        top: -5px;
        right: -5px;
        bottom: auto;
        left: auto;
        width: 10px;
        height: 10px;
        cursor: ne-resize;
    }

    :-webkit-full-screen {
        top: 0 !important;
        right: 0 !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        background-color: transparent;
        border-width: 0;
        border-radius: 0;
    }

    :-webkit-full-screen .photoviewer-header,
    :-webkit-full-screen .photoviewer-footer,
    :-webkit-full-screen .photoviewer-resizable-handle {
        display: none;
    }

    :-webkit-full-screen .photoviewer-stage {
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-width: 0;
        background-color: black;
    }

    :-moz-full-screen {
        top: 0 !important;
        right: 0 !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        background-color: transparent;
        border-width: 0;
        border-radius: 0;
    }

    :-moz-full-screen .photoviewer-header,
    :-moz-full-screen .photoviewer-footer,
    :-moz-full-screen .photoviewer-resizable-handle {
        display: none;
    }

    :-moz-full-screen .photoviewer-stage {
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-width: 0;
        background-color: black;
    }

    :-ms-fullscreen {
        top: 0 !important;
        right: 0 !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        background-color: transparent;
        border-width: 0;
        border-radius: 0;
    }

    :-ms-fullscreen .photoviewer-header,
    :-ms-fullscreen .photoviewer-footer,
    :-ms-fullscreen .photoviewer-resizable-handle {
        display: none;
    }

    :-ms-fullscreen .photoviewer-stage {
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-width: 0;
        background-color: black;
    }

    :full-screen {
        top: 0 !important;
        right: 0 !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        background-color: transparent;
        border-width: 0;
        border-radius: 0;
    }

    :full-screen .photoviewer-header,
    :full-screen .photoviewer-footer,
    :full-screen .photoviewer-resizable-handle {
        display: none;
    }

    :full-screen .photoviewer-stage {
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-width: 0;
        background-color: black;
    }

    :-webkit-full-screen {
        top: 0 !important;
        right: 0 !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        background-color: transparent;
        border-width: 0;
        border-radius: 0;
    }

    :-ms-fullscreen {
        top: 0 !important;
        right: 0 !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        background-color: transparent;
        border-width: 0;
        border-radius: 0;
    }

    :fullscreen {
        top: 0 !important;
        right: 0 !important;
        bottom: 0 !important;
        left: 0 !important;
        width: 100% !important;
        height: 100% !important;
        background-color: transparent;
        border-width: 0;
        border-radius: 0;
    }

    :-webkit-full-screen .photoviewer-header,
    :-webkit-full-screen .photoviewer-footer,
    :-webkit-full-screen .photoviewer-resizable-handle {
        display: none;
    }

    :-ms-fullscreen .photoviewer-header,
    :-ms-fullscreen .photoviewer-footer,
    :-ms-fullscreen .photoviewer-resizable-handle {
        display: none;
    }

    :fullscreen .photoviewer-header,
    :fullscreen .photoviewer-footer,
    :fullscreen .photoviewer-resizable-handle {
        display: none;
    }

    :-webkit-full-screen .photoviewer-stage {
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-width: 0;
        background-color: black;
    }

    :-ms-fullscreen .photoviewer-stage {
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-width: 0;
        background-color: black;
    }

    :fullscreen .photoviewer-stage {
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-width: 0;
        background-color: black;
    }

    ::backdrop {
        background-color: black;
    }

    ::-ms-backdrop {
        background-color: black;
    }

    .is-grab {
        cursor: move;
        cursor: grab;
    }

    .is-grabbing {
        cursor: move;
        cursor: grabbing;
    }

    .photoviewer-loader {
        position: absolute;
        top: 30px;
        left: 0;
        right: 0;
        bottom: 40px;
        z-index: 2;
        text-align: center;
        color: #333;
    }

    .photoviewer-loader::before {
        content: "";
        position: relative;
        display: inline-block;
        width: 36px;
        height: 36px;
        box-sizing: border-box;
        border-width: 5px;
        border-style: solid;
        border-color: rgba(0, 0, 0, 0.5) rgba(0, 0, 0, 0.5) rgba(0, 0, 0, 0.5) rgba(255, 255, 255, 0.5);
        border-radius: 100%;
        vertical-align: middle;
        animation: photoviewerLoading 1s infinite linear;
    }

    .photoviewer-loader::after {
        content: "";
        display: inline-block;
        width: 0;
        height: 100%;
        vertical-align: middle;
        overflow: hidden;
    }

    @keyframes photoviewerLoading {
        0% {
            transform: rotateZ(0deg) translate3d(0, 0, 0);
        }

        100% {
            transform: rotateZ(360deg) translate3d(0, 0, 0);
        }
    }

    /*# sourceMappingURL=photoviewer.css.map */
</style>
