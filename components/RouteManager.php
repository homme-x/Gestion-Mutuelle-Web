<?php

namespace app\components;

class RouteManager {

    private $routes = [

        // ============================ ESPACE ETRANGER ===============================
        'guest.welcome' => '/guest/accueil',
        'guest.connection' => "/guest/connexion",
        'guest.reset_password' => "/guest/reset_password",//C'est moi ici
//Ici c'est le lien dans la vue connection                          //Ici c'est dans le controleur
        'guest.member_form' => "/guest/member-form",
        'guest.administrator_form' => '/guest/administrator-form',

        // ============================ ESPACE ADMINISTRATEUR ==========================


        'administrator.home' => '/administrator/accueil',
        'administrator.disconnection' => '/administrator/deconnexion',
        'administrator.members' => '/administrator/membres',
        'administrator.new_member' => '/administrator/nouveau-membre',
        'administrator.add_member' => '/administrator/ajouter-member',
        'administrator.profile' => '/administrator/profil',
        'administrator.update_profile' => '/administrator/modifier-profil',
        'administrator.update_social_information' => '/administrator/modifier-information-sociale',
        'administrator.update_password' => '/administrator/modifier-mot-de-passe',


        'administrator.tontine_types' => '/administrator/types-tontine',
        'administrator.new_tontine_type' => '/administrator/nouveau-type-tontine',
        'administrator.update_tontine_type' => '/administrator/modifier-type-tontine',
        'administrator.add_tontine_type' => '/administrator/ajouter-type-tontine',
        'administrator.apply_tontine_type_update' => '/administrator/appliquer-modification-type-tontine',
        'administrator.delete_tontine_type' => '/administrator/supprimer-type-tontine',
        'administrator.tontines' => '/administrator/tontines',
        'administrator.new_tontine' => '/administrator/nouvelle-tontine',
        'administrator.add_tontine' => '/administrator/ajouter-tontine',
        'administrator.tontine_details' => '/administrator/details-tontine',

        'administrator.delete_tontine' => '/administrator/supprimer-tontine',




        'administrator.help_types' => '/administrator/types-aide',
        'administrator.new_help_type' => '/administrator/nouveau-type-aide',
        'administrator.update_help_type' => '/administrator/modifier-type-aide',
        'administrator.add_help_type' => '/administrator/ajouter-type-aide',
        'administrator.apply_help_type_update' => '/administrator/appliquer-modification-type-aide',
        'administrator.delete_help_type' => '/administrator/supprimer-type-aide',
        'administrator.administrators' => '/administrator/administrateurs',
        'administrator.new_session' => '/administrator/nouvelle-session',
        'administrator.savings' => '/administrator/epargnes',
        'administrator.new_saving'=> '/administrator/nouvelle-epargne',
        'administrator.borrowings' => '/administrator/emprunts',
        'administrator.new_borrowing' => '/administrator/nouvelle-emprunt',
        'administrator.helps' => '/administrator/aides',
        'administrator.sessions' => '/administrator/sessions',
        'administrator.delete_session' => '/administrator/supprimer-session',
        'administrator.update_session' => '/administrator/modifier-session',

        'administrator.refunds' => '/administrator/remboursements',
        'administrator.new_refund' => '/administrator/nouveau-remboursement',
        'administrator.exercises' => '/administrator/exercices',
        'administrator.exercise_debts' => '/administrator/dettes-exercices',

        'administrator.session_details' => '/administrator/details-session',

        'administrator.go_to_refunds' => '/administrator/passer-aux-remboursements',
        'administrator.go_to_borrowings' => '/administrator/passer-aux-emprunts',
        'administrator.cloture_session' => '/administrator/cloturer-session',
        'administrator.back_to_refunds' => '/administrator/rentrer-aux-remboursements',
        'administrator.back_to_savings' => '/administrator/rentrer-aux-epargnes',
        'administrator.cloture_exercise' => '/administrator/cloturer-exercice',
        'administrator.treat_debt' => '/administrator/traiter-dette',

        'administrator.member' => '/administrator/membre',
        'administrator.saving_member' => '/administrator/epargne-membre',
        'administrator.savings_details' => '/administrator/epargne-detail',
        'administrator.borrowing_member' => '/administrator/emprunt-membre',
        'administrator.borrowings_details' => '/administrator/emprunt-detail',
        'administrator.contribution_member' => '/administrator/contribution-membre',
        'administrator.contribution_member' => '/administrator/contribution-membre',


        'administrator.new_administrator' => '/administrator/nouvel-administrateur',
        'administrator.add_administrator' => '/administrator/ajouter-administrateur',

        'administrator.new_help' => '/administrator/nouvelle-aide',
        'administrator.add_help' => '/administrator/ajouter-aide',

        'administrator.help_details' => '/administrator/details-aide',

        'administrator.new_contribution' => '/administrator/nouvelle-contribution',
        'administrator.new_contribution_tontine' => '/administrator/nouvelle-contribution-tontine',
        'administrator.add_contribution' => '/administrator/ajouter-contribution',
        'administrator.add_contribution_tontine' => '/administrator/ajouter-contribution-tontine',
        'administrator.delete_help' => '/administrator/supprimer-aide',

        'administrator.disable_member' => '/administrator/desactiver-membre',
        'administrator.enable_member' => '/administrator/activer-membre',
        'administrator.delete_member' => '/administrator/supprimer-membre',

        'administrator.disable_admin' => '/administrator/desactiver-admin',
        'administrator.enable_admin' => '/administrator/activer-admin',
        'administrator.delete_admin' => '/administrator/supprimer-admin',


        'administrator.delete_saving' => '/administrator/supprimer-epargne',
        'administrator.delete_refund' => '/administrator/supprimer-remboursement',
        'administrator.delete_borrowing' => '/administrator/supprimer-emprunt',

         'administrator.fix_social_crown' => '/administrator/regler-fond-social',
        'administrator.fix_inscription' => '/administrator/regler-inscription',

        'administrator.settings' => '/administrator/configurations',
        'administrator.agape' => '/administrator/agape',
        'administrator.agapess' => '/administrator/agapess',
        'administrator.nouvelle_agape1' => '/administrator/nouvelle-agape1',
        'administrator.add_agape' => '/administrator/ajouter-agape',

        'administrator.nouvelle_agape' => '/administrator/nouvelle-agape',
        'administrator.apply_settings' => '/administrator/appliquer-configuration',
        'administrator.apply_agape' => '/administrator/appliquer-agape',
        '@administrator.search_session' => '/administrator/search-session',

        // ============================ ESPACE MEMBRE =================================
        'member.home' => '/member/accueil',
        'member.disconnection' => '/member/deconnexion',
        'member.profil' => '/member/profil',
        'member.profilmembre' => '/member/profil-membre',
        'member.profiladmin' => '/member/profil-admin',
        'member.epargnes' => '/member/epargnes',
        'member.emprunts' => '/member/emprunts',
        'member.members' => '/member/membres',
        'member.administrators' => '/member/administrators',
        'member.sessions' => '/member/sessions',
        'member.exercises' => '/member/exercises',
        'member.helps' => '/member/aides',
        'member.help_details' => '/member/detail-aide',
        'member.detailsession' => '/member/detail-session',
        'member.typesaide' => '/member/types-aide',
        'member.contributions' => '/member/contributions',
        'member.modifier_profil' => '/member/modifier-profil',
        'member.enregistrer_modifier_profil' => '/member/enregistrer-modifier-profil',
        'member.modifiermotdepasse' => '/member/modifier-mot-de-passe',
        'member.payer' => '/member/pay',
        'member.tontine_types' => '/member/types-tontine',
        'member.new_tontine' => '/member/nouvelle-tontine',
        'member.add_tontine' => '/member/ajouter-tontine',

    ];

    private $paths = [
        'admin_avatar_path' => '/storage/avatar/admin/',
        'member_avatar_path' => '/storage/avatar/member/'
    ];

    public function __construct()
    {
        \Yii::$app->getErrorHandler()->errorAction = "page/error";
        foreach ($this->routes as $index=>$route ) {
            \Yii::setAlias($index,$route);
        }

        foreach ($this->paths as $index=>$path ) {
            \Yii::setAlias($index,$path);
        }
    }

}