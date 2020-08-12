describe('Login', function() {
  it('logs in via ui', function(){
    cy.visit('/user/login');
    cy.get('#edit-name').type(Cypress.env('cyAdminUser'));
    cy.get('#edit-pass').type(Cypress.env('cyAdminPassword'));
    cy.get('#user-login-form #edit-submit').click();
        cy.get('#block-starter-branding').contains('Promet Drupal Starter');
  });
});