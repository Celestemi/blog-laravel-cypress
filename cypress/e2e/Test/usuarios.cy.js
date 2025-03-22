describe('Pruebas del módulo de Usuarios', () => {
    it('Debe cargar la página principal de usuarios', () => {
        cy.visit('/usuarios'); 
        cy.contains('Bienvenido al módulo de usuarios'); 
    });

    it('Debe cargar la página de un usuario específico', () => {
        const userId = 3; 
        cy.visit(`/usuarios/${userId}`);
        cy.contains(`Bienvenido al perfil del usuario con ID: ${userId}`);
    });
});
