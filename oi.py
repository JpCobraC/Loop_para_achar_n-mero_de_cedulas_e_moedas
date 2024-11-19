v = float(input())

print("NOTAS:")
cedulas_br = [100, 50, 20, 10, 5, 2]

for cedula in cedulas_br:
    a = int(v // cedula)
    v = v % cedula
    print(f"{a:.0f} nota(s) de R$ {cedula}.00")

print("MOEDAS:")
v = v * 100
moedas_br = [1.00, 0.50, 0.25, 0.10, 0.05, 0.01]

for moeda in moedas_br:
    a = int(v // int(moeda*100))
    v = v % int(moeda * 100)
    print(f"{a:.0f} moeda(s) de R$ {moeda:.2f}")