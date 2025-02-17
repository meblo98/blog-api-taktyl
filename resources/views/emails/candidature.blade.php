{{-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle Candidature</title>
</head>
<body>
    <h2>Nouvelle Candidature Reçue</h2>
    <p><strong>Nom :</strong> {{ $nom_complet }}</p>
    <p><strong>Poste :</strong> {{ $poste }}</p>
    <p><strong>CV :</strong> <a href="{{ $cv }}">Télécharger le CV</a></p>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle Candidature</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
        <tr>
            <td align="center">
                <table role="presentation" width="600" cellspacing="0" cellpadding="0" border="0" style="background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
                    <tr>
                        <td style="text-align: center; padding-bottom: 20px;">
                            <h2 style="color: #333;">📩 Nouvelle Candidature Reçue</h2>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 0; font-size: 16px; color: #555;">
                            <p><strong>👤 Nom :</strong> <span style="color: #333;">{{ $nom_complet }}</span></p>
                            <p><strong>💼 Poste :</strong> <span style="color: #333;">{{ $poste }}</span></p>
                            <p><strong>📄 CV :</strong> <a href="{{ $cv }}" style="color: #007bff; text-decoration: none; font-weight: bold;">Télécharger le CV</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center; padding-top: 20px;">
                            <a href="{{ $cv }}" style="background-color: #28a745; color: #fff; text-decoration: none; padding: 12px 20px; border-radius: 5px; font-size: 16px; display: inline-block;">
                                📥 Télécharger le CV
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center; padding-top: 30px; font-size: 12px; color: #888;">
                            <p>© {{ date('Y') }} - Votre Entreprise | Tous droits réservés.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>




{{-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle Candidature</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7fafc;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header h2 {
            color: #2d3748;
            font-size: 28px;
            margin: 0;
            font-weight: 600;
        }
        .header p {
            color: #718096;
            font-size: 16px;
            margin-top: 10px;
        }
        .details {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }
        .details p {
            margin: 15px 0;
            font-size: 16px;
            color: #4a5568;
        }
        .details strong {
            color: #2d3748;
            font-weight: 600;
        }
        .button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #4299e1;
            color: #ffffff;
            text-decoration: none;
            border-radius: 6px;
            text-align: center;
            font-size: 16px;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #3182ce;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #718096;
        }
        .footer a {
            color: #4299e1;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- En-tête -->
        <div class="header">
            <h2>Nouvelle Candidature Reçue</h2>
            <p>Vous avez reçu une nouvelle candidature pour un poste.</p>
        </div>

        <!-- Détails de la candidature -->
        <div class="details">
            <p><strong>Nom :</strong> {{ $nom_complet }}</p>
            <p><strong>Poste :</strong> {{ $poste }}</p>
            <p><strong>CV :</strong> <a href="{{ $cv }}" class="button">Télécharger le CV</a></p>
        </div>
        

        <!-- Pied de page -->
        <div class="footer">
            <p>Merci de ne pas répondre à cet e-mail. <br> 
            Si vous avez des questions, contactez-nous à <a href="mailto:lomouhamedelbachir@gmail.com">lomouhamedelbachir@gmail.com</a>.</p>
        </div>
    </div>
</body>
</html> --}}