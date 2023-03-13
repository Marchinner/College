# Python Object-Oriented

## Constructor and Self

```python
class Conta:
    def __init__(self, numero, cpf, nomeTitular, saldo):
        self.numero = numero
        self.cpf = cpf
        self.nomeTitular = nomeTitular
        self.saldo = saldo

def main():
    c1 = Conta(1,1,"Joao",1000) # Instantiating the Object
    print (f"Nome do titular da conta: {c1.nomeTitular}")
    print (f"Número da conta: {c1.numero}")
    print (f"CPF do titular da conta: {c1.cpf}")
    print (f"Saldo da conta: {c1.saldo}")

# When a python script runs, the reserved variable NAME that references him receives
# the value "__main__". In this case, the below IF condition always is TRUE.
# So, the code belonging to IF is executed. In this case, it's a call to Main Method.

if __name__ == "__main__":
    main()
```


## Aggregation

### Example

```python
# Salário Class
class Salario:
    def __init__(self, base, bonus):
        self.base = base
        self.bonus = bonus

    def salario_anual(self):
        return (self.base * 12) + self.bonus

# Empregado Class
class Empregado:
    def __init__(self, nome, idade, salario):
        self.nome = nome
        self.idade = idade
        self.salario_agregado = salario # Aggregation

    def salario_total(self):
        return self.salario_agregado.salario_anual()

# Code
salario = Salario(10000, 700)
empregado = Empregado('Musashi', 46, salario)
print(empregado.salario_total)

# Expected Output: 120700
```

## Class Method x Static Method

```python
from datetime import date


class Pessoa:
    def __init__(self, nome, idade):
        self.nome = nome
        self.idade = idade

    # A class method to create a Pessoa object by birth date
    @classmethod
    def apartirAnoNascimento(cls, nome, ano):
        return cls(nome, date.today().year - ano)
    
    # Static method: check age
    @staticmethod
    def ehMaiorIdade(idade):
        return idade >= 18

pessoa1 = Pessoa('Maria', 26)
pessoa2 = Pessoa.apartirAnoNascimento('Ana', 2006)

print(pessoa1.idade)
print(pessoa2.idade)

# Print the result
print(Pessoa.ehMaiorIdade(17))
```