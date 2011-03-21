all: dvi

dvi: git-info-example.dvi
dvi: git-info-example2.dvi

pdf: git-info-example.pdf
pdf: git-info-example2.pdf

export TEXINPUTS=.:..:
TEX=latex
%.pdf: %.tex ; pdf$(TEX) $*

.PHONY: all dvi pdf
