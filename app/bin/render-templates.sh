#!/bin/bash

indir="${1}"
outdir="${2}"

function template_files() {
    find "${indir}" \
        -mindepth 1 \
        -maxdepth 1 \
        -name '*.tmpl' \
        -print0
}

function non_template_files() {
    find "${indir}" \
        -mindepth 1 \
        -maxdepth 1 \
        -not \
        -name '*.tmpl' \
        -print0
}

rm -rf "${outdir}"
mkdir -p "${outdir}"
template_files | xargs -0 substitute-env-vars.sh "${outdir}"
non_template_files | xargs -0 -I{} ln -s {} "${outdir}"
