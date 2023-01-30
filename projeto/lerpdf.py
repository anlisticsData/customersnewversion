import tabula

r = tabula.read_pdf("ListadeProdutosemordemalfabticaNCL102016.pdf")
print(len(r))

