<?php
class plugin {
    public function __construct()
    {
        global $_GET, $_POST, $_SESSION;
    }
	public function content() {
		$text = "<form class='form-horizontal'>
  <div class='form-group'>
    <label class='col-lg-2 control-label'>ID Account</label>
    <div class='col-lg-10'>
		<input name='owner_id' class='form-control required' size='30' />
    </div>
  </div>
  <div class='form-group'>
    <label class='col-lg-2 control-label'>Finestra in cui mettere l'item</label>
    <div class='col-lg-10'>
		<select name='window' class='form-control required'><option value='MALL'>Item Shop</option><option value='SAFEBOX'>Magazzino</option></select>
    </div>
  </div>
  <div class='form-group'>
    <label class='col-lg-2 control-label'>Posizione</label>
    <div class='col-lg-10'>
		<input name='pos' class='form-control required' size='30' />
    </div>
  </div>
  <div class='form-group'>
    <label class='col-lg-2 control-label'>Quantità</label>
    <div class='col-lg-10'>
		<select name='count' class='form-control required'>
			<option value='1'>1</option>
			<option value='25'>25</option>
			<option value='50'>50</option>
			<option value='100'>100</option>
			<option value='150'>150</option>
			<option value='200'>200</option>
		</select>
    </div>
  </div>
  <div class='form-group'>
    <label class='col-lg-2 control-label'>Pietra n°1</label>
    <div class='col-lg-10'>
		<select name='socket0' class='form-control required'>
			<optgroup label='-----------'>
			<option value='28030'>Pietra della Perforazione +0</option>
			<option value='28130'>Pietra della Perforazione +1</option>
			<option value='28230'>Pietra della Perforazione +2</option>
			<option value='28330'>Pietra della Perforazione +3</option>
			<option value='28430'>Pietra della Perforazione +4</option>
			<option value='28530'>Pietra della Perforazione +5</option>
			<option value='28630'>Pietra della Perforazione +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28031'>Pietra del Colpo Mortale +0</option>
			<option value='28131'>Pietra del Colpo Mortale +1</option>
			<option value='28231'>Pietra del Colpo Mortale +2</option>
			<option value='28331'>Pietra del Colpo Mortale +3</option>
			<option value='28431'>Pietra del Colpo Mortale +4</option>
			<option value='28531'>Pietra del Colpo Mortale +5</option>
			<option value='28631'>Pietra del Colpo Mortale +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28032'>Pietra della Ripetizione +0</option>
			<option value='28132'>Pietra della Ripetizione +1</option>
			<option value='28232'>Pietra della Ripetizione +2</option>
			<option value='28332'>Pietra della Ripetizione +3</option>
			<option value='28432'>Pietra della Ripetizione +4</option>
			<option value='28532'>Pietra della Ripetizione +5</option>
			<option value='28632'>Pietra della Ripetizione +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28033'>Pietra Anti-Guerriero +0</option>
			<option value='28133'>Pietra Anti-Guerriero +1</option>
			<option value='28233'>Pietra Anti-Guerriero +2</option>
			<option value='28333'>Pietra Anti-Guerriero +3</option>
			<option value='28433'>Pietra Anti-Guerriero +4</option>
			<option value='28533'>Pietra Anti-Guerriero +5</option>
			<option value='28633'>Pietra Anti-Guerriero +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28034'>Pietra Anti-Ninja +0</option>
			<option value='28134'>Pietra Anti-Ninja +1</option>
			<option value='28234'>Pietra Anti-Ninja +2</option>
			<option value='28334'>Pietra Anti-Ninja +3</option>
			<option value='28434'>Pietra Anti-Ninja +4</option>
			<option value='28534'>Pietra Anti-Ninja +5</option>
			<option value='28634'>Pietra Anti-Ninja +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28035'>Pietra Anti-Sura +0</option>
			<option value='28135'>Pietra Anti-Sura +1</option>
			<option value='28235'>Pietra Anti-Sura +2</option>
			<option value='28335'>Pietra Anti-Sura +3</option>
			<option value='28435'>Pietra Anti-Sura +4</option>
			<option value='28535'>Pietra Anti-Sura +5</option>
			<option value='28635'>Pietra Anti-Sura +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28036'>Pietra Anti-Shamana +0</option>
			<option value='28136'>Pietra Anti-Shamana +1</option>
			<option value='28236'>Pietra Anti-Shamana +2</option>
			<option value='28336'>Pietra Anti-Shamana +3</option>
			<option value='28436'>Pietra Anti-Shamana +4</option>
			<option value='28536'>Pietra Anti-Shamana +5</option>
			<option value='28636'>Pietra Anti-Shamana +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28037'>Pietra del Mostro +0</option>
			<option value='28137'>Pietra del Mostro +1</option>
			<option value='28237'>Pietra del Mostro +2</option>
			<option value='28337'>Pietra del Mostro +3</option>
			<option value='28437'>Pietra del Mostro +4</option>
			<option value='28537'>Pietra del Mostro +5</option>
			<option value='28637'>Pietra del Mostro +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28038'>Pietra dell'Evasione +0</option>
			<option value='28138'>Pietra dell'Evasione +1</option>
			<option value='28238'>Pietra dell'Evasione +2</option>
			<option value='28338'>Pietra dell'Evasione +3</option>
			<option value='28438'>Pietra dell'Evasione +4</option>
			<option value='28538'>Pietra dell'Evasione +5</option>
			<option value='28638'>Pietra dell'Evasione +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28039'>Pietra dell'Inchino +0</option>
			<option value='28139'>Pietra dell'Inchino +1</option>
			<option value='28239'>Pietra dell'Inchino +2</option>
			<option value='28339'>Pietra dell'Inchino +3</option>
			<option value='28439'>Pietra dell'Inchino +4</option>
			<option value='28539'>Pietra dell'Inchino +5</option>
			<option value='28639'>Pietra dell'Inchino +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28040'>Pietra della Magia +0</option>
			<option value='28140'>Pietra della Magia +1</option>
			<option value='28240'>Pietra della Magia +2</option>
			<option value='28340'>Pietra della Magia +3</option>
			<option value='28440'>Pietra della Magia +4</option>
			<option value='28540'>Pietra della Magia +5</option>
			<option value='28640'>Pietra della Magia +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28041'>Pietra della Vitalità +0</option>
			<option value='28141'>Pietra della Vitalità +1</option>
			<option value='28241'>Pietra della Vitalità +2</option>
			<option value='28341'>Pietra della Vitalità +3</option>
			<option value='28441'>Pietra della Vitalità +4</option>
			<option value='28541'>Pietra della Vitalità +5</option>
			<option value='28641'>Pietra della Vitalità +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28042'>Pietra della Difesa +0</option>
			<option value='28142'>Pietra della Difesa +1</option>
			<option value='28242'>Pietra della Difesa +2</option>
			<option value='28342'>Pietra della Difesa +3</option>
			<option value='28442'>Pietra della Difesa +4</option>
			<option value='28542'>Pietra della Difesa +5</option>
			<option value='28642'>Pietra della Difesa +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28043'>Pietra della Fretta +0</option>
			<option value='28143'>Pietra della Fretta +1</option>
			<option value='28243'>Pietra della Fretta +2</option>
			<option value='28343'>Pietra della Fretta +3</option>
			<option value='28443'>Pietra della Fretta +4</option>
			<option value='28543'>Pietra della Fretta +5</option>
			<option value='28643'>Pietra della Fretta +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28000'>Pietra del Massacro +0</option>
			<option value='28100'>Pietra del Massacro +1</option>
			<option value='28200'>Pietra del Massacro +2</option>
			<option value='28300'>Pietra del Massacro +3</option>
			<option value='28004'>Pietra della Paranoia +0</option>
			<option value='28104'>Pietra della Paranoia +1</option>
			<option value='28204'>Pietra della Paranoia +2</option>
			<option value='28304'>Pietra della Paranoia +3</option>
			<option value='28008'>Pietra del Trauma +0</option>
			<option value='28108'>Pietra del Trauma +1</option>
			<option value='28208'>Pietra del Trauma +2</option>
			<option value='28308'>Pietra del Trauma +3</option>
			<option value='28012'>Pietra della Stupidità +0</option>
			<option value='28112'>Pietra della Stupidità +1</option>
			<option value='28212'>Pietra della Stupidità +2</option>
			<option value='28312'>Pietra della Stupidità +3</option>
		</select>
    </div>
  </div>
  <div class='form-group'>
    <label class='col-lg-2 control-label'>Pietra n°2</label>
    <div class='col-lg-10'>
		<select name='socket1' class='form-control required'>
			<optgroup label='-----------'>
			<option value='28030'>Pietra della Perforazione +0</option>
			<option value='28130'>Pietra della Perforazione +1</option>
			<option value='28230'>Pietra della Perforazione +2</option>
			<option value='28330'>Pietra della Perforazione +3</option>
			<option value='28430'>Pietra della Perforazione +4</option>
			<option value='28530'>Pietra della Perforazione +5</option>
			<option value='28630'>Pietra della Perforazione +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28031'>Pietra del Colpo Mortale +0</option>
			<option value='28131'>Pietra del Colpo Mortale +1</option>
			<option value='28231'>Pietra del Colpo Mortale +2</option>
			<option value='28331'>Pietra del Colpo Mortale +3</option>
			<option value='28431'>Pietra del Colpo Mortale +4</option>
			<option value='28531'>Pietra del Colpo Mortale +5</option>
			<option value='28631'>Pietra del Colpo Mortale +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28032'>Pietra della Ripetizione +0</option>
			<option value='28132'>Pietra della Ripetizione +1</option>
			<option value='28232'>Pietra della Ripetizione +2</option>
			<option value='28332'>Pietra della Ripetizione +3</option>
			<option value='28432'>Pietra della Ripetizione +4</option>
			<option value='28532'>Pietra della Ripetizione +5</option>
			<option value='28632'>Pietra della Ripetizione +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28033'>Pietra Anti-Guerriero +0</option>
			<option value='28133'>Pietra Anti-Guerriero +1</option>
			<option value='28233'>Pietra Anti-Guerriero +2</option>
			<option value='28333'>Pietra Anti-Guerriero +3</option>
			<option value='28433'>Pietra Anti-Guerriero +4</option>
			<option value='28533'>Pietra Anti-Guerriero +5</option>
			<option value='28633'>Pietra Anti-Guerriero +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28034'>Pietra Anti-Ninja +0</option>
			<option value='28134'>Pietra Anti-Ninja +1</option>
			<option value='28234'>Pietra Anti-Ninja +2</option>
			<option value='28334'>Pietra Anti-Ninja +3</option>
			<option value='28434'>Pietra Anti-Ninja +4</option>
			<option value='28534'>Pietra Anti-Ninja +5</option>
			<option value='28634'>Pietra Anti-Ninja +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28035'>Pietra Anti-Sura +0</option>
			<option value='28135'>Pietra Anti-Sura +1</option>
			<option value='28235'>Pietra Anti-Sura +2</option>
			<option value='28335'>Pietra Anti-Sura +3</option>
			<option value='28435'>Pietra Anti-Sura +4</option>
			<option value='28535'>Pietra Anti-Sura +5</option>
			<option value='28635'>Pietra Anti-Sura +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28036'>Pietra Anti-Shamana +0</option>
			<option value='28136'>Pietra Anti-Shamana +1</option>
			<option value='28236'>Pietra Anti-Shamana +2</option>
			<option value='28336'>Pietra Anti-Shamana +3</option>
			<option value='28436'>Pietra Anti-Shamana +4</option>
			<option value='28536'>Pietra Anti-Shamana +5</option>
			<option value='28636'>Pietra Anti-Shamana +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28037'>Pietra del Mostro +0</option>
			<option value='28137'>Pietra del Mostro +1</option>
			<option value='28237'>Pietra del Mostro +2</option>
			<option value='28337'>Pietra del Mostro +3</option>
			<option value='28437'>Pietra del Mostro +4</option>
			<option value='28537'>Pietra del Mostro +5</option>
			<option value='28637'>Pietra del Mostro +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28038'>Pietra dell'Evasione +0</option>
			<option value='28138'>Pietra dell'Evasione +1</option>
			<option value='28238'>Pietra dell'Evasione +2</option>
			<option value='28338'>Pietra dell'Evasione +3</option>
			<option value='28438'>Pietra dell'Evasione +4</option>
			<option value='28538'>Pietra dell'Evasione +5</option>
			<option value='28638'>Pietra dell'Evasione +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28039'>Pietra dell'Inchino +0</option>
			<option value='28139'>Pietra dell'Inchino +1</option>
			<option value='28239'>Pietra dell'Inchino +2</option>
			<option value='28339'>Pietra dell'Inchino +3</option>
			<option value='28439'>Pietra dell'Inchino +4</option>
			<option value='28539'>Pietra dell'Inchino +5</option>
			<option value='28639'>Pietra dell'Inchino +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28040'>Pietra della Magia +0</option>
			<option value='28140'>Pietra della Magia +1</option>
			<option value='28240'>Pietra della Magia +2</option>
			<option value='28340'>Pietra della Magia +3</option>
			<option value='28440'>Pietra della Magia +4</option>
			<option value='28540'>Pietra della Magia +5</option>
			<option value='28640'>Pietra della Magia +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28041'>Pietra della Vitalità +0</option>
			<option value='28141'>Pietra della Vitalità +1</option>
			<option value='28241'>Pietra della Vitalità +2</option>
			<option value='28341'>Pietra della Vitalità +3</option>
			<option value='28441'>Pietra della Vitalità +4</option>
			<option value='28541'>Pietra della Vitalità +5</option>
			<option value='28641'>Pietra della Vitalità +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28042'>Pietra della Difesa +0</option>
			<option value='28142'>Pietra della Difesa +1</option>
			<option value='28242'>Pietra della Difesa +2</option>
			<option value='28342'>Pietra della Difesa +3</option>
			<option value='28442'>Pietra della Difesa +4</option>
			<option value='28542'>Pietra della Difesa +5</option>
			<option value='28642'>Pietra della Difesa +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28043'>Pietra della Fretta +0</option>
			<option value='28143'>Pietra della Fretta +1</option>
			<option value='28243'>Pietra della Fretta +2</option>
			<option value='28343'>Pietra della Fretta +3</option>
			<option value='28443'>Pietra della Fretta +4</option>
			<option value='28543'>Pietra della Fretta +5</option>
			<option value='28643'>Pietra della Fretta +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28000'>Pietra del Massacro +0</option>
			<option value='28100'>Pietra del Massacro +1</option>
			<option value='28200'>Pietra del Massacro +2</option>
			<option value='28300'>Pietra del Massacro +3</option>
			<option value='28004'>Pietra della Paranoia +0</option>
			<option value='28104'>Pietra della Paranoia +1</option>
			<option value='28204'>Pietra della Paranoia +2</option>
			<option value='28304'>Pietra della Paranoia +3</option>
			<option value='28008'>Pietra del Trauma +0</option>
			<option value='28108'>Pietra del Trauma +1</option>
			<option value='28208'>Pietra del Trauma +2</option>
			<option value='28308'>Pietra del Trauma +3</option>
			<option value='28012'>Pietra della Stupidità +0</option>
			<option value='28112'>Pietra della Stupidità +1</option>
			<option value='28212'>Pietra della Stupidità +2</option>
			<option value='28312'>Pietra della Stupidità +3</option>
		</select>
	</div>
  </div>
  <div class='form-group'>
    <label class='col-lg-2 control-label'>Pietra n°3</label>
    <div class='col-lg-10'>
		<select name='socket2' class='form-control required'>
			<optgroup label='-----------'>
			<option value='28030'>Pietra della Perforazione +0</option>
			<option value='28130'>Pietra della Perforazione +1</option>
			<option value='28230'>Pietra della Perforazione +2</option>
			<option value='28330'>Pietra della Perforazione +3</option>
			<option value='28430'>Pietra della Perforazione +4</option>
			<option value='28530'>Pietra della Perforazione +5</option>
			<option value='28630'>Pietra della Perforazione +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28031'>Pietra del Colpo Mortale +0</option>
			<option value='28131'>Pietra del Colpo Mortale +1</option>
			<option value='28231'>Pietra del Colpo Mortale +2</option>
			<option value='28331'>Pietra del Colpo Mortale +3</option>
			<option value='28431'>Pietra del Colpo Mortale +4</option>
			<option value='28531'>Pietra del Colpo Mortale +5</option>
			<option value='28631'>Pietra del Colpo Mortale +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28032'>Pietra della Ripetizione +0</option>
			<option value='28132'>Pietra della Ripetizione +1</option>
			<option value='28232'>Pietra della Ripetizione +2</option>
			<option value='28332'>Pietra della Ripetizione +3</option>
			<option value='28432'>Pietra della Ripetizione +4</option>
			<option value='28532'>Pietra della Ripetizione +5</option>
			<option value='28632'>Pietra della Ripetizione +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28033'>Pietra Anti-Guerriero +0</option>
			<option value='28133'>Pietra Anti-Guerriero +1</option>
			<option value='28233'>Pietra Anti-Guerriero +2</option>
			<option value='28333'>Pietra Anti-Guerriero +3</option>
			<option value='28433'>Pietra Anti-Guerriero +4</option>
			<option value='28533'>Pietra Anti-Guerriero +5</option>
			<option value='28633'>Pietra Anti-Guerriero +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28034'>Pietra Anti-Ninja +0</option>
			<option value='28134'>Pietra Anti-Ninja +1</option>
			<option value='28234'>Pietra Anti-Ninja +2</option>
			<option value='28334'>Pietra Anti-Ninja +3</option>
			<option value='28434'>Pietra Anti-Ninja +4</option>
			<option value='28534'>Pietra Anti-Ninja +5</option>
			<option value='28634'>Pietra Anti-Ninja +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28035'>Pietra Anti-Sura +0</option>
			<option value='28135'>Pietra Anti-Sura +1</option>
			<option value='28235'>Pietra Anti-Sura +2</option>
			<option value='28335'>Pietra Anti-Sura +3</option>
			<option value='28435'>Pietra Anti-Sura +4</option>
			<option value='28535'>Pietra Anti-Sura +5</option>
			<option value='28635'>Pietra Anti-Sura +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28036'>Pietra Anti-Shamana +0</option>
			<option value='28136'>Pietra Anti-Shamana +1</option>
			<option value='28236'>Pietra Anti-Shamana +2</option>
			<option value='28336'>Pietra Anti-Shamana +3</option>
			<option value='28436'>Pietra Anti-Shamana +4</option>
			<option value='28536'>Pietra Anti-Shamana +5</option>
			<option value='28636'>Pietra Anti-Shamana +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28037'>Pietra del Mostro +0</option>
			<option value='28137'>Pietra del Mostro +1</option>
			<option value='28237'>Pietra del Mostro +2</option>
			<option value='28337'>Pietra del Mostro +3</option>
			<option value='28437'>Pietra del Mostro +4</option>
			<option value='28537'>Pietra del Mostro +5</option>
			<option value='28637'>Pietra del Mostro +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28038'>Pietra dell'Evasione +0</option>
			<option value='28138'>Pietra dell'Evasione +1</option>
			<option value='28238'>Pietra dell'Evasione +2</option>
			<option value='28338'>Pietra dell'Evasione +3</option>
			<option value='28438'>Pietra dell'Evasione +4</option>
			<option value='28538'>Pietra dell'Evasione +5</option>
			<option value='28638'>Pietra dell'Evasione +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28039'>Pietra dell'Inchino +0</option>
			<option value='28139'>Pietra dell'Inchino +1</option>
			<option value='28239'>Pietra dell'Inchino +2</option>
			<option value='28339'>Pietra dell'Inchino +3</option>
			<option value='28439'>Pietra dell'Inchino +4</option>
			<option value='28539'>Pietra dell'Inchino +5</option>
			<option value='28639'>Pietra dell'Inchino +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28040'>Pietra della Magia +0</option>
			<option value='28140'>Pietra della Magia +1</option>
			<option value='28240'>Pietra della Magia +2</option>
			<option value='28340'>Pietra della Magia +3</option>
			<option value='28440'>Pietra della Magia +4</option>
			<option value='28540'>Pietra della Magia +5</option>
			<option value='28640'>Pietra della Magia +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28041'>Pietra della Vitalità +0</option>
			<option value='28141'>Pietra della Vitalità +1</option>
			<option value='28241'>Pietra della Vitalità +2</option>
			<option value='28341'>Pietra della Vitalità +3</option>
			<option value='28441'>Pietra della Vitalità +4</option>
			<option value='28541'>Pietra della Vitalità +5</option>
			<option value='28641'>Pietra della Vitalità +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28042'>Pietra della Difesa +0</option>
			<option value='28142'>Pietra della Difesa +1</option>
			<option value='28242'>Pietra della Difesa +2</option>
			<option value='28342'>Pietra della Difesa +3</option>
			<option value='28442'>Pietra della Difesa +4</option>
			<option value='28542'>Pietra della Difesa +5</option>
			<option value='28642'>Pietra della Difesa +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28043'>Pietra della Fretta +0</option>
			<option value='28143'>Pietra della Fretta +1</option>
			<option value='28243'>Pietra della Fretta +2</option>
			<option value='28343'>Pietra della Fretta +3</option>
			<option value='28443'>Pietra della Fretta +4</option>
			<option value='28543'>Pietra della Fretta +5</option>
			<option value='28643'>Pietra della Fretta +6</option>
			</optgroup>
			<optgroup label='-----------'>
			<option value='28000'>Pietra del Massacro +0</option>
			<option value='28100'>Pietra del Massacro +1</option>
			<option value='28200'>Pietra del Massacro +2</option>
			<option value='28300'>Pietra del Massacro +3</option>
			<option value='28004'>Pietra della Paranoia +0</option>
			<option value='28104'>Pietra della Paranoia +1</option>
			<option value='28204'>Pietra della Paranoia +2</option>
			<option value='28304'>Pietra della Paranoia +3</option>
			<option value='28008'>Pietra del Trauma +0</option>
			<option value='28108'>Pietra del Trauma +1</option>
			<option value='28208'>Pietra del Trauma +2</option>
			<option value='28308'>Pietra del Trauma +3</option>
			<option value='28012'>Pietra della Stupidità +0</option>
			<option value='28112'>Pietra della Stupidità +1</option>
			<option value='28212'>Pietra della Stupidità +2</option>
			<option value='28312'>Pietra della Stupidità +3</option>
		</select> 
	</div>
  </div>
  <div class='form-group'>
    <label class='col-lg-2 control-label'>Bonus n°1</label>
    <div class='col-lg-10'>
		<select class='form-control required' name='attrtype0'>
			<option> </option>
			<option value='1'>Max Hp</option>
			<option value='2'>Max Mp</option>
			<option value='3'>Forza di vita</option>
			<option value='4'>INT</option>
			<option value='5'>STR</option>
			<option value='6'>Mobilità</option>
			<option value='7'>ATK Speed</option>
			<option value='8'>Velocità di movimento</option>
			<option value='9'>Velocità magia</option>
			<option value='10'>assorbe hp</option>
			<option value='11'>assorbe mp</option>
			<option value='12'>Possibilità avvelenamento </option>
			<option value='13'>Possibilità STUN</option>
			<option value='14'>Possibilità SLOW</option>
			<option value='15'>Possibilità CRITICO</option>
			<option value='16'>Possibilità TRAFIGGONO</option>
			<option value='17'>Forte contro mezziuomini </option>
			<option value='18'>Resistenza animali</option>
			<option value='19'>Resistenza orchi</option>
			<option value='20'>Resistenza esoterici</option>
			<option value='21'>Resistenza zombie</option>
			<option value='22'>Resistenza diavolo</option>
			<option value='12'>Possibilità avvelenamento </option>
			<option value='13'>Possibilità STUN</option>
			<option value='14'>Possibilità SLOW</option>
			<option value='15'>Possibilità CRITICO</option>
			<option value='16'>Possibilità TRAF??</option>
			<option value='17'>Forte contro mezziuomini</option>
			<option value='18'>Resistenza animali</option>
			<option value='19'>Resistenza orchi</option>
			<option value='20'>Resistenza esoterici</option>
			<option value='21'>Resistenza zombie</option>
			<option value='22'>Resistenza diavolo</option>
			<option value='23'>Danni assorbiti da HP</option>
			<option value='24'>Danni assorbiti da MP</option>
			<option value='25'>Possbilita di prendere MP dall'avversario </option>
			<option value='26'>Possibilità di mantenere MP nei colpi </option>
			<option value='27'>Possibilità di bloccare attacco corporale </option>
			<option value='28'>Possibilità di schivare frecce</option>
			<option value='29'>Difesa spada</option>
			<option value='30'>Difesa spadone</option>
			<option value='31'>Difesa pugnale</option>
			<option value='32'>Difesa Pugnale</option>
			<option value='33'>Difesa Ventaglio</option>
			<option value='34'>Difesa Freccia </option>
			<option value='35'>Resistenza Fuoco</option>
			<option value='36'>Resistenza Lampo</option>
			<option value='37'>Difesa Magia </option>
			<option value='38'>Resistenza</option>
			<option value='39'>Riflettere attacco corporale</option>
			<option value='40'>Riflettere maledizione</option>
			<option value='41'>Resistenza Avvelenamento</option>
			<option value='42'>Possibilità di rigenerare MP</option>
			<option value='43'>Possibilità su EXP Bonus</option>
			<option value='44'>Possibilità di lasciar cadere Yang</option>
			<option value='45'>Possibilità di lasciar cadere il doppio degli oggetti</option>
			<option value='46'>Percentuale dell'aumento dell'effetto di una pozione</option>
			<option value='47'>Possibilità di rigenerare HP</option>
			<option value='48'>Anti Stun</option>
			<option value='49'>Difesa contro rallentamento</option>
			<option value='50'>Immune contro caduta</option>
			<option value='52'>Aumento raggio d'azione dell'arco</option>
			<option value='53'>Aumento del valore di attacco</option>
			<option value='54'>Aumento della difesa</option>
			<option value='55'>Aumento del valore di attacco magico</option>
			<option value='56'>Aumento della difesa magica</option>
			<option value='58'>Max resistenza</option>
			<option value='59'>Forte contro Guerrieri</option>
			<option value='60'>Forte contro Ninja</option>
			<option value='61'>Forte contro Sura</option>
			<option value='62'>Forte contro Shamane</option>
			<option value='63'>Forte contro Mostri</option>
			<option value='64'>Valore di attacco</option>
			<option value='65'>Difesa</option>
			<option value='66'>EXP</option>
			<option value='67'>Possibilit? di drop di oggetti</option>
			<option value='68'>Possibilit? di drop di yang</option>
			<option value='71'>Medi</option>
			<option value='72'>Abilità</option>
			<option value='73'>Resisenza danni abilità</option>
			<option value='74'>Resistenza danni medi</option>
			<option value='76'>iCafe Exp bonus</option>
			<option value='77'>iCafe Possibilità di razziare oggetti</option>
			<option value='78'>Possibilità di difesa da attacchi Guerrieri</option>
			<option value='79'>Possibilità di difesa da attacchi Ninja</option>
			<option value='80'>Possibilità di difesa da attacchi Sura</option>
			<option value='81'>Possibilità di difesa da attacchi Stamani</option>
			</select>
    </div>
  </div>
  <div class='form-group'>
    <label class='col-lg-2 control-label'>Valore del Bonus n°1</label>
    <div class='col-lg-10'>
           <input tabindex='2' name='attrvalue0' class='form-control required' size='30' /></td>
    </div>
  </div>
  <div class='form-group'>
    <label class='col-lg-2 control-label'>Bonus n°2</label>
    <div class='col-lg-10'>
		<select class='form-control required' name='attrtype1'>
			<option> </option>
			<option value='1'>Max Hp</option>
			<option value='2'>Max Mp</option>
			<option value='3'>Forza di vita</option>
			<option value='4'>INT</option>
			<option value='5'>STR</option>
			<option value='6'>Mobilità</option>
			<option value='7'>ATK Speed</option>
			<option value='8'>Velocità di movimento</option>
			<option value='9'>Velocità magia</option>
			<option value='10'>assorbe hp</option>
			<option value='11'>assorbe mp</option>
			<option value='12'>Possibilità avvelenamento </option>
			<option value='13'>Possibilità STUN</option>
			<option value='14'>Possibilità SLOW</option>
			<option value='15'>Possibilità CRITICO</option>
			<option value='16'>Possibilità TRAFIGGONO</option>
			<option value='17'>Forte contro mezziuomini </option>
			<option value='18'>Resistenza animali</option>
			<option value='19'>Resistenza orchi</option>
			<option value='20'>Resistenza esoterici</option>
			<option value='21'>Resistenza zombie</option>
			<option value='22'>Resistenza diavolo</option>
			<option value='12'>Possibilità avvelenamento </option>
			<option value='13'>Possibilità STUN</option>
			<option value='14'>Possibilità SLOW</option>
			<option value='15'>Possibilità CRITICO</option>
			<option value='16'>Possibilità TRAF??</option>
			<option value='17'>Forte contro mezziuomini</option>
			<option value='18'>Resistenza animali</option>
			<option value='19'>Resistenza orchi</option>
			<option value='20'>Resistenza esoterici</option>
			<option value='21'>Resistenza zombie</option>
			<option value='22'>Resistenza diavolo</option>
			<option value='23'>Danni assorbiti da HP</option>
			<option value='24'>Danni assorbiti da MP</option>
			<option value='25'>Possbilita di prendere MP dall'avversario </option>
			<option value='26'>Possibilità di mantenere MP nei colpi </option>
			<option value='27'>Possibilità di bloccare attacco corporale </option>
			<option value='28'>Possibilità di schivare frecce</option>
			<option value='29'>Difesa spada</option>
			<option value='30'>Difesa spadone</option>
			<option value='31'>Difesa pugnale</option>
			<option value='32'>Difesa Pugnale</option>
			<option value='33'>Difesa Ventaglio</option>
			<option value='34'>Difesa Freccia </option>
			<option value='35'>Resistenza Fuoco</option>
			<option value='36'>Resistenza Lampo</option>
			<option value='37'>Difesa Magia </option>
			<option value='38'>Resistenza</option>
			<option value='39'>Riflettere attacco corporale</option>
			<option value='40'>Riflettere maledizione</option>
			<option value='41'>Resistenza Avvelenamento</option>
			<option value='42'>Possibilità di rigenerare MP</option>
			<option value='43'>Possibilità su EXP Bonus</option>
			<option value='44'>Possibilità di lasciar cadere Yang</option>
			<option value='45'>Possibilità di lasciar cadere il doppio degli oggetti</option>
			<option value='46'>Percentuale dell'aumento dell'effetto di una pozione</option>
			<option value='47'>Possibilità di rigenerare HP</option>
			<option value='48'>Anti Stun</option>
			<option value='49'>Difesa contro rallentamento</option>
			<option value='50'>Immune contro caduta</option>
			<option value='52'>Aumento raggio d'azione dell'arco</option>
			<option value='53'>Aumento del valore di attacco</option>
			<option value='54'>Aumento della difesa</option>
			<option value='55'>Aumento del valore di attacco magico</option>
			<option value='56'>Aumento della difesa magica</option>
			<option value='58'>Max resistenza</option>
			<option value='59'>Forte contro Guerrieri</option>
			<option value='60'>Forte contro Ninja</option>
			<option value='61'>Forte contro Sura</option>
			<option value='62'>Forte contro Shamane</option>
			<option value='63'>Forte contro Mostri</option>
			<option value='64'>Valore di attacco</option>
			<option value='65'>Difesa</option>
			<option value='66'>EXP</option>
			<option value='67'>Possibilit? di drop di oggetti</option>
			<option value='68'>Possibilit? di drop di yang</option>
			<option value='71'>Medi</option>
			<option value='72'>Abilità</option>
			<option value='73'>Resisenza danni abilità</option>
			<option value='74'>Resistenza danni medi</option>
			<option value='76'>iCafe Exp bonus</option>
			<option value='77'>iCafe Possibilità di razziare oggetti</option>
			<option value='78'>Possibilità di difesa da attacchi Guerrieri</option>
			<option value='79'>Possibilità di difesa da attacchi Ninja</option>
			<option value='80'>Possibilità di difesa da attacchi Sura</option>
			<option value='81'>Possibilità di difesa da attacchi Stamani</option>
			</select>
    </div>
  </div>  
  <div class='form-group'>
    <label class='col-lg-2 control-label'>Valore del bonus n°2</label>
    <div class='col-lg-10'>
           <input tabindex='2' name='attrvalue1' class='form-control required' size='30' /></td>
    </div>
  </div>
  <div class='form-group'>
    <label class='col-lg-2 control-label'>Bonus n°3</label>
    <div class='col-lg-10'>
		<select class='form-control required' name='attrtype2'>
			<option> </option>
			<option value='1'>Max Hp</option>
			<option value='2'>Max Mp</option>
			<option value='3'>Forza di vita</option>
			<option value='4'>INT</option>
			<option value='5'>STR</option>
			<option value='6'>Mobilità</option>
			<option value='7'>ATK Speed</option>
			<option value='8'>Velocità di movimento</option>
			<option value='9'>Velocità magia</option>
			<option value='10'>assorbe hp</option>
			<option value='11'>assorbe mp</option>
			<option value='12'>Possibilità avvelenamento </option>
			<option value='13'>Possibilità STUN</option>
			<option value='14'>Possibilità SLOW</option>
			<option value='15'>Possibilità CRITICO</option>
			<option value='16'>Possibilità TRAFIGGONO</option>
			<option value='17'>Forte contro mezziuomini </option>
			<option value='18'>Resistenza animali</option>
			<option value='19'>Resistenza orchi</option>
			<option value='20'>Resistenza esoterici</option>
			<option value='21'>Resistenza zombie</option>
			<option value='22'>Resistenza diavolo</option>
			<option value='12'>Possibilità avvelenamento </option>
			<option value='13'>Possibilità STUN</option>
			<option value='14'>Possibilità SLOW</option>
			<option value='15'>Possibilità CRITICO</option>
			<option value='16'>Possibilità TRAF??</option>
			<option value='17'>Forte contro mezziuomini</option>
			<option value='18'>Resistenza animali</option>
			<option value='19'>Resistenza orchi</option>
			<option value='20'>Resistenza esoterici</option>
			<option value='21'>Resistenza zombie</option>
			<option value='22'>Resistenza diavolo</option>
			<option value='23'>Danni assorbiti da HP</option>
			<option value='24'>Danni assorbiti da MP</option>
			<option value='25'>Possbilita di prendere MP dall'avversario </option>
			<option value='26'>Possibilità di mantenere MP nei colpi </option>
			<option value='27'>Possibilità di bloccare attacco corporale </option>
			<option value='28'>Possibilità di schivare frecce</option>
			<option value='29'>Difesa spada</option>
			<option value='30'>Difesa spadone</option>
			<option value='31'>Difesa pugnale</option>
			<option value='32'>Difesa Pugnale</option>
			<option value='33'>Difesa Ventaglio</option>
			<option value='34'>Difesa Freccia </option>
			<option value='35'>Resistenza Fuoco</option>
			<option value='36'>Resistenza Lampo</option>
			<option value='37'>Difesa Magia </option>
			<option value='38'>Resistenza</option>
			<option value='39'>Riflettere attacco corporale</option>
			<option value='40'>Riflettere maledizione</option>
			<option value='41'>Resistenza Avvelenamento</option>
			<option value='42'>Possibilità di rigenerare MP</option>
			<option value='43'>Possibilità su EXP Bonus</option>
			<option value='44'>Possibilità di lasciar cadere Yang</option>
			<option value='45'>Possibilità di lasciar cadere il doppio degli oggetti</option>
			<option value='46'>Percentuale dell'aumento dell'effetto di una pozione</option>
			<option value='47'>Possibilità di rigenerare HP</option>
			<option value='48'>Anti Stun</option>
			<option value='49'>Difesa contro rallentamento</option>
			<option value='50'>Immune contro caduta</option>
			<option value='52'>Aumento raggio d'azione dell'arco</option>
			<option value='53'>Aumento del valore di attacco</option>
			<option value='54'>Aumento della difesa</option>
			<option value='55'>Aumento del valore di attacco magico</option>
			<option value='56'>Aumento della difesa magica</option>
			<option value='58'>Max resistenza</option>
			<option value='59'>Forte contro Guerrieri</option>
			<option value='60'>Forte contro Ninja</option>
			<option value='61'>Forte contro Sura</option>
			<option value='62'>Forte contro Shamane</option>
			<option value='63'>Forte contro Mostri</option>
			<option value='64'>Valore di attacco</option>
			<option value='65'>Difesa</option>
			<option value='66'>EXP</option>
			<option value='67'>Possibilit? di drop di oggetti</option>
			<option value='68'>Possibilit? di drop di yang</option>
			<option value='71'>Medi</option>
			<option value='72'>Abilità</option>
			<option value='73'>Resisenza danni abilità</option>
			<option value='74'>Resistenza danni medi</option>
			<option value='76'>iCafe Exp bonus</option>
			<option value='77'>iCafe Possibilità di razziare oggetti</option>
			<option value='78'>Possibilità di difesa da attacchi Guerrieri</option>
			<option value='79'>Possibilità di difesa da attacchi Ninja</option>
			<option value='80'>Possibilità di difesa da attacchi Sura</option>
			<option value='81'>Possibilità di difesa da attacchi Stamani</option>
			</select>
    </div>
  </div>  <div class='form-group'>
    <label class='col-lg-2 control-label'>Valore del Bonus n°3</label>
    <div class='col-lg-10'>
           <input tabindex='2' name='attrvalue2' class='form-control required' size='30' /></td>
    </div>
  </div>
  <div class='form-group'>
    <label class='col-lg-2 control-label'>Bonus n°4</label>
    <div class='col-lg-10'>
		<select class='form-control required' name='attrtype3'>
			<option> </option>
			<option value='1'>Max Hp</option>
			<option value='2'>Max Mp</option>
			<option value='3'>Forza di vita</option>
			<option value='4'>INT</option>
			<option value='5'>STR</option>
			<option value='6'>Mobilità</option>
			<option value='7'>ATK Speed</option>
			<option value='8'>Velocità di movimento</option>
			<option value='9'>Velocità magia</option>
			<option value='10'>assorbe hp</option>
			<option value='11'>assorbe mp</option>
			<option value='12'>Possibilità avvelenamento </option>
			<option value='13'>Possibilità STUN</option>
			<option value='14'>Possibilità SLOW</option>
			<option value='15'>Possibilità CRITICO</option>
			<option value='16'>Possibilità TRAFIGGONO</option>
			<option value='17'>Forte contro mezziuomini </option>
			<option value='18'>Resistenza animali</option>
			<option value='19'>Resistenza orchi</option>
			<option value='20'>Resistenza esoterici</option>
			<option value='21'>Resistenza zombie</option>
			<option value='22'>Resistenza diavolo</option>
			<option value='12'>Possibilità avvelenamento </option>
			<option value='13'>Possibilità STUN</option>
			<option value='14'>Possibilità SLOW</option>
			<option value='15'>Possibilità CRITICO</option>
			<option value='16'>Possibilità TRAF??</option>
			<option value='17'>Forte contro mezziuomini</option>
			<option value='18'>Resistenza animali</option>
			<option value='19'>Resistenza orchi</option>
			<option value='20'>Resistenza esoterici</option>
			<option value='21'>Resistenza zombie</option>
			<option value='22'>Resistenza diavolo</option>
			<option value='23'>Danni assorbiti da HP</option>
			<option value='24'>Danni assorbiti da MP</option>
			<option value='25'>Possbilita di prendere MP dall'avversario </option>
			<option value='26'>Possibilità di mantenere MP nei colpi </option>
			<option value='27'>Possibilità di bloccare attacco corporale </option>
			<option value='28'>Possibilità di schivare frecce</option>
			<option value='29'>Difesa spada</option>
			<option value='30'>Difesa spadone</option>
			<option value='31'>Difesa pugnale</option>
			<option value='32'>Difesa Pugnale</option>
			<option value='33'>Difesa Ventaglio</option>
			<option value='34'>Difesa Freccia </option>
			<option value='35'>Resistenza Fuoco</option>
			<option value='36'>Resistenza Lampo</option>
			<option value='37'>Difesa Magia </option>
			<option value='38'>Resistenza</option>
			<option value='39'>Riflettere attacco corporale</option>
			<option value='40'>Riflettere maledizione</option>
			<option value='41'>Resistenza Avvelenamento</option>
			<option value='42'>Possibilità di rigenerare MP</option>
			<option value='43'>Possibilità su EXP Bonus</option>
			<option value='44'>Possibilità di lasciar cadere Yang</option>
			<option value='45'>Possibilità di lasciar cadere il doppio degli oggetti</option>
			<option value='46'>Percentuale dell'aumento dell'effetto di una pozione</option>
			<option value='47'>Possibilità di rigenerare HP</option>
			<option value='48'>Anti Stun</option>
			<option value='49'>Difesa contro rallentamento</option>
			<option value='50'>Immune contro caduta</option>
			<option value='52'>Aumento raggio d'azione dell'arco</option>
			<option value='53'>Aumento del valore di attacco</option>
			<option value='54'>Aumento della difesa</option>
			<option value='55'>Aumento del valore di attacco magico</option>
			<option value='56'>Aumento della difesa magica</option>
			<option value='58'>Max resistenza</option>
			<option value='59'>Forte contro Guerrieri</option>
			<option value='60'>Forte contro Ninja</option>
			<option value='61'>Forte contro Sura</option>
			<option value='62'>Forte contro Shamane</option>
			<option value='63'>Forte contro Mostri</option>
			<option value='64'>Valore di attacco</option>
			<option value='65'>Difesa</option>
			<option value='66'>EXP</option>
			<option value='67'>Possibilit? di drop di oggetti</option>
			<option value='68'>Possibilit? di drop di yang</option>
			<option value='71'>Medi</option>
			<option value='72'>Abilità</option>
			<option value='73'>Resisenza danni abilità</option>
			<option value='74'>Resistenza danni medi</option>
			<option value='76'>iCafe Exp bonus</option>
			<option value='77'>iCafe Possibilità di razziare oggetti</option>
			<option value='78'>Possibilità di difesa da attacchi Guerrieri</option>
			<option value='79'>Possibilità di difesa da attacchi Ninja</option>
			<option value='80'>Possibilità di difesa da attacchi Sura</option>
			<option value='81'>Possibilità di difesa da attacchi Stamani</option>
			</select>
    </div>
  </div>
  <div class='form-group'>
    <label class='col-lg-2 control-label'>Valore del Bonus n°4</label>
    <div class='col-lg-10'>
           <input tabindex='2' name='attrvalue3' class='form-control required' size='30' /></td>
    </div>
  </div>
  <div class='form-group'>
    <label class='col-lg-2 control-label'>Bonus n°5</label>
    <div class='col-lg-10'>
		<select class='form-control required' name='attrtype4'>
			<option> </option>
			<option value='1'>Max Hp</option>
			<option value='2'>Max Mp</option>
			<option value='3'>Forza di vita</option>
			<option value='4'>INT</option>
			<option value='5'>STR</option>
			<option value='6'>Mobilità</option>
			<option value='7'>ATK Speed</option>
			<option value='8'>Velocità di movimento</option>
			<option value='9'>Velocità magia</option>
			<option value='10'>assorbe hp</option>
			<option value='11'>assorbe mp</option>
			<option value='12'>Possibilità avvelenamento </option>
			<option value='13'>Possibilità STUN</option>
			<option value='14'>Possibilità SLOW</option>
			<option value='15'>Possibilità CRITICO</option>
			<option value='16'>Possibilità TRAFIGGONO</option>
			<option value='17'>Forte contro mezziuomini </option>
			<option value='18'>Resistenza animali</option>
			<option value='19'>Resistenza orchi</option>
			<option value='20'>Resistenza esoterici</option>
			<option value='21'>Resistenza zombie</option>
			<option value='22'>Resistenza diavolo</option>
			<option value='12'>Possibilità avvelenamento </option>
			<option value='13'>Possibilità STUN</option>
			<option value='14'>Possibilità SLOW</option>
			<option value='15'>Possibilità CRITICO</option>
			<option value='16'>Possibilità TRAF??</option>
			<option value='17'>Forte contro mezziuomini</option>
			<option value='18'>Resistenza animali</option>
			<option value='19'>Resistenza orchi</option>
			<option value='20'>Resistenza esoterici</option>
			<option value='21'>Resistenza zombie</option>
			<option value='22'>Resistenza diavolo</option>
			<option value='23'>Danni assorbiti da HP</option>
			<option value='24'>Danni assorbiti da MP</option>
			<option value='25'>Possbilita di prendere MP dall'avversario </option>
			<option value='26'>Possibilità di mantenere MP nei colpi </option>
			<option value='27'>Possibilità di bloccare attacco corporale </option>
			<option value='28'>Possibilità di schivare frecce</option>
			<option value='29'>Difesa spada</option>
			<option value='30'>Difesa spadone</option>
			<option value='31'>Difesa pugnale</option>
			<option value='32'>Difesa Pugnale</option>
			<option value='33'>Difesa Ventaglio</option>
			<option value='34'>Difesa Freccia </option>
			<option value='35'>Resistenza Fuoco</option>
			<option value='36'>Resistenza Lampo</option>
			<option value='37'>Difesa Magia </option>
			<option value='38'>Resistenza</option>
			<option value='39'>Riflettere attacco corporale</option>
			<option value='40'>Riflettere maledizione</option>
			<option value='41'>Resistenza Avvelenamento</option>
			<option value='42'>Possibilità di rigenerare MP</option>
			<option value='43'>Possibilità su EXP Bonus</option>
			<option value='44'>Possibilità di lasciar cadere Yang</option>
			<option value='45'>Possibilità di lasciar cadere il doppio degli oggetti</option>
			<option value='46'>Percentuale dell'aumento dell'effetto di una pozione</option>
			<option value='47'>Possibilità di rigenerare HP</option>
			<option value='48'>Anti Stun</option>
			<option value='49'>Difesa contro rallentamento</option>
			<option value='50'>Immune contro caduta</option>
			<option value='52'>Aumento raggio d'azione dell'arco</option>
			<option value='53'>Aumento del valore di attacco</option>
			<option value='54'>Aumento della difesa</option>
			<option value='55'>Aumento del valore di attacco magico</option>
			<option value='56'>Aumento della difesa magica</option>
			<option value='58'>Max resistenza</option>
			<option value='59'>Forte contro Guerrieri</option>
			<option value='60'>Forte contro Ninja</option>
			<option value='61'>Forte contro Sura</option>
			<option value='62'>Forte contro Shamane</option>
			<option value='63'>Forte contro Mostri</option>
			<option value='64'>Valore di attacco</option>
			<option value='65'>Difesa</option>
			<option value='66'>EXP</option>
			<option value='67'>Possibilit? di drop di oggetti</option>
			<option value='68'>Possibilit? di drop di yang</option>
			<option value='71'>Medi</option>
			<option value='72'>Abilità</option>
			<option value='73'>Resisenza danni abilità</option>
			<option value='74'>Resistenza danni medi</option>
			<option value='76'>iCafe Exp bonus</option>
			<option value='77'>iCafe Possibilità di razziare oggetti</option>
			<option value='78'>Possibilità di difesa da attacchi Guerrieri</option>
			<option value='79'>Possibilità di difesa da attacchi Ninja</option>
			<option value='80'>Possibilità di difesa da attacchi Sura</option>
			<option value='81'>Possibilità di difesa da attacchi Stamani</option>
			</select>
    </div>
  </div>
  <div class='form-group'>
    <label class='col-lg-2 control-label'>Valore del Bonus n°5</label>
    <div class='col-lg-10'>
           <input tabindex='2' name='attrvalue4' class='form-control required' size='30' /></td>
    </div>
  </div>
  <div class='form-group'>
    <label class='col-lg-2 control-label'>Bonus n°6</label>
    <div class='col-lg-10'>
		<select class='form-control required' name='attrtype5'>
			<option> </option>
			<option value='1'>Max Hp</option>
			<option value='2'>Max Mp</option>
			<option value='3'>Forza di vita</option>
			<option value='4'>INT</option>
			<option value='5'>STR</option>
			<option value='6'>Mobilità</option>
			<option value='7'>ATK Speed</option>
			<option value='8'>Velocità di movimento</option>
			<option value='9'>Velocità magia</option>
			<option value='10'>assorbe hp</option>
			<option value='11'>assorbe mp</option>
			<option value='12'>Possibilità avvelenamento </option>
			<option value='13'>Possibilità STUN</option>
			<option value='14'>Possibilità SLOW</option>
			<option value='15'>Possibilità CRITICO</option>
			<option value='16'>Possibilità TRAFIGGONO</option>
			<option value='17'>Forte contro mezziuomini </option>
			<option value='18'>Resistenza animali</option>
			<option value='19'>Resistenza orchi</option>
			<option value='20'>Resistenza esoterici</option>
			<option value='21'>Resistenza zombie</option>
			<option value='22'>Resistenza diavolo</option>
			<option value='12'>Possibilità avvelenamento </option>
			<option value='13'>Possibilità STUN</option>
			<option value='14'>Possibilità SLOW</option>
			<option value='15'>Possibilità CRITICO</option>
			<option value='16'>Possibilità TRAF??</option>
			<option value='17'>Forte contro mezziuomini</option>
			<option value='18'>Resistenza animali</option>
			<option value='19'>Resistenza orchi</option>
			<option value='20'>Resistenza esoterici</option>
			<option value='21'>Resistenza zombie</option>
			<option value='22'>Resistenza diavolo</option>
			<option value='23'>Danni assorbiti da HP</option>
			<option value='24'>Danni assorbiti da MP</option>
			<option value='25'>Possbilita di prendere MP dall'avversario </option>
			<option value='26'>Possibilità di mantenere MP nei colpi </option>
			<option value='27'>Possibilità di bloccare attacco corporale </option>
			<option value='28'>Possibilità di schivare frecce</option>
			<option value='29'>Difesa spada</option>
			<option value='30'>Difesa spadone</option>
			<option value='31'>Difesa pugnale</option>
			<option value='32'>Difesa Pugnale</option>
			<option value='33'>Difesa Ventaglio</option>
			<option value='34'>Difesa Freccia </option>
			<option value='35'>Resistenza Fuoco</option>
			<option value='36'>Resistenza Lampo</option>
			<option value='37'>Difesa Magia </option>
			<option value='38'>Resistenza</option>
			<option value='39'>Riflettere attacco corporale</option>
			<option value='40'>Riflettere maledizione</option>
			<option value='41'>Resistenza Avvelenamento</option>
			<option value='42'>Possibilità di rigenerare MP</option>
			<option value='43'>Possibilità su EXP Bonus</option>
			<option value='44'>Possibilità di lasciar cadere Yang</option>
			<option value='45'>Possibilità di lasciar cadere il doppio degli oggetti</option>
			<option value='46'>Percentuale dell'aumento dell'effetto di una pozione</option>
			<option value='47'>Possibilità di rigenerare HP</option>
			<option value='48'>Anti Stun</option>
			<option value='49'>Difesa contro rallentamento</option>
			<option value='50'>Immune contro caduta</option>
			<option value='52'>Aumento raggio d'azione dell'arco</option>
			<option value='53'>Aumento del valore di attacco</option>
			<option value='54'>Aumento della difesa</option>
			<option value='55'>Aumento del valore di attacco magico</option>
			<option value='56'>Aumento della difesa magica</option>
			<option value='58'>Max resistenza</option>
			<option value='59'>Forte contro Guerrieri</option>
			<option value='60'>Forte contro Ninja</option>
			<option value='61'>Forte contro Sura</option>
			<option value='62'>Forte contro Shamane</option>
			<option value='63'>Forte contro Mostri</option>
			<option value='64'>Valore di attacco</option>
			<option value='65'>Difesa</option>
			<option value='66'>EXP</option>
			<option value='67'>Possibilit? di drop di oggetti</option>
			<option value='68'>Possibilit? di drop di yang</option>
			<option value='71'>Medi</option>
			<option value='72'>Abilità</option>
			<option value='73'>Resisenza danni abilità</option>
			<option value='74'>Resistenza danni medi</option>
			<option value='76'>iCafe Exp bonus</option>
			<option value='77'>iCafe Possibilità di razziare oggetti</option>
			<option value='78'>Possibilità di difesa da attacchi Guerrieri</option>
			<option value='79'>Possibilità di difesa da attacchi Ninja</option>
			<option value='80'>Possibilità di difesa da attacchi Sura</option>
			<option value='81'>Possibilità di difesa da attacchi Stamani</option>
			</select>
    </div>
  </div>
  <div class='form-group'>
    <label class='col-lg-2 control-label'>Valore del Bonus n°6</label>
    <div class='col-lg-10'>
           <input tabindex='2' name='attrvalue5' class='form-control required' size='30' /></td>
    </div>
  </div>
  <div class='form-group'>
    <label class='col-lg-2 control-label'>Bonus n°7</label>
    <div class='col-lg-10'>
		<select class='form-control required' name='attrtype6'>
			<option> </option>
			<option value='1'>Max Hp</option>
			<option value='2'>Max Mp</option>
			<option value='3'>Forza di vita</option>
			<option value='4'>INT</option>
			<option value='5'>STR</option>
			<option value='6'>Mobilità</option>
			<option value='7'>ATK Speed</option>
			<option value='8'>Velocità di movimento</option>
			<option value='9'>Velocità magia</option>
			<option value='10'>assorbe hp</option>
			<option value='11'>assorbe mp</option>
			<option value='12'>Possibilità avvelenamento </option>
			<option value='13'>Possibilità STUN</option>
			<option value='14'>Possibilità SLOW</option>
			<option value='15'>Possibilità CRITICO</option>
			<option value='16'>Possibilità TRAFIGGONO</option>
			<option value='17'>Forte contro mezziuomini </option>
			<option value='18'>Resistenza animali</option>
			<option value='19'>Resistenza orchi</option>
			<option value='20'>Resistenza esoterici</option>
			<option value='21'>Resistenza zombie</option>
			<option value='22'>Resistenza diavolo</option>
			<option value='12'>Possibilità avvelenamento </option>
			<option value='13'>Possibilità STUN</option>
			<option value='14'>Possibilità SLOW</option>
			<option value='15'>Possibilità CRITICO</option>
			<option value='16'>Possibilità TRAF??</option>
			<option value='17'>Forte contro mezziuomini</option>
			<option value='18'>Resistenza animali</option>
			<option value='19'>Resistenza orchi</option>
			<option value='20'>Resistenza esoterici</option>
			<option value='21'>Resistenza zombie</option>
			<option value='22'>Resistenza diavolo</option>
			<option value='23'>Danni assorbiti da HP</option>
			<option value='24'>Danni assorbiti da MP</option>
			<option value='25'>Possbilita di prendere MP dall'avversario </option>
			<option value='26'>Possibilità di mantenere MP nei colpi </option>
			<option value='27'>Possibilità di bloccare attacco corporale </option>
			<option value='28'>Possibilità di schivare frecce</option>
			<option value='29'>Difesa spada</option>
			<option value='30'>Difesa spadone</option>
			<option value='31'>Difesa pugnale</option>
			<option value='32'>Difesa Pugnale</option>
			<option value='33'>Difesa Ventaglio</option>
			<option value='34'>Difesa Freccia </option>
			<option value='35'>Resistenza Fuoco</option>
			<option value='36'>Resistenza Lampo</option>
			<option value='37'>Difesa Magia </option>
			<option value='38'>Resistenza</option>
			<option value='39'>Riflettere attacco corporale</option>
			<option value='40'>Riflettere maledizione</option>
			<option value='41'>Resistenza Avvelenamento</option>
			<option value='42'>Possibilità di rigenerare MP</option>
			<option value='43'>Possibilità su EXP Bonus</option>
			<option value='44'>Possibilità di lasciar cadere Yang</option>
			<option value='45'>Possibilità di lasciar cadere il doppio degli oggetti</option>
			<option value='46'>Percentuale dell'aumento dell'effetto di una pozione</option>
			<option value='47'>Possibilità di rigenerare HP</option>
			<option value='48'>Anti Stun</option>
			<option value='49'>Difesa contro rallentamento</option>
			<option value='50'>Immune contro caduta</option>
			<option value='52'>Aumento raggio d'azione dell'arco</option>
			<option value='53'>Aumento del valore di attacco</option>
			<option value='54'>Aumento della difesa</option>
			<option value='55'>Aumento del valore di attacco magico</option>
			<option value='56'>Aumento della difesa magica</option>
			<option value='58'>Max resistenza</option>
			<option value='59'>Forte contro Guerrieri</option>
			<option value='60'>Forte contro Ninja</option>
			<option value='61'>Forte contro Sura</option>
			<option value='62'>Forte contro Shamane</option>
			<option value='63'>Forte contro Mostri</option>
			<option value='64'>Valore di attacco</option>
			<option value='65'>Difesa</option>
			<option value='66'>EXP</option>
			<option value='67'>Possibilit? di drop di oggetti</option>
			<option value='68'>Possibilit? di drop di yang</option>
			<option value='71'>Medi</option>
			<option value='72'>Abilità</option>
			<option value='73'>Resisenza danni abilità</option>
			<option value='74'>Resistenza danni medi</option>
			<option value='76'>iCafe Exp bonus</option>
			<option value='77'>iCafe Possibilità di razziare oggetti</option>
			<option value='78'>Possibilità di difesa da attacchi Guerrieri</option>
			<option value='79'>Possibilità di difesa da attacchi Ninja</option>
			<option value='80'>Possibilità di difesa da attacchi Sura</option>
			<option value='81'>Possibilità di difesa da attacchi Stamani</option>
			</select>
    </div>
  </div>
  <div class='form-group'>
    <label class='col-lg-2 control-label'>Valore del Bonus n°7</label>
    <div class='col-lg-10'>
           <input name='attrvalue6' class='form-control required' size='30' /></td>
    </div>
  </div>
  <div class='form-group'>
    <div class='col-lg-offset-2 col-lg-10'>
      <input type='submit' name='submit' value='Invia' class='btn btn-default'>
    </div>
  </div>
</form>";
		return $text;
	}
	public function response() {
		if (!isset($_POST['owner_id'])) exit(Messaggio("Dati mancanti.", "danger"));
		$owner_id=$_POST['owner_id'];
		$window=$_POST['window'];
		$pos=$_POST['pos'];
		$count=$_POST['count'];
		$vnum=$_POST['vnum'];
		$socket0=$_POST['socket0'];
		$socket1=$_POST['socket1'];
		$socket2=$_POST['socket2'];
		$socket3=$_POST['socket3'];
		$socket4=$_POST['socket4'];
		$socket5=$_POST['socket5'];
		$attrtype0=$_POST['attrtype0'];
		$attrtype1=$_POST['attrtype1'];
		$attrtype2=$_POST['attrtype2'];
		$attrtype3=$_POST['attrtype3'];
		$attrtype4=$_POST['attrtype4'];
		$attrtype5=$_POST['attrtype5'];
		$attrtype6=$_POST['attrtype6'];
		$attrvalue0=$_POST['attrvalue0'];
		$attrvalue1=$_POST['attrvalue1'];
		$attrvalue2=$_POST['attrvalue2'];
		$attrvalue3=$_POST['attrvalue3'];
		$attrvalue4=$_POST['attrvalue4'];
		$attrvalue5=$_POST['attrvalue5'];
		$attrvalue6=$_POST['attrvalue6'];
		$db = new db;
		$q = $db->query(['sql' => 'INSERT INTO `player`.`item` (`id`, `owner_id`, `window`, `pos`, `count`, `vnum`, `socket0`, `socket1`, `socket2`, `socket3`, `socket4`, `socket5`, `attrtype0`, `attrvalue0`, `attrtype1`, `attrvalue1`, `attrtype2`, `attrvalue2`, `attrtype3`, `attrvalue3`, `attrtype4`, `attrvalue4`, `attrtype5`, `attrvalue5`, `attrtype6`, `attrvalue6`) VALUES (NULL, :owner_id, :window, :pos, :count, :vnum, :socket0, :socket1, :socket2, NULL, NULL, NULL, :attrtype0, :attrvalue0, :attrtype1, :attrvalue1, :attrtype2, :attrvalue2, :attrtype3, :attrvalue3, :attrtype4, :attrvalue4, :attrtype5, :attrvalue5, :attrtype6, :attrvalue6)', 'ret' => ['owner_id' => $_POST['owner_id'], 'window' => $_POST['window'], 'pos' => $_POST['pos'], 'count' => $_POST['count'], 'vnum' => $_POST['vnum'], 'socket0' => $_POST['socket0'], 'socket1' => $_POST['socket1'], 'socket2' => $_POST['socket2'], 'socket3' => $_POST['socket3'], 'socket4' => $_POST['socket4'], 'socket5' => $_POST['socket5'], 'attrtype0' => $_POST['attrtype0'], 'attrtype1' => $_POST['attrtype1'], 'attrtype2' => $_POST['attrtype2'], 'attrtype3' => $_POST['attrtype3'], 'attrtype4' => $_POST['attrtype4'], 'attrtype5' => $_POST['attrtype5'], 'attrtype6' => $_POST['attrtype6'], 'attrvalue0' => $_POST['attrvalue0'], 'attrvalue1' => $_POST['attrvalue1'], 'attrvalue2' => $_POST['attrvalue2'], 'attrvalue3' => $_POST['attrvalue3'], 'attrvalue4' => $_POST['attrvalue4'], 'attrvalue5' => $_POST['attrvalue5'], 'attrvalue6' => $_POST['attrvalue6']]]);
		unset($db);
		if (!$q) Messaggio("Creazione Fallita!", "warning");
		else Messaggio("Item Creato!", "success");
	}
    public function __destruct() {}
}
?>