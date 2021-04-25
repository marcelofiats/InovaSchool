
new Cleave('#cpf', {
    delimiters: ['.', '.', '-'],
    blocks:[3, 3, 3, 2],
});

new Cleave('#rg', {
    delimiters: ['.', '.', '-'],
    blocks:[2, 3, 3, 1],
    uppercase: true,
});

new Cleave('#telefone1', {
    phone: true,
    phoneRegionCode: 'BR',
});
new Cleave('#telefone2', {
    phone: true,
    phoneRegionCode: 'BR',
});

new Cleave('#cep', {
    delimiters: ['-'],
    blocks: [5, 3],
});

new Cleave('#time', {
    time: true,
    timePattern: ['h', 'm', 's']
});

new Cleave('#creditCard', {
    creditCard: true,
});


