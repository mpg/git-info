all:
	@echo targets: install

MISCLATEXDIR=$(HOME)/texmf/tex/latex/misc

# Install .sty file to location searched by LaTeX
install:
	mkdir --parents $(MISCLATEXDIR)
	ln --force --symbolic \
	 --target-directory=$(MISCLATEXDIR) \
	 $(PWD)/git-info.sty

uninstall:
	-rm $(MISCLATEXDIR)/git-info.sty

examples:
	$(MAKE) -C examples

.PHONY: all install uninstall examples
