describe('Pruebas del módulo de Cursos', () => {
    it('Debe cargar la página principal de cursos', () => {
        cy.visit('/cursos'); // ❌ NO uses /Blog si Laravel no lo necesita
        cy.contains('Bienvenido al módulo de cursos');
    });

    it('Debe cargar la página de un curso específico', () => {
        const cursoId = 5; 
        cy.visit(`/cursos/${cursoId}`); 
        cy.contains(`Bienvenido al curso con ID: ${cursoId}`);
    });
});
