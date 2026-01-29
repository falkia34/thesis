## Context

BAB I (Pendahuluan) is the introduction chapter of an Indonesian undergraduate thesis following UNY format. The existing Latar Belakang section (~2500 words) comprehensively covers the research context but contains implementation details that belong in later sections. The remaining five sub-chapters contain only placeholder text and need complete rewrites.

Current state of `contents/b1-bab1.tex`:

- **Latar Belakang Masalah**: Complete but overly detailed (needs refinement)
- **Identifikasi Masalah**: Placeholder only
- **Batasan Masalah**: Placeholder only
- **Rumusan Masalah**: Placeholder only
- **Tujuan Penelitian**: Placeholder only
- **Manfaat Penelitian**: Placeholder only

Key constraint: All content must be written in formal Indonesian academic style with proper LaTeX formatting and citations using existing BibTeX references.

## Goals / Non-Goals

**Goals:**

- Complete all six sub-chapters of BAB I with proper academic content
- Ensure logical flow from background → problems → scope → questions → objectives → benefits
- Maintain consistency with accessibility gap framing (LEAF as low-code agentic framework)
- Keep Latar Belakang focused on motivation, move detailed architecture to brief mentions
- Align research questions with the three main contributions: architecture blueprint, manifest specification, reference implementation

**Non-Goals:**

- Adding new BibTeX references (use existing 22 entries)
- Writing content for BAB II-V (out of scope for this change)
- Changing the fundamental research framing or contribution claims
- Detailed technical specifications (belongs in BAB II/III)

## Decisions

### Decision 1: Section Interdependency Structure

**Choice**: Use a cascading structure where each section directly builds on the previous.

**Rationale**: UNY thesis format expects clear traceability:

- Identifikasi Masalah → derives 4-5 problems from Latar Belakang narrative
- Batasan Masalah → narrows to 3-4 bounded problems from identification
- Rumusan Masalah → formulates 3 research questions from bounded problems
- Tujuan Penelitian → states 3 objectives matching questions 1:1
- Manfaat Penelitian → lists benefits addressing each objective

**Alternative considered**: Independent sections that don't cross-reference → rejected because Indonesian thesis format emphasizes explicit linkage.

### Decision 2: Three Research Questions Aligned with Contributions

**Choice**: Structure around three research questions:

1. How to design low-code agentic architecture with standard protocols?
2. How to specify declarative manifest format for agent definition?
3. How to implement and validate the framework for Kubernetes/SRE?

**Rationale**: Maps directly to thesis contributions (blueprint, specification, implementation) and provides clear scope for BAB III methodology and BAB IV results.

### Decision 3: Latar Belakang Architecture Update

**Choice**: Update architecture description to reflect revised LEAF model:

- Remove Blackboard as core pattern (it's now an optional custom orchestrator)
- Present Orchestrator as an agent type that coordinates other agents
- Add built-in orchestration patterns: supervisor (default), sequential, parallel
- Clarify 4-layer hierarchy: Orchestrator → Processor → Sensor/Executor
- Mention tools capability enforcement (sensor=read, executor=mutate) at agent layer

**Rationale**:

- Exploration revealed Blackboard is implementation-specific (suitable for SRE case study), not framework-required
- LEAF should be agnostic about coordination patterns while providing sensible defaults
- Orchestrator being an agent (using A2A like others) is cleaner than separate concept
- This aligns with "opinionated about protocols, flexible about patterns" principle

**Alternative considered**: Keep Blackboard as core → rejected because it contradicts framework's pattern-agnostic design goal.

### Decision 4: Problem Count and Scope

**Choice**: Identify 5 problems, bound to 4, formulate 3 research questions.

**Rationale**:

- 5 identified problems show comprehensive analysis
- Bounding to 4 demonstrates methodological rigor (excluding something justifies scope)
- 3 questions is manageable for D4 thesis scope and maps to clear deliverables

### Decision 5: Benefit Categories

**Choice**: Separate into Teoritis (2 items) and Praktis (3 items).

**Rationale**: Standard Indonesian thesis format distinguishes theoretical contributions (to body of knowledge) from practical benefits (to practitioners, institutions).

## Risks / Trade-offs

**Risk 1**: Latar Belakang refinement may break citation flow
→ **Mitigation**: Only condense, don't remove paragraphs; keep all citation commands intact

**Risk 2**: Research questions may be too broad or too narrow for D4 scope
→ **Mitigation**: Each question maps to one clear deliverable; advisor review recommended

**Risk 3**: Indonesian academic phrasing may not match UNY conventions exactly
→ **Mitigation**: Use standard phrases from UNY thesis template; maintain formal register

**Trade-off**: Keeping Latar Belakang mostly intact means some redundancy with Identifikasi Masalah
→ **Accepted**: Redundancy is normal in Indonesian thesis format; each section serves different purpose (narrative vs. enumeration)
